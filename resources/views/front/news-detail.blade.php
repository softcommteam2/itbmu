@extends('front.layout.base')
  @section('content')
  <div class="wrapper row3">
    <style>
      #new-detail{
        height: 300px;
      }
    </style>
      <main class="container hoc clear">
          <!-- main body -->
          <!-- ################################################################################################ -->
          <div class="content">
            <!-- ################################################################################################ -->
            <h1>{{ $new->newstitleeng }}</h1>
            <div id="new-detail">
                <img class="imgl borderedbox inspace-5" src="{{asset('storage/news/images/'.$new::first_photo($new))}}" width="150px" height="150px">
              <p>{{ $new->newseng }}</p>
            </div>

            <div id="gallery">
              <figure>
                <h1 class="heading" align="center">Photo Gallery</h1>

                    <ul class="nospace clear">
                        {{-- @dd(unserialize($new->photo)) --}}
                        @foreach (unserialize($new->photo) as $photo)

                        <li class="one_quarter gallery" >
                            <img class="gallery-img" src="{{asset('storage/news/images/'.$photo)}}">
                        </li>
                        @endforeach

                          {{-- <div id="gallery-div">
                            <img class="gallery-img" src="{{asset('storage/news/images/'.$new->photo2)}}"  alt="" >
                          </div>
                          <li class="one_quarter gallery">
                            <div id="gallery-div">
                              <img class="gallery-img" src="{{asset('news/images/'.$new->photo3)}}"  alt="" >
                            </div>
                          </li>
                          <li class="one_quarter gallery">
                            <div id="gallery-div">
                              <img class="gallery-img" src="{{asset('news/images/'.$new->photo4)}}"  alt="" >
                            </div>
                          </li>
                          <li class="one_quarter gallery">
                            <div id="gallery-div">
                              <img class="gallery-img" src="{{asset('news/images/'.$new->photo5)}}"  alt="" >
                            </div>
                          </li> --}}



                    </ul>
              </figure>
            </div>


            <!-- ################################################################################################ -->
          </div>
          <!-- ################################################################################################ -->
          <!-- / main body -->
          <div class="clear"></div>
        </main>
    </div>
  @endsection

  {{-- @extends('front.layout.base')
  @section('content')

  @endsection --}}
