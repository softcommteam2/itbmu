@extends('front.layout.base')
  @section('content')
  <div class="wrapper row3">
      <main class="container hoc clear">

          <div class="content">
            <div class="row">
                <h1>{{ $new->newstitleeng }}</h1>
                @if(!empty($new->photo))
                    @if(!empty($new->pdf))
                        <div class="text-center">
                            <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                {{-- @dd($new::first_photo($new->photo)) --}}
                                <img class="default-img new-detail-img" src="{{asset('storage/news/'.$new->photo)}}" alt="lkkkk">
                            </a>
                        </div>
                    @else
                        <div class="text-center">
                            <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                <img class="default-img new-detail-img" src="{{asset('storage/news/'.$new::first_photo($new->photo))}}">
                            </a>
                        </div>
                    @endif
                @else
                    @if(empty($new->pdf))
                          @if($new->type==0)
                            <div class="text-center">
                                <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                    <img class="default-img new-detail-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                </a>
                            </div>
                            @else
                            <div class="text-center">
                              <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                  <img class="default-img new-detail-img"  src="{{asset('images/itbmu.jpg')}}" >
                              </a>
                          </div>
                        @endif
                    @else
                      @if($new->type==0)
                        <div class="text-center">
                            <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                <img class="default-img new-detail-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                            </a>
                        </div>
                      @else
                        <div class="text-center">
                          <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                              <img class="default-img new-detail-img"  src="{{asset('images/itbmu.jpg')}}" >
                          </a>
                        </div>
                      @endif
                    @endif

                @endif
              <p class="new-detail-para">{{ $new->newseng }}</p>
              <br>
                @if(!empty($new->pdf))
                  <div class="desc">
                    <a target="_blank" href="{{asset('storage/news/'.$new->pdf)}}">View PDF</a>
                  </div>
                @else
                  <div class="desc">
                    <a target="_blank" href="{{asset('images/theannouncement.pdf')}}">View PDF</a>
                  </div>
                @endif
              <h1 class="heading" align="center" id="gallery-heading">Photo Gallery</h1>

              @if(!empty(unserialize($new->photo)))

                @foreach (unserialize($new->photo) as $photo)
                  <div class="gallery">
                      <img src="{{asset('storage/news/'.$photo)}}"  alt="photo">
                    <div class="desc">
                      <a target="_blank" href="{{asset('storage/news/'.$photo)}}">
                        View Detail
                      </a>
                    </div>
                  </div>
                @endforeach
              @else
                <div class="gallery">
                    <img src="{{asset('images/itbmu.jpg')}}"  alt="photo">
                  <div class="desc">
                    <a target="_blank" href="{{asset('images/itbmu.jpg')}}">
                      View Detail
                    </a>
                  </div>
                </div>
              @endif
          <!-- ################################################################################################ -->
          <!-- / main body -->
          <div class="clear"></div>
          </div>

      </main>
    </div>
  @endsection
