<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="login" id="login">
        <form action="/register" method="POST" class="login" id="login">
            @csrf
            <input type="text" placeholder="Name" name="name" />
            <input type="text" placeholder="email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button class="Login" >Login</button>
        </form>
    </section>
</body>
</html>