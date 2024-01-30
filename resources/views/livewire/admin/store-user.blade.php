<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h2 class="mt-12 text-xl font-bold text-gray-900 text-center">{{$title}}</h2>
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <form action="#">
                    @if ($typeForm == 'create')
                    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Warning alert!</span> The default password will be
                            <span class="font-bold">Firstname.2024!</span>
                        </div>
                    </div>
                    @endif
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" name="firstName" id="firstName" wire:model.live="firstName"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="First name here" required="">
                            <small class="text-red-600">@error('firstName') {{ $message }} @enderror</small>
                        </div>
                        <div class="w-full">
                            <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="text" name="lastName" id="lastName" wire:model.live="lastName"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Last name here" required="">
                            <small class="text-red-600">@error('lastName') {{ $message }} @enderror</small>
                        </div>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                        <div class="w-full">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" wire:model.live="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="example@mail.com" required="">
                            <small class="text-red-600">@error('email') {{ $message }} @enderror</small>
                        </div>
                        <div class="w-full">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">
                                Phone (optional)
                            </label>
                            <input type="text" name="phone" id="phone" wire:model.live="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="+542613935985">
                            <small class="text-red-600">@error('phone') {{ $message }} @enderror</small>
                        </div>
                    </div>
                    @if ($typeForm == 'edit')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                        <div class="w-full @unless (!$resetPassword) hidden @endunless">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">New password
                                (optional) </label>
                            <input type="password" name="password" id="password" wire:model.live="password"
                                placeholder="Add here new password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <small class="text-red-600">@error('password') {{ $message }} @enderror</small>
                            <small class="text-gray-500">If you do not want to change password, leave it blank.</small>
                        </div>

                        <div class="w-full pt-6">
                            <label class="relative inline-flex items-center cursor-pointer ">
                                <input type="checkbox" wire:model.live="resetPassword" name="resetPassword"
                                    class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600">
                                </div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Reset
                                    Password</span>
                            </label>
                        </div>
                    </div>
                    <button type="button" wire:click="storeUser()"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-purple-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Edit
                    </button>

                    @else
                        <button type="button" wire:click="storeUser()"
                            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-purple-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Create
                        </button>
                    @endif
                </form>
            </div>

        </div>
    </div>
</div>