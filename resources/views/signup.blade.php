<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-decoration: none;
        }

        form {
            background-color:#ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .signup h1{
            font-size: 2rem;
            color: #333333;
            text-align: center;
        }

        div{
            margin-top: 1rem;
        }

        .login{
            text-decoration: none;
        }

        .bg-red-500{
            color: white;
            background-color: red;
            font-weight: bold;
            padding-block: 5px;
            padding-inline: 5px;
        }

        .list-errors{
            border-radius: 8px;
            background-color: rgb(236, 161, 161);
            list-style: none;
            padding: 10px;
        }

        
        
    </style>
</head>
<body>

    @auth

    @else

    
    <section class="signup" id="signup">
        <h1 class="todoapp">ToDoApp</h1>
        <div class="error">
            @if($errors->any())
                <div class="bg-red-500">Something went wrong...</div>
                <ul class="list-errors">
                    @foreach($errors->all() as $error)
                        <li class="items">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="/register" method="POST" class="login" id="login">
            @csrf
            <label for="username">Username</label>
            <input class="input-bx" type="text" placeholder="Name" name="name" autocomplete="current-password"/>
            <label for="email">Email</label>
            <input type="text" placeholder="email" name="email" />
            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password" />
            <button class="Login" >Sign Up</button>
            
        </form>
        <div class="login">If you wish to login click <a href="/login" class="login">&rarr;</a></div>
        
    
    </section>
    @endauth

    
</body>
</html>