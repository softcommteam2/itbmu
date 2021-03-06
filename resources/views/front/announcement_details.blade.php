@extends('front.layout.base')
  @section('content')
  <div class="wrapper row3">
      <main class="container hoc clear">
         
          <div class="content">
            <div class="row">
                <h1>{{ $new->newstitleeng }}</h1>
                {{-- @if(!empty($new->photo))
                <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                  <img class="new-detail-img" src="{{asset('storage/news/'.$new::first_photo($new->photo))}}" width="150px" height="150px" alt="">
                @else
                  <img class="new-detail-img" src="{{asset('images/itbmu.jpg')}}" width="150px" height="150px">
                </a>
                @endif --}}
                @if(!empty($new->photo))
                    @if(!empty($new->pdf))
                        <div class="text-center">
                            <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                <img class="default-img new-detail-img" src="{{asset('storage/news/'.$new::first_photo($new->photo))}}">
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
              <p class="new-detail-para">{{ $new->newseng }}</p><br>
            </div>
            <h1 class="heading" align="center" id="gallery-heading">Photo Galleryyyyy</h1>
            <div class="myGallery">
               {{-- <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black"> --}}
              @if(!empty(unserialize($new->photo)))
             
                  @foreach (unserialize($new->photo) as $photo)
                    <div class="item">
                      <img src="{{asset('storage/news/'.$photo)}}" class="new-style"/>
                     
                    </div>
                  @endforeach
                @else
                <div class="item">
                  <img src="{{asset('images/itbmu.jpg')}}" >
                </div>
           
              @endif
               {{-- </a> --}}
            </div>
         
            <!-- ################################################################################################ -->
          </div>
          <!-- ################################################################################################ -->
          <!-- / main body -->
          <div class="clear"></div>
      </main>
    </div>
  @endsection
