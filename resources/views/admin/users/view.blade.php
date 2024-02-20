<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
        <div class="flex justify-end">
            <a href="{{ route('admin.users.showTasks') }}" class="btn btn-outline-info" style="margin-right: 2rem; margin-bottom:1rem; margin-top: 1rem">Back</a>
        </div>
        
        
        <div class="container">
            
                    <div class="card p-3 mt-2">
                        <form action="{{ route('admin.users.tasks.show', [$task->id, $user->id])}}">
                    
                            <h2 class="summary">Task Summary</h2>
                            <div class="card-body">
                                <div class="col">
                                    <label class="form-label" for="taskname">Task Name</label>
                                    <h6 class="task-details"><strong> {{$task['task_name']}} </strong> </h6>
                                </div>
                                <div class="col">
                                    <label for="taskdescription" class="form-label">Task Description</label>
                                    <div><strong> {{$task['task_description']}} </strong></div>
                                </div>
                                <div class="col">
                                    <label class="form-label" for="taskname">Assigned To:</label>
                                    <h6 class="task-details"> <strong>{{$user->name}}</strong></h6>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
           
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- component -->

</x-admin-layout>
