@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<main class="relative z-0 flex-1 pb-8 overflow-y-auto">

  <div class="mt-8">
    <div>
        <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
           <u> Student List </u> <a href="{{ url('admin/students/create') }}" class="inline-flex justify-center float-right px-4 py-1 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300" >Add New</a>
        </h2>

    </div>

      <!-- Activity list (smallest breakpoint only) -->
      {{-- <div class="shadow sm:hidden">
          <ul class="mt-2 overflow-hidden divide-y divide-gray-200 shadow sm:hidden">
          <li>
              <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
              <span class="flex items-center space-x-4">
                  <span class="flex flex-1 space-x-2 truncate">
                  <!-- Heroicon name: solid/cash -->
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                  <span class="flex flex-col text-sm text-gray-500 truncate">
                      <span class="truncate">Payment to Molly Sanders</span>
                      <span><span class="font-medium text-gray-900">$20,000</span> USD</span>
                      <time datetime="2020-07-11">July 11, 2020</time>
                  </span>
                  </span>
                  <!-- Heroicon name: solid/chevron-right -->
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
              </span>
              </a>
          </li>

          <!-- More transactions... -->
          </ul>

          <nav class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-200" aria-label="Pagination">
          <div class="flex justify-between flex-1">
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:text-gray-500">
              Previous
              </a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:text-gray-500">
              Next
              </a>
          </div>
          </nav>
      </div> --}}

      <!-- Activity table (small breakpoint and up) -->
      <div class="hidden sm:block">
          <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col mt-2">
              <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                  <thead>
                  <tr>
                      <th class="p-3 px-6 text-xs font-medium tracking-wider text-center text-gray-500 upppercase bg-gray-50">
                          NO
                      </th>
                      <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                      Name
                      </th>
                      <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                        Country
                      </th>
                      <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                        Class
                      </th>

                      <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                      Actions
                      </th>

                  </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($students as $student)
                        <tr class="bg-white">
                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $student->id }} </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                            <span class="font-medium text-gray-900">{{ $student->name }} </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $student->country }} </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $student->class }} </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                <a href="{{ url('admin/students/'.$student->id.'/edit') }}" type="submit" class="items-center p-3 text-sm font-medium text-blue-600 capitalize bg-blue-200 rounded-md">
                                    Edit
                                </a>
                            </td>
                        </tr>
                      @endforeach


                  <!-- More transactions... -->
                  </tbody>
              </table>
              <!-- Pagination -->
              <nav class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-200 sm:px-6" aria-label="Pagination">
                  <div class="hidden sm:block">
                  <p class="text-sm text-gray-700">
                      Showing
                      <span class="font-medium">1</span>
                      to
                      <span class="font-medium">10</span>
                      of
                      <span class="font-medium">20</span>
                      results
                  </p>
                  </div>
                  <div class="flex justify-between flex-1 sm:justify-end">
                  <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                      Previous
                  </a>
                  <a href="#" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                      Next
                  </a>
                  </div>
              </nav>
              </div>
          </div>
          </div>
      </div>
  </div>
</main>
@endsection
