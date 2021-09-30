@extends('layouts.app')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<main class="relative z-0 flex-1 pb-8 overflow-y-auto">

  <div class="mt-8">
    <div>
        <h2 class="m-8 text-xl font-bold leading-8 text-gray-900">
           <u> News & Events List </u> <a href="{{ url('admin/news/create') }}" class="inline-flex justify-center float-right px-4 py-1 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300" >Add New</a>
        </h2>

    </div>
      <!-- Activity table (small breakpoint and up) -->
      <div class="hidden sm:block">
          <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex flex-col mt-2">
              <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr class="bg-gray-500">
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        Title
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        New Title
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        UPcome Date
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                            Cover Photo
                        </th>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        Photo
                        </th>
                        <td>pdf</td>
                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-900 uppercase">
                        Actions
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-500">
                        @foreach ($news as $new)
                            <tr class="bg-white">
                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                <span class="font-medium text-gray-900">{{ $new->newtitle }} </span>
                                </td>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">
                                <textarea class="font-medium text-gray-900 resize border">{{ $new->description }} </textarea>
                                </td>

                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap">

                                <time>{{ date('d-m-Y', strtotime($new->upcomedate)) }}</time>
                                </td>
                                <td>
                                    @if(!empty($new->cover_photo))
                                    <img src="{{asset('storage/news/'.$new->cover_photo)}}" class="object-center w-16 h-16 mx-auto rounded-md"/>
                                    @else
                                        @if($new->type==1)
                                        <img class="default-img"  src="{{asset('images/itbmu.jpg')}}" >
                                        @else
                                        <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                        @endif
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-900 whitespace-nowrap w-1/4">
                                
                                    <div class="myGallery">
                                        @if(!empty(unserialize($new->photo)))
                                        @foreach (unserialize($new->photo) as $photo)
                                            <div class="item">
                                            <img src="{{asset('storage/news/'.$photo)}}" class="object-center w-16 h-16 mx-auto rounded-md"/>
                                            {{-- <span class="caption">{{$new->label}}</span> --}}
                                            </div>
                                        @endforeach
                                        @endif
                                    
                                    </div>
                                </td>
                                
                                <td>
                                    <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">pdf</a>
                                </td>
                                <td class="px-6 py-4 text-sm text-right text-gray-900 whitespace-nowrap">
                                    <form action="{{url('admin/news/'.$new->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        @if ($new->deleted_at)
                                        <button class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        @else
                                        <a class="inline-flex items-center h-10 px-4 m-2 text-sm text-gray-900 font-bold transition-colors duration-150 bg-yellow-600 rounded-md focus:shadow-outline hover:bg-yellow-500" href="{{ url('admin/news/'.$new->id.'/edit') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        
                                        <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        @endif
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach


                    <!-- More transactions... -->
                    </tbody>
                </table>
                <!-- Pagination -->
                  <div class="flex justify-between flex-1 sm:justify-end">
                    <span class="bg-yellow-600 p-2 rounded m-2 text-gray-900">
                        {{ $news->links() }}
                    </span>
                  </div>
              </div>
          </div>
          </div>
      </div>
  </div>
</main>
@endsection
