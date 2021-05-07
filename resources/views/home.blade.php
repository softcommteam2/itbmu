@extends('layouts.app')

@section('content')

<main class="relative z-0 flex-1 pb-8 overflow-y-auto">
    <!-- Page header -->
    <div class="bg-white shadow">
      <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
        <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
          <div class="flex-1 min-w-0">
            <!-- Profile -->
            <div class="flex items-center">
              <img class="hidden w-16 h-16 rounded-full sm:block" src="{{ asset('/images/itbmu.jpg') }}" alt="">
              <div>
                <div class="flex items-center">
                  <img class="w-16 h-16 rounded-full sm:hidden" src="{{ asset('/images/itbmu.jpg') }}" alt="">
                  <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                    မင်္ဂလာပါ။ {{ Auth::user()->name }}
                  </h1>
                </div>
                <dl class="flex flex-col mt-6 sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                  <dt class="sr-only">Company</dt>
                  <dd class="flex items-center text-sm font-medium text-gray-500 capitalize sm:mr-6">
                    <!-- Heroicon name: solid/office-building -->
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                    </svg>
                    International Theravada Buddhist Missionary University
                  </dd>
                  <dt class="sr-only">Account status</dt>
                  <dd class="flex items-center mt-3 text-sm font-medium text-gray-500 capitalize sm:mr-6 sm:mt-0">
                    <!-- Heroicon name: solid/check-circle -->
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Verified account
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="flex mt-6 space-x-3 md:mt-0 md:ml-4">
            {{-- <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
              Add money
            </button> --}}
            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-yellow-500 border border-transparent rounded-md shadow-sm hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
              Edit Profile
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-8">

      <h2 class="max-w-6xl px-4 mx-auto mt-8 text-lg font-medium leading-6 text-gray-900 sm:px-6 lg:px-8">
        Recent activity
      </h2>

      <!-- Activity list (smallest breakpoint only) -->
      <div class="shadow sm:hidden">
        <ul class="mt-2 overflow-hidden divide-y divide-gray-200 shadow sm:hidden">

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
      </div>

      <!-- Activity table (small breakpoint and up) -->
      <div class="hidden sm:block">
        <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col mt-2">
            <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                      Transaction
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
    </div>
  </main>

@endsection
