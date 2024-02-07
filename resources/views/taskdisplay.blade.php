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

        
        .task-info-card{
            margin-block: 3rem;
        }

        button{
            position: absolute;
            top:0.75rem;
            right:1rem;
        }

        .menu{
            height: 100vh;
            background-color: #FF033E;
            width: 4rem;
            top: 2;
            left: 0;
            bottom: 0;
            color: #000;
            text-align: center;
            font-family: 'Roboto Slab', serif;
            font-size: 1rem;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.12), 0 2px 3px 0 rgba(0, 0, 0, 0.22);
            line-height: 4rem;
            display: block;
            position: relative;
            
        }

        .menu .dashboard-ref{
            width: 30px;
            height: 30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-block: 1.9rem;
            vertical-align: center;
        }

        .container{
            display: flex;
            gap: 2rem;
            top: 0;
            left:0;
            margin-left: -0.9rem;
        }

    </style>
</head>
<body>


    
    <div class="container">
        <div class="menu">
            {{-- <p class="header-menu">Menu</p> --}}
            <a href="/dashboard" class="dashboard-ref"><i class="fa fa-home" style="font-size:20px;color:black"></i></a>
            <a href="/dashboard" class="dashboard-ref"><i class="fa fa-gear" style="font-size:20px;color:black"></i></a>
        
        </div>

        <div class="body">
            <button type="button" class="btn btn-outline-info" id="dashboard-btn" onclick=" window.location='{{ route('dashboard') }}'">Back</button>
            <section class="task-info-card">
                
                <form action="/taskdisplay/{{$task->id}}">
                    
                    <h2 class="summary">Task Summary</h2>
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="taskname">Task Name</label>
                            <h6 class="task-details">{{$task['task_name']}} </h6>
                        </div>
                        <div class="col">
                            <label for="taskdescription" class="form-label">Task Description</label>
                            <div>{{$task['task_description']}}</div>
                        </div>
                        
                    </div>
                </form>
                    
            </section>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>