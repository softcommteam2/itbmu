@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<main class="relative z-0 flex-1 pb-8 overflow-y-auto">

  <div class="mt-8">
    <div>
        <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
           <u> Lecture List </u> <a href="{{ url('admin/lectures/create') }}" class="inline-flex justify-center float-right px-4 py-1 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300" >Add New</a>
        </h2>

    </div>
      <!-- Activity table (small breakpoint and up) -->
      <div class="hidden sm:block">
          <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col mt-2">
              <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr class="bg-gray-500">
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        Lecid
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        Lecture Name
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                            Lecture Email
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                            Address
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                            Phone
                        </th>

                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        Actions
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($lectures as $lecture)
                            <tr class="bg-white">
                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $lecture->id }} </span>
                                </td>

                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $lecture->name }} </span>
                                </td>

                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                    <span class="font-medium text-gray-900">{{ $lecture->email }} </span>
                                </td>

                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                    <span class="font-medium text-gray-900">{{ $lecture->address }} </span>
                                </td>

                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                    <span class="font-medium text-gray-900">{{ $lecture->phone }} </span>
                                </td>


                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                    <a href="{{ url('admin/lectures/'.$lecture->id.'/edit') }}" type="submit" class="items-center p-3 text-sm font-medium text-blue-600 capitalize bg-blue-200 rounded-md">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach


                    <!-- More transactions... -->
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="flex justify-between flex-1 sm:justify-end">
                    <span class="bg-yellow-600 p-2 rounded m-2 text-gray-900">
                        {{ $lectures->links() }}
                    </span>
                </div>
              </div>
          </div>
          </div>
      </div>
  </div>
</main>
@endsection
