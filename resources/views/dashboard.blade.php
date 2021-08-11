<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{--                    Task App--}}
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
                            <input type="text" name="task-input" id="task-input"
                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md"
                                   placeholder="you@example.com">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    <fieldset>
                        <legend class="text-lg font-medium text-gray-900">Task App</legend>
                        <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
                            <div class="relative flex items-start py-4">
                                <div class="ml-3 flex-1 items-center h-5">
                                    <input id="person-1" name="person-1" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">

                                    <label for="person-1" class="font-medium text-gray-700 select-none ml-2.5">Annette
                                        Black</label>

                                </div>
                                <div class="min-w-0 flex text-sm">
                                </div>

                            </div>

                            <div class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label for="person-2" class="font-medium text-gray-700 select-none">Cody
                                        Fisher</label>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input id="person-2" name="person-2" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                            </div>

                            <div class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label for="person-3" class="font-medium text-gray-700 select-none">Courtney
                                        Henry</label>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input id="person-3" name="person-3" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                            </div>

                            <div class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label for="person-4" class="font-medium text-gray-700 select-none">Kathryn
                                        Murphy</label>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input id="person-4" name="person-4" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                            </div>

                            <div class="relative flex items-start py-4">
                                <div class="min-w-0 flex-1 text-sm">
                                    <label for="person-5" class="font-medium text-gray-700 select-none">Theresa
                                        Webb</label>
                                </div>
                                <div class="ml-3 flex items-center h-5">
                                    <input id="person-5" name="person-5" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
