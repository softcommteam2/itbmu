@extends('layouts.app')

@section('content')
<div class="hidden sm:block">
        <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col mt-2">
            <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                      Magazine
                    </th>

                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr class="bg-white">
                    <td class="w-full px-6 py-4 text-sm text-gray-900 max-w-0 whitespace-nowrap">
                      <div class="flex">
                        <a href="#" class="inline-flex space-x-2 text-sm truncate group">
                          <!-- Heroicon name: solid/cash -->
                          <svg class="flex-shrink-0 w-5 h-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                          </svg>
                          <p class="text-gray-500 truncate group-hover:text-gray-900">
                            Payment to Molly Sanders
                          </p>
                        </a>
                      </div>
                    </td>

                  </tr>

                  <!-- More transactions... -->
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
@endsection