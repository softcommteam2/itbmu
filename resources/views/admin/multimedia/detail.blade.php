@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<main class="relative z-0 flex-1 pb-8 overflow-y-auto">

  <div class="mt-8">
    <div>
        <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
           <u> {{ $media->file }}</u> <a href="{{ url('admin/multimedia') }}" class="inline-flex justify-center px-4 py-1 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300" >Back</a>
        </h2>

    </div>

      <!-- Activity table (small breakpoint and up) -->
      <div class="hidden sm:block">
          <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex justify-center mt-2">
            <video width="320" height="220" controls>
              <source src="{{asset('storage/multimedia/'.$media->file)}}" type="video/mp4">
          </video>
            {{-- <img src="{{asset('multimedia/images/'.$media->file)}}" class="rounded-md w-96 h-96"> --}}
          </div>
          </div>
      </div>
  </div>
</main>
@endsection
