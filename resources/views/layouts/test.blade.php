<x-layouts.base>
    <!-- This example requires Tailwind CSS v2.0+ -->
      <!--
        This example requires Tailwind CSS v2.0+
        This example requires some changes to your config:
        ```
        // tailwind.config.js
        const colors = require('tailwindcss/colors')
        module.exports = {
          // ...
          theme: {
            extend: {
              colors: {
                cyan: colors.cyan,
              }
            }
          },
          plugins: [
          // ...
          require('@tailwindcss/forms'),
          ]
        }
        ```
      -->
      <div class="flex h-screen overflow-hidden bg-gray-100">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 z-40 flex lg:hidden" role="dialog" aria-modal="true">
          <!--
            Off-canvas menu overlay, show/hide based on off-canvas menu state.
            Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
            Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
          -->
          <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

          <!--
            Off-canvas menu, show/hide based on off-canvas menu state.
            Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
          -->
          <div class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-cyan-700">
            <!--
              Close button, show/hide based on off-canvas menu state.
              Entering: "ease-in-out duration-300"
              From: "opacity-0"
              To: "opacity-100"
              Leaving: "ease-in-out duration-300"
              From: "opacity-100"
              To: "opacity-0"
            -->
            <div class="absolute top-0 right-0 pt-2 -mr-12">
              <button class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <!-- Heroicon name: outline/x -->
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <div class="flex items-center flex-shrink-0 px-4">
              <h1 class="text-4xl font-bold">KMD Pos Pakage</h1>
            </div>
            <nav class="flex-shrink-0 h-full mt-5 overflow-y-auto divide-y divide-cyan-800" aria-label="Sidebar">
              <div class="px-2 space-y-1">
                <!-- Current: "bg-cyan-800 text-white", Default: "text-cyan-100 hover:text-white hover:bg-cyan-600" -->
                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md bg-cyan-800 group" aria-current="page">
                  <!-- Heroicon name: outline/home -->
                  <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  Home
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
                  <!-- Heroicon name: outline/clock -->
                  <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  History
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
                  <!-- Heroicon name: outline/scale -->
                  <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>
                  Balances
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
                  <!-- Heroicon name: outline/credit-card -->
                  <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                  </svg>
                  Cards
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
                  <!-- Heroicon name: outline/user-group -->
                  <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  Recipients
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600 group">
                  <!-- Heroicon name: outline/document-report -->
                  <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                  Reports
                </a>
              </div>
              <div class="pt-6 mt-6">
                <div class="px-2 space-y-1">
                  <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
                    <!-- Heroicon name: outline/cog -->
                    <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                  </a>

                  <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
                    <!-- Heroicon name: outline/question-mark-circle -->
                    <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Help
                  </a>

                  <a href="#" class="flex items-center px-2 py-2 text-base font-medium rounded-md group text-cyan-100 hover:text-white hover:bg-cyan-600">
                    <!-- Heroicon name: outline/shield-check -->
                    <svg class="w-6 h-6 mr-4 text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Privacy
                  </a>
                </div>
              </div>
            </nav>
          </div>

          <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
          </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
          <div class="flex flex-col w-64">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-white border-r border-gray-200">
              <div class="flex items-center flex-shrink-0 px-4">
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
              </div>
              <div class="flex flex-col flex-grow mt-5">
                <nav class="flex-1 px-2 space-y-1 bg-white" aria-label="Sidebar">
                  <div>
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                    <a href="#" class="flex items-center w-full py-2 pl-2 text-sm font-medium text-gray-900 bg-gray-100 rounded-md group">
                      <!--
                        Heroicon name: outline/home
                        Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                      -->
                      <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                      Dashboard
                    </a>
                  </div>

                  <x-sidebar.sidebar-wrap expended>
                  <x-slot name="barname" >
                    <x-icon.inbox class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" />
                    Product
                  </x-slot>

                  <x-sidebar.sidebar-link link="{{ route('item.form') }}"  >
                  Add New
                </x-sidebar.sidebar-link>
                <x-sidebar.sidebar-link  link="/Items">
                All item list
              </x-sidebar.sidebar-link>
            </x-sidebar.sidebar-wrap>

            <x-sidebar.sidebar-wrap expended>
            <x-slot name="barname" >
              <x-icon.speaker class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" />
              Sale
            </x-slot>

            <x-sidebar.sidebar-link >
            Sale Item
          </x-sidebar.sidebar-link>
          <x-sidebar.sidebar-link >
          Sale Item List
        </x-sidebar.sidebar-link>
      </x-sidebar.sidebar-wrap>

      <x-sidebar.sidebar-wrap expended>
      <x-slot name="barname" >
        <x-icon.table class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" />
        Opening
      </x-slot>

      <x-sidebar.sidebar-link >
      Opening Item
    </x-sidebar.sidebar-link>
    </x-sidebar.sidebar-wrap>


    <x-sidebar.sidebar-wrap  expended>
    <x-slot name="barname" >
      <x-icon.report class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" />
      Report
    </x-slot>

    <x-sidebar.sidebar-link >
    Daily Report
    </x-sidebar.sidebar-link>
    </x-sidebar.sidebar-wrap>







    </nav>
    </div>
    </div>

    </div>
    </div>

    <div class="flex-1 overflow-auto focus:outline-none" tabindex="0">
      <div class="relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-gray-200 lg:border-none">
        <button class="px-4 text-gray-400 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
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
            <button class="p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div x-data="{ open : false }" class="relative ml-3">
              <div>
                <button @click="open = !open" @click.away="open = false" type="button" class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu" aria-expanded="false" aria-haspopup="true">
                  <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=9vOWlkPikQ&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user menu for </span> {{ Auth::user()->name }}</span>
                  <!-- Heroicon name: solid/chevron-down -->
                  <svg class="flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>

                  <!--
                    Dropdown menu, show/hide based on menu state.
                    Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                  -->
                  <div x-show="open" style="display: none;" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                    <a href="{{ url('/user/profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                    <form method="post" action="{{ route('logout') }}" >
                      @csrf
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="event.preventDefault(); this.closest('form').submit();" role="menuitem">Logout</a>
                    </form>

                  </div>
            </div>
              </div>
            </div>
          </div>
          <main class="relative z-0 flex-1 pb-8 overflow-y-auto">
            <!-- Page header -->
            <div class="bg-white shadow">
              <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                  <div class="flex-1 min-w-0">
                    <!-- Profile -->
                    <div class="flex items-center">

                      <div>
                        <div class="flex items-center">

                          <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                            {{ $header ?? 'Good morning' }}
                          </h1>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="mt-8">
              {{-- <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                <h2 class="text-lg font-medium leading-6 text-gray-900">Overview</h2>
              </div> --}}
              <div class="py-5">
                <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                  {{ $slot }}
                </div>
              </div>

            </div>
          </main>
        </div>
      </div>


    </x-layouts.base>
