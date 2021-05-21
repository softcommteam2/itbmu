@extends('layouts.app')

@section('content')



    <form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('/news') }}" method="POST">
        @csrf
        <div class="space-y-8 divide-y divide-yellow-500 sm:space-y-5">
            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    News
                </h3>

                </div>
                <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Title of the Article
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="title" id="title" autocomplete="given-name" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Last name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Email address
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Country / Region
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select id="country" name="country" autocomplete="country" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:max-w-xs sm:text-sm">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                    </select>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="street_address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Street address
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    City
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="city" id="city" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="state" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    State / Province
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="state" id="state" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:max-w-xs sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-yellow-200 sm:pt-5">
                    <label for="zip" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    ZIP / Postal
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="zip" id="zip" autocomplete="postal-code" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:max-w-xs sm:text-sm">
                    </div>
                </div> --}}
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-yellow-400 border border-yellow-100 rounded-md shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
                Cancel
                </button>
                <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
                Save
                </button>
            </div>
        </div>
    </form>


@endsection
