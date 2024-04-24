@extends('layouts.app')

@section('content')


<form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('admin/users') }}" method="POST">
    @csrf
    <div class="space-y-8 divide-y divide-blue-500 sm:space-y-5">
        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
            <div>

            <h2 class="text-xl font-bold leading-8 text-gray-900">
            <u> User update form </u>
            </h2>
            <div class="p-3 space-y-6 border sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm" value="{{$user[0]->name}}">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="class" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Email
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="email" id="email" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm" value="{{$user[0]->email}}">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="class" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Password
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="password" id="password" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm" value="{{$user[0]->password}}">
                    </div>
                </div>

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
