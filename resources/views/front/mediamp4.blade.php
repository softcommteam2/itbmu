@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content"> 
          <!-- ################################################################################################ -->
          
          <h1 align="center">Multimedia - Video(*.MP4) </h1>
    
          <div class="group btmspace-50 demo">
              @foreach ($medias::mp4() as $media)
             
            <div class="one_third first"> 
              {{-- <p>
                  <a href="{{ $media->link }}" target="_blank"
                    class="font-medium text-gray-900">{{ $media->link }}</a>
              </p>
              <p>
                <table style="border: 0px solid;background-color: #fff;">
                  <tr style="border: 0px solid;background-color: #fff;">
                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-style:italic; font-weight:bold;" width="21%;">{{$media->title}}</td>
                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-weight:bold;">{{date('d-m-y',strtotime($media->created_at))}}</td>
                  </tr>
                </table>
              </p> --}}
              <div class="row my-3">
                <div class="col-md-4">
                  <p class="fw-bold fst-italic" style="font-size: 16px">{{ $media->title }}</p>
                </div>
                <div class="col-md-4">
                  <p class="fw-bold">
                    {{ date('d-m-y', strtotime($media->created_at)) }}
                  </p>
                </div>
                <div class="col-md-4">
                  <p class="fw-semibold">Presenter - {{ $media->presentername }}</p>
                </div>
                <div>
                  <a href="{{ $media->link }}" class="font-medium text-gray-900" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-youtube text-danger" viewBox="0 0 16 16">
                      <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                    <span class="fst-italic">Link Here</span> 
                  </a>
                  
                </div>
              </div>
            </div>
            @endforeach
            {{-- <div class="one_third"> <p>
                <audio width="320px" height="220px" controls>
                  <source src="#" type="audio/mpeg">
                </audio>
              </p>
              <p>
                <table style="border: 0px solid;background-color: #fff;">
                  <tr style="border: 0px solid;background-color: #fff;">
                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-style:italic; font-weight:bold;" width="21%;">Audio 1</td>
                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-weight:bold;">04 May 2021</td>
                  </tr>
                </table>
              </p></div>
            <div class="one_third">  <p>
                <audio width="320px" height="220px" controls>
                  <source src="#" type="audio/mpeg">
                </audio>
              </p>
              <p>
                <table style="border: 0px solid;background-color: #fff;">
                  <tr style="border: 0px solid;background-color: #fff;">
                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-style:italic; font-weight:bold;" width="21%;">Audio 1</td>
                    <td style="border: 0px solid;background-color: #fff; font-size:13px; font-weight:bold;">04 May 2021</td>
                  </tr>
                </table>
              </p>
            </div> --}}
          </div>
         
          
         

        
          <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
@endsection