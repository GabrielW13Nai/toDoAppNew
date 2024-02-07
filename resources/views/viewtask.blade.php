<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Indie+Flower&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;0,900;1,400&family=Oswald:wght@600&family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Slab:wght@400;800&family=Roboto:wght@300;400;500;700;900&display=swap');
        
        body{
            align-items: center;
            justify-content: center;
            margin: 0;
            background-color: #f4f4f4;
            padding: 2rem;
            font-family: 'Roboto Slab', serif;
        }

        header {
            background-color: #4caf50;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }

        input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            margin-right: 10px;
            margin-bottom: 10px; 
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 80%;  
        }

        textarea {
            flex-grow: 1;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            height: 7.5rem;
            width: 80%;  
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 1rem;
        }


        .container .tasks {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* width: 40rem;   */
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 2rem;
        }
        
        .edit-header{
            margin-left: 1.8rem;
        }

        p{
            background-color: #333333;
            border: none;
            width: 100px;
            cursor: pointer;
            border-radius: 4px;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            text-align: center;

        }

        p:hover{
            background-color: #45a049;
        }

        a{
            text-decoration: none;
            color: #fff;
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
        
        .task-btns{
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 1rem;
            position: relative;
            display: block;
        }
        .menu{
            height: 100vh;
            background-color: #FF033E;
            max-width: 5rem;
            top: 0;
            left: 0;
            bottom: 0;
            color: #000;
            text-align: center;
            font-family: 'Roboto Slab', serif;
            font-size: 1rem;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.12), 0 2px 3px 0 rgba(0, 0, 0, 0.22);
            line-height: 4rem;
            position: absolute;

            
        }

        .menu .dashboard-ref{
            width: 50px;
            height: 40px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-block: 1rem;
            vertical-align: center;
        }

        .navigation{
            display: flex;
            gap: 2rem;
            /* top: 0;
            left:0; */
        }

        .back{
            position: absolute;
            right: 1rem;
        }

        .container{
            margin-block: 4rem;
            margin-left: 5rem;
        }

    </style>
</head>
<body>

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

    <div class="navigation">
        <div class="menu">
            {{-- <p class="header-menu">Menu</p> --}}
            <a href="/dashboard" class="dashboard-ref"><i class="fa fa-home" style="font-size:28px;color:black"></i></a>
            <a href="/dashboard" class="dashboard-ref"><i class="fa fa-gear" style="font-size:28px;color:black"></i></a>
    
        </div>

        <button class="back btn btn-outline-info" onclick="window.location='{{ route('dashboard') }}'">Back</button>

        <div class="container">
        
            <div class="tasks">
                <form action="/addtask" method="POST" class="tasks" id="tasks" style="width: 600px">
                        @csrf
                        <h2 class="tasks-header">Task:</h2>
                        <input type="text" class="task-name form-control" name="task_name" placeholder="Name"/>
                        <textarea type="text" class="task-input" name="task_description" style="width: 600px" placeholder="Add task here..."></textarea>
                        <button class="task-btns" id="btns">Add task</button>
                </form>
            </div>   
        </div>

    </div>
    
</body>
</html>