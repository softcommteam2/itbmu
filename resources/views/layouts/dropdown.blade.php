<div class="relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-gray-200 lg:border-none">
    <button  class="px-4 text-gray-400 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
      <span class="sr-only">Open sidebar</span>
      <!-- Heroicon name: outline/menu-alt-1 -->
      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
      </svg>
    </button>
    <!-- Search bar -->
    <div class="flex justify-between flex-1 px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
      <div class="flex flex-1">
        <form class="flex w-full md:ml-0" action="#" method="GET">
          <label for="search_field" class="sr-only">Search</label>
          <div class="relative w-full text-gray-400 focus-within:text-gray-600">
            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true">
              <!-- Heroicon name: solid/search -->
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
            <input id="search_field" name="search_field" class="block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 border-transparent focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search transactions" type="search">
          </div>
        </form>
      </div>
      <div class="flex items-center ml-4 md:ml-6">
        <button class="p-1 text-blue-500 bg-white rounded-full hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
          <span class="sr-only">View notifications</span>
          <!-- Heroicon name: outline/bell -->
          <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>

                    <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative inline-block text-left">
            <div class="relative inline-flex rounded-md shadow-sm">
                <button class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white bg-blue-500 border border-gray-300 cursor-pointer rounded-l-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-blue active:bg-indigo-700">
                  Account Setting
                </button>


              <span x-data="{ isopen: false }" class="relative block -ml-px">
                <button @click="isopen = !isopen" type="button" class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-white bg-blue-500 border border-gray-300 rounded-r-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-blue active:bg-indigo-700" aria-label="Expand">
                  <!-- Heroicon name: chevron-down -->
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>

                <div
                x-show="isopen"
                @click.away="isopen = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-40 w-56 mt-2 -mr-1 origin-top-right rounded-md shadow-lg">
                  <div class="bg-white rounded-md shadow-xs">
                    <div class="py-1">
                        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group" role="menuitem" tabindex="-1" id="menu-item-0">
                            <!-- Heroicon name: solid/pencil-alt -->
                            <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            Edit Profile
                            </a>
                      <div class="border-t border-gray-100">             </div>

                        <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 group" role="menuitem" tabindex="-1" id="menu-item-0" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                            <!-- Heroicon name: solid/pencil-alt -->
                            {{-- <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                  </div>
                </div>
              </span>
            </div>

        </div>

        </div>


      </div>
    </div>


