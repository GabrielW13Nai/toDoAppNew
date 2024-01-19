<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    {{-- <div>SUCCESSFULLY LOGGED IN</div>
    <form action="/logout" method="POST" class="logout">
        @csrf
        <button class="logout">LOGOUT</button>
    </form>
    <div class="todo">
        

    </div> --}}
    @extends('toDoApp')
    @else
    <section class="login" id="login">
        <form action="/login" method="POST" class="login" id="login">
            @csrf
            <input type="text" placeholder="email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button class="Login" >Login</button>
        </form>
    </section>
    @endauth
</body>
</html>