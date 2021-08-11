<div>
    <!-- Display Errors thrown by Laravel -->
    @if ($errors->any())
        <div class="max-w-5xl mx-auto rounded-md mt-4 bg-red-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/x-circle -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">
                        There was an error with the submission
                    </h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- Display Success Message -->
    @if (session()->has('message'))
        <div x-data="{ successMessageShow: @entangle('successMessageShow') }"

             x-init="setTimeout(() => successMessageShow = false, 3000)"
             x-show="successMessageShow"
             class="rounded-md max-w-5xl mx-auto mt-4 bg-green-50 p-4">

            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('message') }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" @click="successMessageShow=false"
                                class="inline-flex bg-green-50 rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
                            <span class="sr-only">Dismiss</span>
                            <!-- Heroicon name: solid/x -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


        </div>
    @endif

<!-- Display Error Message -->

    @if (session()->has('error'))
        <div x-data="{ errorMessageShow: @entangle('errorMessageShow') }"
             x-init="setTimeout(() => errorMessageShow = false, 3000)"
             x-show="errorMessageShow"
             class="rounded-md max-w-5xl mx-auto mt-4 bg-red-50 p-4">

            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800">
                        {{ session('error') }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" @click="errorMessageShow=false"
                                class="inline-flex bg-red-50 rounded-md p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600">
                            <span class="sr-only">Dismiss</span>
                            <!-- Heroicon name: solid/x -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


        </div>
    @endif


    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- Task App--}}
                    {{-- On Submit Call the store method on livewire --}}
                    <form wire:submit.prevent="storeTodo">

                        <div class="flex-1">
                            <div>
                                <label for="email" class="block text-lg font-medium text-gray-900">Add Task</label>

                                <div class="mt-1 relative rounded-md shadow-sm">

                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <!-- Heroicon name: solid/clipboard -->
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                        </svg>
                                    </div>

                                    <input type="text" wire:model="task" name="task" id="task-input"
                                           class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md"
                                           placeholder="Add a Todo task ">
                                </div>
                            </div>

                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="py-6" x-data="{}">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    <fieldset>
                        <div class="flex justify-between">
                            <legend class="text-lg font-medium text-gray-900">Task List</legend>

                            {{--Filters--}}
                            <div class="flex text-sm font-medium items-center">
                                <a href="#" wire:click="showAllTasks()"
                                   class="hover:bg-blue-100 hover:text-gray-700 text-gray-400 rounded-md px-2 py-1.5">All</a>
                                <a href="#" wire:click="showCompletedTasks()"
                                   class="hover:bg-blue-100 hover:text-gray-700 text-gray-400 rounded-md px-2 py-1.5">Completed</a>
                                <a href="#" wire:click="showPendingTasks()"
                                   class="ml-2 hover:bg-blue-100 hover:text-gray-700 text-gray-400 rounded-md px-2 py-1.5">Pending
                                    Task</a>
                            </div>

                        </div>
                        <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">

                            {{-- Show All Tasks --}}
                            @foreach($todolist as $todo)
                                <div class="relative flex items-start py-4">

                                    {{--Check Box--}}
                                    <div class="mr-3 flex items-center h-5">

                                        <input id="person-2" name="person-2"
                                               @if($todo['completed']) checked @endif
                                               type="checkbox"
                                               wire:click="toggleCompleted({{$todo['id']}})"
                                               class="focus:ring-yellow-500
                                                  h-4 w-4 text-yellow-600 border-gray-300 rounded">
                                    </div>

                                    {{--Task Name--}}
                                    <div class="min-w-0 flex-1 text-sm">
                                        <label for="person-2" class="font-medium text-gray-700 select-none
                                        @if($todo['completed']) line-through text-yellow-700 @endif">
                                            {{$todo['name']}}
                                        </label>
                                    </div>

                                    {{--Remove Button--}}
                                    <div class="ml-3 flex items-center h-5">

                                        <button type="button" wire:click="removeTask({{$todo['id']}})"
                                                class="inline-flex  rounded-md p-1.5 text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-gray-600">
                                            <span class="sr-only">Dismiss</span>
                                            <!-- Heroicon name: solid/x -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>

                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </fieldset>
                </div>
            </div>

        </div>

    </div>

</div>
