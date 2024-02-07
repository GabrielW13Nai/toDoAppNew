<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Indie+Flower&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;0,900;1,400&family=Oswald:wght@600&family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Slab:wght@400;800&family=Roboto:wght@300;400;500;700;900&display=swap');

        body {
            /* /* align-items: center;
            justify-content: center;
            margin: 0;
            background-color: #f4f4f4;
            padding: 2rem; */
            font-family: 'Roboto Slab', serif;
            /* margin-left: -0.05rem;
            margin-top: -0.2rem; */
            top:0;
            left:0;
            overflow-X: hidden;
        }

        .tasks {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            width: 300px;
            align-items: center;
            justify-content: space-between;
        }

        input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            flex-grow: 1;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            height: 7.5rem;
        }

        button {
            box-shadow: #222222 0 0 0 2px, rgba(255, 255, 255, 0.8) 0 0 0 4px;
            transition: box-shadow .2s;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-family: Circular, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif;
            border: none;
        }

        .task-info-card {
            align-items: flex-start;
            display: flex;
            flex-wrap: wrap;
            margin-top: 1rem;
            gap: 2rem;
        }

        .task-info-card .row-task {
            display: flex;
            padding: 10px;
            flex: 1 1 30rem;
            width: 30rem;
            height: 7.5rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 8px;
            background-color: #f4f4f4;
            color: #000;
            align-items: center;
            justify-content: center;
            gap: 2rem;

        }

        .view-delete {
            border: none;
        }

        .task-info-card .row-task:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }


        a:link {
            color: #fff;
            text-decoration: none;
        }

        /* span{
            font-size: 1.2rem;
        } */

        .task-btn-add {
            padding: 10px;
            flex: 1 1 30rem;
            width: 15rem;
            height: 5rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 8px;
            background-color: lavender;
            color: #000;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 2rem;
            padding-top: 2rem;
            margin-top: 3rem;
            cursor: pointer;
        }

        .task-card {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .task-card .row-task {
            padding: 10px;
            flex: 1 1 30rem;
            height: 3rem;
            transition: 0.3s ease-in;
            display: flex;
            flex-wrap: wrap;
            gap: 1.2rem;
        }

        .task-header {
            color: hsla(0, 0, 0.15, 0.87);
        }

        .task-info-card .row h1 {
            color: #000;
        }

        .todoapp .container{
            height: 40px;
            width: 300px;
            position: absolute;
            right: 0;
            font-size: 1.2rem;
            color: green;
        }

        .logout{
            position: absolute;
            right: 1rem;
        }

        .navigation{
            display: flex;
            gap: 2rem;
            /* top: 0;
            left:0; */
        }

        a{
            border: none;
            width: 80px;
            height: 100px
            cursor: pointer;
            border-radius: 4px;
            padding: 10px;
            color: #000;
            text-decoration: none;
            text-align: center;
        }

        a:hover{
            color: green;
        }

        .header-menu{
            font-size: 1.2rem;
        }

        .menu-task{
            height: 100vh;
            background-color: #FF033E;
            min-width: 4rem;
            top: 0;
            left: 0;
            bottom: -10rem;
            color: #000;
            text-align: center;
            font-family: 'Roboto Slab', serif;
            font-size: 1rem;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.12), 0 2px 3px 0 rgba(0, 0, 0, 0.22);
            line-height: 4rem;
            display: block;
            position: relative;
        }

        .menu-task .dashboard-ref{
            width: 30px;
            height: 30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-block: 1rem;
            vertical-align: center;
        }

        .body-task{
            margin-block: 1rem;
        }

        .dashboard-ref-btn{
            width: 50px;
            height: 40px;
            display: block;
            margin-block: 1rem;
            vertical-align: center;
            border: transparent;
            padding: 0;
            background-color: transparent;
        }

        form{
            outline: none;
            border: none;
        }


    </style>
</head>

<body>

    <div class="navigation">
        
        <div class="menu-task">
            {{-- <p class="header-menu">Menu</p> --}}
            <a href="/dashboard" class="dashboard-ref"><i class="fa fa-home" style="font-size:20px;color:black"></i></a>
            <a href="/dashboard" class="dashboard-ref"><i class="fa fa-gear" style="font-size:20px;color:black"></i></a>
        </div>
        <div class="body-task">
            <section class="todoapp">
                <div class="alert alert-success">
                    @include('flash::message')
                </div>
        
            </section>
            <form action="/logout" method="POST" class="logout">
                @csrf
                <button class="dashboard-ref-btn"><i class="fa fa-sign-out" style="font-size:28px;color:black" onclick="return confirm('Are you sure you want to logout? ')"></i></button>
            </form>
        
        
            <div class="title" style="margin-block: 1rem">
                <div>Welcome back
                    <strong>{{ $user->name }}</strong>
                    {{-- <span> Created {{ $user->created_at->diffForHumans() }}</span> --}}
                </div>
            </div>
        
        
            <h3 class="task-header">Here are your pending tasks:</h3>
            <section class="task-info-card">
                @foreach ($tasks as $task)
                    <div class="row-task">
                        <h3 class="task">{{ $task['task_name'] }}</h3>
                        <p class="view"><a href="/taskdisplay/{{ $task->id }}"> <i class="fa fa-eye"
                                    style="font-size:18px;color:black"></i></a></p>
                        <p class="view"><a href="/edittask/{{ $task->id }}"><i class="fa fa-edit"
                                    style="font-size:18px;color: black"></i></a></p>
                        <form action="/deletetask/{{ $task->id }}" class="delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="view-delete"><i class="fa fa-trash-o" style="font-size:18px;color:red" ONC></i></button>
                        </form>
                    </div>
                @endforeach
            </section>
        
            <div class="task-card">
                <div class="row-task">
                    <p class="task-btn-add"><a href="/addtask"><i class="fa fa-plus" style="font-size:20px;color:black"> Add
                                Task</i></a></p>
                    {{-- <p class="task-btn-edit"><a href="/edittask/{{$task->id}}"><i class="fa fa-edit" style="font-size:20px;color: black"> View all tasks</i></a></p> --}}
                    {{-- <p class="task-btn-delete"><a href="/deletetask"><i class="fa fa-trash-o" style="font-size:20px;color:red"> Delete Task</i></a></p> --}}
                </div>
            </div>
        
            <script src="//code.jquery.com/jquery.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script>
                $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            </script>
        
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
