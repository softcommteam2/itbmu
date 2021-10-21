<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-yellow-500">
        <div class="flex items-center flex-shrink-0 px-4">
          <img class="w-auto h-16 rounded mx-auto" src="{{ asset('/images/itbmu.jpg') }}" alt="itbmu">
        </div>
          <p class="text-center mt-2 font-bold p-2">International Theravada Buddhist Missionary University</p>
        <nav class="flex flex-col flex-1 mt-5 overflow-y-auto divide-y divide-yellow-300" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <!-- Current: "bg-yellow-500 text-gray-900", Default: "text-cyan-100 hover:text-gray-900 hover:bg-yellow-600" -->
            <a href="{{ url('/') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 bg-yellow-600 rounded-md group" aria-current="page">
              <!-- Heroicon name: outline/home -->
              <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>
            <a href="{{ url('admin/activity_titles') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
              </svg>
              Activity Title
            </a>
            <a href="{{ route('courses.index') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
              </svg>
              Course
            </a>
            <a href="{{ route('course-details.index') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>
              Course Detail
            </a>
            <a href="{{ url('admin/lectures') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
              </svg>
              Lectures
            </a>
            <a href="{{ url('admin/multimedia') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
              </svg>
              Multimedia
            </a>
            <a href="{{ url('admin/news') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
              </svg>
              News
            </a>
            <a href="{{ url('admin/exam_results') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
              </svg>
              Exam Results
            </a>
            <a href="{{ url('admin/organizations') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
              </svg>
              Organizations
            </a>
            <a href="{{ url('admin/galleries') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
              <!-- Heroicon name: outline/clock -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
              </svg>
              Photo Gallery
            </a>
            <a href="{{ url('admin/subjects') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
                <!-- Heroicon name: outline/clock -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                Subjects
            </a>
            
            <a href="{{ url('admin/students') }}" class="flex items-center px-2 py-2 text-sm font-medium leading-6 text-gray-900 rounded-md hover:text-gray-900 hover:bg-yellow-600 group">
                <!-- Heroicon name: outline/clock -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
                Students
            </a>
      </nav>
      </div>
    </div>
  </div>
