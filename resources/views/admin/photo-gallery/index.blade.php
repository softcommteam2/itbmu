@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<main class="relative z-0 flex-1 pb-8 overflow-y-auto">

  <div class="mt-8">
    <div>
        <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
           <u> Multimedia List </u> <a href="{{ url('admin/galleries/create') }}" class="inline-flex justify-center float-right px-4 py-1 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300" >Add new</a>
        </h2>

    </div>

      <!-- Activity table (small breakpoint and up) -->
      <div class="hidden sm:block">
          <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col mt-2">
              <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                  <thead>
                    <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                        Title Id
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                        Photo
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                       Lable
                        </th>

                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                        Actions
                        </th>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($galleries as $gallery)
                        <tr class="bg-white">
                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                            <span class="font-medium text-gray-900">{{ $gallery->titleid }} </span>
                            </td>

                            <td class="justify-center px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                {{-- <img src="{{asset('gallery/images/'.$gallery->photo)}}" class="object-center w-16 h-16 mx-auto rounded-md"> --}}
                                <div class="myGallery">
                                  
                                    @if(!empty(unserialize($gallery->photo)))
                                      @foreach (unserialize($gallery->photo) as $photo)
                                        <div class="item">
                                          <img src="{{asset('storage/gallery/images/'.$photo)}}" class="object-center w-16 h-16 mx-auto rounded-md"/>
                                        </div>
                                      @endforeach
                                    @else
                                      <img class="default-img"  src="{{asset('images/itbmu.jpg')}}" >
                                    @endif
                                  
                                </div>
                            </td>

                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $gallery->label }} </span>
                            </td>

                            <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                                <a href="{{ url('admin/galleries/'.$gallery->id.'/edit') }}" type="submit" class="items-center p-3 text-sm font-medium text-blue-600 capitalize bg-blue-200 rounded-md">
                                    Edit
                                </a>
                            </td>
                        </tr>
                      @endforeach


                  <!-- More transactions... -->
                  </tbody>
              </table>
              <!-- Pagination -->
                <nav class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-200 sm:px-6" aria-label="Pagination">
                    <div class="hidden sm:block">
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">{{ $galleries->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $galleries->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $galleries->total() }}</span>
                            results
                        </p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex justify-between sm:justify-end">
                            {{ $galleries->links() }}
                        </div>
                    </div>
                </nav>
              </div>
          </div>
          </div>
      </div>
  </div>
</main>
@endsection
