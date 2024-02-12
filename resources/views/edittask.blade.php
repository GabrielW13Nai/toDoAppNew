<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Indie+Flower&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;0,900;1,400&family=Oswald:wght@600&family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Slab:wght@400;800&family=Roboto:wght@300;400;500;700;900&display=swap');
        
        body{
            align-items: center;
            justify-content: center;
            margin-left: -2rem;
            margin-top: -2rem;
            top:0;
            left: 0;
            background-color: #f4f4f4;
            padding: 2rem;
            font-family: 'Roboto Slab', serif;
            overflow: hidden;
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

        form > *{
            color: #000;
        }

        .tasks {
            background-color: #ffffff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            width: 40rem;  
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        
        .edit-header{
            margin-left: 1.8rem;
        }

/* 
        form input{
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            color: #000;
            border: 1px var(--other-color) solid;
        } */
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
            display: block;
            position: relative;
            
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
            top: 0;
            left:0;
        }


        #dashboard-btn{
            position: absolute;
            right: 1rem;
            top: 11rem;
        }

        .container{
            margin-block: 2rem;
        }

        .back{
            position: absolute;
            right: 1rem;
        }

    </style>

    <div class="container">
        <h1 class="edit-header">Edit Task Details</h1>
        
        <div class="container" style="margin-left: 0.75rem">
            <button type="button" class="btn btn-outline-info" id="dashboard-btn" onclick=" window.location='{{ route('dashboard') }}'">Back</button>

            <form action="/edittask/{{$task->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-floating">
                    <input type="text" name="task_name" value="{{$task->task_name}}">
                    <textarea name="task_description" id="task-description" >{{$task->task_description}}</textarea>
                    <button class="btn btn-success d-block">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</x-app-layout>