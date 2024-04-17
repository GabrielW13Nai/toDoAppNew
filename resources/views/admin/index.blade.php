<x-admin-layout>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12 w-full">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-12 p-25">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- component -->
                <link
                href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                rel="stylesheet">
                <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
                <div class="align-items-center" style="margin-left: 3rem">
                    <div class="col-span-12 w-full">
                        <div class="overflow-auto lg:overflow-visible align-items-center justify-content-center">
                            <table class="table text-gray-400 border-separate space-y-6 text-lg ">
                                <thead class="bg-white-800 text-gray-500 ml-auto mr-auto">
                                    <tr>
                                        
                                        <th class="p-3 left-1 text-left">Id</th>
                                        <th class="p-3 ml-15 text-left">Name</th>
                                        <th class="p-3 ml-15 text-left">Email</th>
                                        {{-- <th class="p-3 text-left">Role</th> --}}
                                        <th class="p-3 ml-15 text-left">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr class="bg-white-800 ml-auto mr-auto">
                                            <td class="p-3">
                                                <div class="flex align-items-center">
                                                    <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                                    <div class="ml-3 my-auto">
                                                        <div class="">{{ $user->id}}</div>
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
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
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


