<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;
            background-color: #f4f4f4;
            text-decoration: none;
            font-family: Arial, sans-serif;
        }

        form{
            width: 300px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)
        }

        input{
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            margin-bottom: 16px;
            border-radius: 4px;
        }

        label{
            display: block;
            margin-bottom: 8px;
        }


        button{
            background-color: #333333;
            border: none;
            width: 100%;
            cursor: pointer;
            border-radius: 4px;
            padding: 10px;
            color: #fff;
            text-decoration: none;
        }

        button:hover{
            background-color: #45a049;
        }

        .login p{
            text-decoration: none;
        }

        .login h1{
            font-size: 2rem;
            color: #333333;
            text-align: center;
        }

        .signup{
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

        .error-login{
            background-color: rgb(255, 47, 0);
            width: 300px;
            
        }

    </style>



</head>
<body>
    @auth
    
    @else
    <section class="login" id="login">
        <h1 class="todoapp">Login</h1>
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
        <form action="/login" method="POST" class="login" id="login">
            @csrf
            <input type="text" placeholder="email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button class="Login" >Login</button>
        </form>
        <p class="paralogin">If you have not signed up yet, click here <a href="/register" class="signup">&rarr;</a></p>
    </section>
    @endauth

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info')}}";
            switch(type){
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ")
                break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ")
                break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ")
                break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ")
                break;

        }
            
        @endif
    </script> --}}
</body>
</html>