@extends('layouts.app')
@section('content')
    <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
        <div class="mt-8">
            <div>
                <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
                   <u>Exam Result List</u> <a href="{{ url('admin/exam_results/create') }}" class="inline-flex float-right bg-blue-600 text-white justify-center px-4 py-1 border border-transparent shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md ml-3 text-sm font-medium">Add result</a>
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
                                Year
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                Date
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                    Pdf
                                </th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                                Actions
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                                @foreach ($results as $result)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                    <span class="font-medium text-gray-900">{{ $result->year }} </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                    <time>{{ date('d-m-Y', strtotime($result->date)) }}</time>
                                    </td>
                                    
                                    <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap font-bold">
                                        <a href="{{asset('storage/exam_results/'.$result->pdf)}}" target="_Black">pdf</a>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                        <form action="{{url('admin/exam_results/'.$result->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            @if ($result->deleted_at)
                                            <button class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            @else
                                            <a class="inline-flex items-center h-10 px-4 m-2 text-sm text-gray-900 font-bold transition-colors duration-150 bg-yellow-600 rounded-md focus:shadow-outline hover:bg-yellow-500" href="{{ url('admin/exam_results/'.$result->id.'/edit') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            
                                            <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            @endif
                                        </form>
                                        
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