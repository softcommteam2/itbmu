@extends('layouts.app')
@section('content')
    <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
        <div class="mt-8">
            <div>
                <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
                   <u>Exam Result List</u> <a href="{{ url('admin/exam_results/create') }}" class="inline-flex float-right bg-blue-600 text-white justify-center px-4 py-1 border border-transparent shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md ml-3 text-sm font-medium">Add New</a>
                </h2>
            </div>
            <!-- Exam Result table (small breakpoint and up) -->
            <div class="hidden sm:block">
                <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col mt-2">
                        <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                            <tr class="bg-gray-500">
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                Title
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                New Title
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                UPcome Date
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                    Cover Photo
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                Photo
                                </th>
                                <td>pdf</td>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                Actions
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                                @foreach ($results as $result)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                        <span class="font-medium text-gray-900"></span>
                                       
                                        </td>
                                    </tr>
                                @endforeach


                            <!-- More transactions... -->
                            </tbody>
                        </table>
                        <!-- Pagination -->
                            <div class="flex justify-between flex-1 sm:justify-end">
                            <span class="bg-yellow-600 p-2 rounded m-2 text-gray-900">
                                {{ $results->links() }}
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection