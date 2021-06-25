@extends('front.layout.base')
  @section('content')
  <div class="wrapper row3">
    <style>
      #new-detail{
        height: 300px;
      }
    </style>
      <main class="hoc container clear"> 
          <!-- main body -->
          <!-- ################################################################################################ -->
          <div class="content"> 
            <!-- ################################################################################################ -->
            <h1>{{ $new->newstitleeng }}</h1>
            <div id="new-detail">
              <img class="imgl borderedbox inspace-5" src="{{asset('news/images/'.$new->photo1)}}" alt="">
              <p>{{ $new->newseng }}</p>
            </div>
          
            <div id="gallery">             
              <figure>
                <h1 class="heading" align="center">Photo Gallery</h1>
                
                    <ul class="nospace clear">
                     
                        <li class="one_quarter gallery">
                          <div id="gallery-div">
                            <img class="gallery-img" src="{{asset('news/images/'.$new->photo2)}}"  alt="" >
                          </div></li>
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
                          </li>

                    
                      
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