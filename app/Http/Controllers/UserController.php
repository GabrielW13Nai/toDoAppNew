<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class UserController extends Controller
{   
    public function userAddTask(){
       return view('admin.users.viewtask');
    }

    public function dashboard(Request $request ){
        
        if(auth()->check()){
            
            // auth()->user()->assignRole('user');       
            $user = auth()->user();
            
            $tasks = $user->usersTasks()->latest()->get();  
            return view('dashboard', ['user' => $user, 'tasks' => $tasks]);
        }
        $this->authorize('create', Task::class);
    }
        public function login(Request $request){
            
            $incomingFields = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])){
                
                $request->session()->regenerate();
                flash('Logged in successfully')->success();
                return redirect()->intended('/dashboard');

            };

            return redirect()->back()
            ->withInput()
            ->withErrors([
                'email' => 'Username or password is invalid'
            ]
        );


            
            
        }

        public function logout(Request $request){

            // auth()->logout();
            // return redirect('/');

            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // $notification = array(
            //     'message' => 'User logout is successful',
            //     'alert-type'=> 'success'
            // );
            return redirect('/login');
        }
        public function register(Request $request){

        // dd($request->all());
            // Logic to create user goes here
        
            {
                $validator = Validator::make($request->all(), [
                    'name' => 'required|string|min:5|max:255',
                    'email' => 'required|email|unique:users|max:255',
                    'password' => 'required|string|min:8',
                ]);
        
                if ($validator->fails()) {
                    return redirect('register')
                                ->withErrors($validator)
                                ->withInput();
                }
        
                try{
                    $user = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                ])->assignRole('agent');

                Auth::login($user);
                return redirect('/dashboard')->with('success', 'User registered successful');
            }

            catch(\Exception $e){
                return redirect('register', ['e' => $e])->with('error', 'An error occurred while creating the user');
            }

            
                
            }
        }

        // public function index(){
        //     $username = auth()->user()->name;

        //     return view('/dashboard', [compact('name') => $name]);
        // }
}
