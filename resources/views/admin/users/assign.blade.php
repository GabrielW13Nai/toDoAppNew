<x-admin-layout>

        <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
        <div class="flex justify-end">
            <a href="{{ route('admin.index') }}" class="btn btn-outline-info" style="margin-right: 2rem; margin-bottom:1rem; margin-top: 1rem">Back</a>
        </div>
        
        
        <div class="container position-relative">
            
            <div class="mt-4 p-2">

                    <h4 class="font-semibold text-2xl">All Tasks</h4>
                    {{-- <div class="container align-items-start" style="margin-left:0.25rem;">
                        <div class="card-body d-flex flex-wrap gap-3">
                            @foreach ($tasks as $task)
                                <div class="card" style="width:200px; padding: 20px; margin-top:10px">
                                    <div class="font-sans antialiased" >{{ $task->task_name}}</div>
                                    <div class="d-flex">
                                        <div class="view"><a href="{{route('admin.users.tasks.show', $task->id)}}"> <i class="fa fa-eye"
                                            style="font-size:14px;color:black"></i></a></div>
                                        <div class="card-text"><a href="{{route('admin.users.tasks.edit.show', $task->id)}}"><i class="fa fa-edit"
                                                style="font-size:14px;color:black; margin-left:1rem"></i></a></div>
                                        <form action="{{route('admin.users.tasks.destroy', $task->id)}}" class="delete" method="POST" onsubmit="return confirm('Are you sure you want to delete the task?')">
                                            @csrf
                                            @method('DELETE')
                                            <button><i class="fa fa-trash-o" style="font-size:14px; border:none; margin-left:0.5rem"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> --}}
                    <div class="align-items-center" style="margin-left: 3rem">
                        <div class="col-span-12 w-full">
                            <div class="overflow-auto lg:overflow-visible">
                                <table class="table text-gray-400 border-separate space-y-6 text-lg">
                                    <thead class="bg-white-800 text-gray-500">
                                        <tr>
                                            
                                
                                            <th class="p-3 text-left">Task Name</th>
                                            <th class="p-3 text-left">Task Description</th>
                                            <th class="p-3 text-left">Assigned To</th>
                                            <th class="p-3 text-left">Actions</th>
                
                           
                                        </tr>
                                    </thead>
                                    <tbody>
        
                                        @foreach ($tasks as $task)
                                            <tr class="bg-white-800">
        
                                                <td class="p-3">
                                                    {{ $task->task_name}}
                                                </td>
                                                <td class="p-3">
                                                    {{ $task->task_description}}
                                                </td>
                                                <td class="p-3">
                                                    {{ $task->user->name}}
                                                </td>
                                                {{-- <td class="p-3 font-bold">
                                                    {{ $user->role}}
                                                </td> --}}
                                                <td class="p-6">
                                                    <div class="container flex">
                                                        
                                                        <a href="{{route('admin.users.tasks.show', $task->id)}}" class="text-gray-400 hover:text-gray-100 mr-2">
                                                            <i class="material-icons-outlined text-base">visibility</i>
                                                        </a>
                                                        <a href="{{route('admin.users.tasks.edit.show', $task->id)}}" class="text-gray-400 hover:text-gray-100  mx-2">
                                                            <i class="material-icons-outlined text-base">edit</i>
                                                        </a>
            
                                                        <form action="{{route('admin.users.tasks.destroy', $task->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the task?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="text-gray-400 hover:text-gray-100  ml-2">
                                                                <i class="material-icons-round text-base">delete_outline</i>
                                                            </button>
                                                        </form>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <style>
                    .table {
                        border-spacing: 0 15px;
                    }
        
                    i {
                        font-size: 1rem !important;
                    }
        
                    .table tr {
                        border-radius: 20px;
                    }
        
                    tr td:nth-child(n+5),
                    tr th:nth-child(n+5) {
                        border-radius: 0 .625rem .625rem 0;
                    }
        
                    tr td:nth-child(1),
                    tr th:nth-child(1) {
                        border-radius: .625rem 0 0 .625rem;
                    }
                    </style>

            </div>


           
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- component -->

</x-admin-layout>
