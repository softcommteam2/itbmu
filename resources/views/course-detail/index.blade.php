@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>

                <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Year
                </th>
                <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Course Name
                </th>
                <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Semester
                </th>
                 <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Course No
                </th>
                <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Day
                </th>
                <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Time
                </th>
                <th scope="col" class="px-8 py-3 font-bold tracking-wider text-left text-black uppercase text-medium">
                  Lecture Hall
                </th>

                <th scope="col" class="relative px-8 py-3 text-right">
                  <span class="font-bold tracking-wider text-black uppercase text-medium">Actions</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <!-- Odd row -->

             @foreach ($course_details as $course_detail)
                <tr class="bg-yellow">
                    <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->year }}
                    </td>
                    <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->course_id }}
                    </td>
                    <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->semester }}
                    </td>
                    <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->day }}
                    </td>
                     <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->course_no }}
                    </td>
                    <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->time }}
                    </td>
                    <td class="px-8 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    {{ $course_detail->lecture_hall }}
                    </td>
                    <td class="px-8 py-4 text-sm font-medium text-right whitespace-nowrap">
                      <a href="#" class="text-yellow-400 hover:text-yellow-800">Edit</a>
                    </td>
                </tr>
              @endforeach

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
