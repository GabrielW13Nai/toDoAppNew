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
    </form> --}}
    @extends('toDoApp')

    @else
    <section class="signup" id="signup">
        <form action="/register" method="POST" class="login" id="login">
            @csrf
            <input type="text" placeholder="Name" name="name" />
            <input type="text" placeholder="email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button class="Login" >Sign Up</button>
        </form>
        <div class="login">If you wish to login click <a href="/login" class="login">&rarr;</a></div>
    </section>
    @endauth
</body>
</html>