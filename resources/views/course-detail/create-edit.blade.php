@extends('layouts.app')

@section('content')


@if(empty($course_detail->id))
<form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('admin/course-details') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="space-y-8 divide-y divide-blue-500 sm:space-y-5">
        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
            <div>

                    <h2 class="text-xl font-bold leading-8 text-gray-900">
                    <u> Course Detail  Entry Form </u>
                    </h2>
                @else
<form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('admin/course-details/'.$course_detail->id) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="space-y-8 divide-y divide-blue-500 sm:space-y-5">
        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
            <div>
                    <h2 class="text-xl font-bold leading-8 text-gray-900">
                        <u> Course Detail Update Form </u>
                    </h2>
                @endif
            </div>
            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="year" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Course Year
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="year" id="year" autocomplete="given-name" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="open_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Course Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select style="size: 510px;" id="course_id" name="course_id" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <option>Select Course</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{$course->name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="open_time" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Semester
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select style="size: 510px;" id="semester" name="semester" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <option>Select Semester</option>
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                    </select>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="class" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Course No
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select style="size: 510px;" id="course_no" name="course_no" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <option>Select Course No</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                    </select>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="class" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Day
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select style="size: 510px;" id="day" name="day" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <option>Select Day</option>
                        <option value="Sun">Sun</option>
                        <option value="Mon">Mon</option>
                    </select>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="class" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Time
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select style="size: 510px;" id="time" name="time" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <option>Select Time</option>
                        <option value="Time - 1">Time - 1</option>
                        <option value="Time - 2">Time - 2</option>
                    </select>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="class" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                    Lecture Hall
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <select style="size: 510px;" id="lecture_hall" name="lecture_hall" class="block w-full max-w-lg border-yellow-100 rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <option>Select Hall</option>
                        <option value="Hall - 1">Hall - 1</option>
                        <option value="Hall - 2">Hall - 2</option>
                    </select>
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
            <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
            Save
            </button>
        </div>
    </div>
</form>
@endsection
