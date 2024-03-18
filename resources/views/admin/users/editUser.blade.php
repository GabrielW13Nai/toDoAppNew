<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="flex justify-end">
        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-info"
            style="margin-right: 2rem; margin-bottom:1rem; margin-top: 1rem">Back</a>
    </div>


    <div class="container">

        <div class="container">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <h2 class="summary">User Information</h2>
                <div class="form-floating mb-3">
                    <input class="form-control" style="width:500px" name="name" value="{{ $user['name'] }}"
                        placeholder="name" readonly />
                    <label class="form-label" for="taskname">Name</label>
                </div>



                <div class="sm:col-span-6 form-floating">
                    @php
                        $user_roles = $user->roles()->pluck('id')->toArray();
                    @endphp
                    <select multiple type="text" class="form-select form-select-sm" name="role_ids[]"
                        style="width: 500px">

                        @foreach ($roles as $role)
                            <option @if (in_array($role->id, $user_roles)) selected @endif value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="name" class="form-label block text-sm font-medium">Role:</label>
                </div>


                <button class="btn btn-success rounded-pill p-3" style="margin-block: 1rem">Save changes</button>
            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- component -->

</x-admin-layout>
