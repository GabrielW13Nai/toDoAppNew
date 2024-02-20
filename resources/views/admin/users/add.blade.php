<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12 w-full flex">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
            <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
            rel="stylesheet">
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            
            </div>  
        </div>

        <div class="align-items-start">
            <form method="POST" action="{{ route('admin.users.addition') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 align-items-start" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="width:25rem"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" style="width:25rem" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" style="width:25rem"/>
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        
                    <x-text-input id="password_confirmation" class="block mt-1"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" style="width:25rem"/>
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
    
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="errors">
                @if($errors->any())
                    <div class="alert alert-danger">Something went wrong...</div>
                    <ul class="errors-list">
                        @foreach($errors->all() as $error)
                            <span class="text-sm text-red-500">{{$error}}</span>
                        @endforeach
                    </ul>
                @elseif(session()->has('message'))
                    <div class="alert alert-success">{{ session()->get('message')}}</div>
                {{-- @else
                <div class="alert alert-success">Permission created successfully</div> --}}
                @endif
            </div>
        </div>
    </div>




    <!-- component -->

</x-admin-layout>


