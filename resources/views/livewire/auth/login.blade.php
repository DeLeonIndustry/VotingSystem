<x-layouts.app>
    <div class="relative isolate px-6 pt-4 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

                <div class="mt-32 sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class=" text-3xl font-extrabold text-center text-gray-900 leading-9">
                        Sign in to your account
                    </h2>
                    <p class="text-center">Or</p>
                    <p class="mb-2 text-center"><a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Create a new account.</p>
                    </a>
                    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                        <form>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                                    Email address
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="email" name="email" type="email" required="" autofocus=""
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                                </div>

                            </div>

                            <div class="mt-6">
                                <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                                    Password
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="password" type="password" required=""
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                                </div>

                            </div>

                            <div class="flex items-center justify-between mt-6">
                                <div class="flex items-center">
                                    <input id="remember" type="checkbox"
                                        class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out">
                                    <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                        Remember
                                    </label>
                                </div>

                                <div class="text-sm leading-5">
                                    <a href="/forgot-password"
                                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                        Forgot your password?
                                    </a>
                                </div>
                            </div>

                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit"
                                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        Sign in
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
            


            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
