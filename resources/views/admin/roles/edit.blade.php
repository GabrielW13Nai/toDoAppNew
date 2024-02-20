<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
        <div class="flex justify-end">
            <a href="{{ route('admin.permissions.index') }}" class="btn btn-outline-info" style="margin-right: 2rem; margin-bottom:1rem; margin-top: 1rem">Back</a>
        </div>
    
    <div class="container position-relative">
        <form action="{{route('admin.roles.update', $role->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-floating mb-20">
                <input type="text" class="form-control" name="name" value="{{ $role->name }}" placeholder="permission...." style="width: 500px"/>
                <label for="name" class="form-label">Role Name</label>
            </div>
            <button class="btn btn-success rounded-pill p-3" style="margin-block: 1rem">Edit Role</button>
        </form>

        <div class="mt-4 p-2">
            <div class="max-w-xl container">
                <form action="{{ route('admin.roles.permissions.add', $role->id) }}" method="POST">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="form-label block text-sm font-medium">Permision Name</label>
                        <select type="text" autocomplete="permission" class="form-select form-select-sm" name="permission" style="width: 500px">
                            @foreach($permissions as $permission)
                                <option value="{{ $permission->name }}"> {{ $permission->name }} </option>
                            @endforeach
                        </select>
                    </div>
        
                    <button class="btn btn-success rounded-pill p-3" style="margin-block: 1rem">Assign Permission</button>
                </form>
    
            </div>

            <h4 class="font-semibold text-2xl">Permissions</h4>
            <div class="mt-4 p-2 gap-2">
                @if($role->permissions)
                    @foreach($role->permissions as $role_permission)
                        <div class="container mb-2">
                            
                            <form action="{{ route('admin.roles.permissions.revoke', [$role->id, $role_permission->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the permission?')">
                                @csrf
                                @method('DELETE')
                                <div class="d-flex">
                                    <span class="d-block form-control">{{ $role_permission->name}}</span>
                                    <button class="text-gray-400 hover:text-red-500 ml-2 border-none">
                                        <i class="material-icons-round text-base hover:bg-red-500">delete_outline</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- component -->

</x-admin-layout>


