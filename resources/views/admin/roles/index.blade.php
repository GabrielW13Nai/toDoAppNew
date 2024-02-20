<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12 w-full">
        <div class="flex justify-end mt-5 ml-3 mb-2">
            <a href="{{ route('admin.roles.create') }}" class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Create</a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
            <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
            rel="stylesheet">
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <div class="align-items-center">
                <div class="col-span-12 w-full">
                    <div class="overflow-auto lg:overflow-visible ">
                        <table class="table text-gray-400 border-separate space-y-6 text-lg" style="margin-left: 2rem; padding: 2rem">
                            <thead class="bg-white-800 text-gray-500">
                                
                                <tr>
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-center">Actions</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                    <tr class="bg-white-800">
    
                                        <td class="p-3">
                                            {{ $role->name }}
                                        </td>
                                        <td class="p-3 ">
                                            
                                            <div class="flex">
                                                <a href="{{ route('admin.roles.edit', $role->id)}}" class="text-gray-400 hover:text-blue-100  mx-2">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
                                                <form action="{{ route('admin.roles.destroy', $role->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the role?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-gray-400 hover:text-red-500 ml-2 border-none">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </button>
                                                </form>
                                                <a href=" {{ route('admin.users.show', $role->id) }}" class="text-gray-400 hover:text-gray-100  ml-4">
                                                    <i class="material-icons-round text-base">work</i>
                                                </a>
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
    </div>



    <!-- component -->

</x-admin-layout>


