<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
        <div class="flex justify-end mt-5 ml-3">
        <a href="{{ route('admin.permissions.index') }}" class="btn btn-outline-info" style="margin-right: 2rem">Back</a>
    </div>
    <div class="container">
        <form action="{{route('admin.roles.store')}}" method="POST">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control" name="name" placeholder="Role...." style="width: 500px"/>
                <label for="role_name" class="form-label">Role Name</label>
            </div>
            <div class="errors">
                @if($errors->any())
                    <div class="alert alert-danger text-sm">Something went wrong...</div>
                    <ul class="errors-list">
                        @error('name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror
                    </ul>
                {{-- @elseif(session()->has('message'))
                    <div class="alert alert-success">{{ session()->get('message')}}</div> --}}
                {{-- <div class="alert alert-success d-none">Role created successfully</div> --}}
                @endif
            </div>
            <button class="btn btn-success rounded-pill p-3" id="btn-create" style="margin-block: 1rem" onclick="displayMessage">Create role</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- component -->

</x-admin-layout>


