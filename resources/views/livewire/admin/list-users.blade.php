<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h2 class="mt-12 text-xl font-bold text-gray-900 text-center">List users</h2>
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    First Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Last Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Phone
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-normal">
                                    {{$user->first_name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$user->last_name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$user->email}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$user->phone ?? '-'}}
                                </td>
                                <td class="px-6 py-4 flex justify-between">
                                    <a href="{{route('admin.users.store', $user->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="button" wire:click="deleteUser({{$user}})"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline"><i
                                            class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>