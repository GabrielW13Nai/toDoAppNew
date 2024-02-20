<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
            <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
            rel="stylesheet">
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <div class="align-items-center" style="margin-left: 3rem">
                <div class="col-span-12 w-full">
                    <div class="overflow-auto lg:overflow-visible">
                        <table class="table text-gray-400 border-separate space-y-6 text-lg">
                            <thead class="bg-white-800 text-gray-500">
                                <tr>
                                    
                                    <th class="p-3 text-left">Id</th>
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Email</th>
                                    {{-- <th class="p-3 text-left">Role</th> --}}
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-6 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr class="bg-white-800">
                                        <td class="p-6">
                                            <div class="flex align-items-center">
                                                <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                                <div class="ml-3 my-auto">
                                                    <div class="">{{ $user->id." ."}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            {{ $user->name }}
                                        </td>
                                        <td class="p-3">
                                            {{ $user->email}}
                                        </td>
                                        {{-- <td class="p-3 font-bold">
                                            {{ $user->role}}
                                        </td> --}}
                                        <td class="p-3">
                                            <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                                        </td>
                                        <td class="p-6">
                                            <div class="container flex">
                  
                                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
    
                                                <form action="{{ route('admin.users.destroy', $user->id )}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the user?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-gray-400 hover:text-gray-100  ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </button>
                                                </form>
                                               
                                                {{-- <a href=" {{ route('admin.users.show', $user->id) }}" class="text-gray-400 hover:text-gray-100  ml-2">
                                                    <i class="material-icons-round text-base">work</i>
                                                </a> --}}
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


