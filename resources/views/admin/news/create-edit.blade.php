@extends('layouts.app')

@section('content')

@if(empty($new->id))
    <form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('admin/news') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-8 divide-y divide-blue-500 sm:space-y-5">
            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>

                        <h2 class="text-xl font-bold leading-8 text-gray-900">
                        <u> News & Events Entry Form </u>
                        </h2>
                    @else
    <form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('admin/news/'.$new->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="space-y-8 divide-y divide-blue-500 sm:space-y-5">
            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                        <h2 class="text-xl font-bold leading-8 text-gray-900">
                            <u> News & Events Update Form </u>
                        </h2>
                    @endif
                </div>
                <div class="p-3 space-y-6 border sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                        <label for="newstitleeng" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        News Title (ENG)
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="newstitleeng" id="newstitleeng" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-indigo-300 focus:border-indigo-300 sm:text-sm" value="{{old('newstitleeng') ?? $new->newstitleeng}}">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                      <label for="newstitlemyan" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                      News Title (MYAN)
                      </label>
                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="newstitlemyan" id="newstitlemyan" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-indigo-300 focus:border-indigo-300 sm:text-sm" value="{{old('newstitlemyan') ?? $new->newstitlemyan}}">
                      </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                        <label for="newseng" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        News(ENG)
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="newseng" id="newseng" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-indigo-300 focus:border-indigo-300 sm:text-sm" value="{{ old('newseng')?? $new->newseng }}">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                      <label for="newsmyan" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                      News(MYAN)
                      </label>
                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="newsmyan" id="newsmyan" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-indigo-300 focus:border-indigo-300 sm:text-sm" value="{{ old('newsmyan')?? $new->newsmyan }}">
                      </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                        <label for="upcomedate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        Upcome Date
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="date" name="upcomedate" id="upcomedate" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-indigo-300 focus:border-indigo-300 sm:text-sm" value={{ old('upcomedate')?? $new->upcomedate }}>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                      <label for="type" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">News & Event Type</label>
                      <select style="width:510px;" id="type" name="type" class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option disabled selected value>Choose Type</option>
                        <option value="0">Announcements</option>
                        <option value="1">News</option>
                      </select>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                            Photo 
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <div class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                              <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="photo" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                  <span>Upload a file</span>
                                  <input id="photo" name="photo[]" type="file" class="sr-only" multiple>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="photo2" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                            Photo 2
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <div class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                              <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="photo2" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                  <span>Upload a file</span>
                                  <input id="photo2" name="photo2" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="photo3" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                            Photo 3
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <div class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                              <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="photo3" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                  <span>Upload a file</span>
                                  <input id="photo3" name="photo3" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="photo4" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                            Photo 4
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <div class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                              <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="photo4" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                  <span>Upload a file</span>
                                  <input id="photo4" name="photo4" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="photo5" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                            Photo 5
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <div class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                              <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="photo5" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                  <span>Upload a file</span>
                                  <input id="photo5" name="photo5" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                              </p>
                            </div>
                          </div>
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
