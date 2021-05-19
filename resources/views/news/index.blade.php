@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-5">

    <div class="flex justify-between">
        <div><input type="text" placeholder="search"></div>

        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add News
          </button>

    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>

                    <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                      Title
                    </th>

                    <th scope="col" class="relative px-8 py-3 text-right">
                      <span class="font-bold tracking-wider text-black uppercase text-medium">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Odd row -->

                  @foreach ($news as $new)
                    <tr class="bg-yellow">
                        <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                        {{ $new->title }}
                        </td>

                        <td class="px-8 py-4 text-sm font-medium text-right whitespace-nowrap">
                        <a href="#" class="text-yellow-400 hover:text-yellow-800">Edit</a>
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

@endsection
