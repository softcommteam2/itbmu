@extends('front.layout.base')
@section('content')
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="content">
                <!-- ################################################################################################ -->

                <h1 align="center">Multimedia - Audio(*.MP3) </h1>

                <div class="group btmspace-50 demo">
                    @foreach ($medias as $media)
                        <div class="one_third first">
                            <p>
                                <audio width="320px" height="220px" controls>
                                    {{-- <source src="{{ asset('multimedia/images/' . $media->file) }}" type="audio/mpeg"> --}}
                                    <source src="{{ asset('storage/multimedia/' . $media->file) }}" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>
                            <table style="border: 0px solid;background-color: #fff;">
                                <tr style="border: 0px solid;background-color: #fff;">
                                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-style:italic; font-weight:bold;"
                                        width="21%;">{{ $media->title }}</td>
                                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-weight:bold;">
                                        {{ date('d-m-y', strtotime($media->created_at)) }}</td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    @endforeach
                </div>
                 <!-- Pagination -->
                <nav class="flex items-center justify-between px-4 py-3 bg-white border-t border-gray-200 sm:px-6" aria-label="Pagination">
                  <div class="flex justify-end"> <!-- Adjusted -->
                      {{ $medias->links() }}
                  </div>
              </nav>

                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
@endsection
