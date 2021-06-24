@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
  <style>
    .gallery{
      margin:5px;!important
      margin-bottom: 30px;
    }
    #gallery-div{
      height: 250px; overflow:hidden;
      border: solid #808080	 1px;
    }
    .gallery-img{
      width: 250px;
      
    }
  </style>
    <main class="hoc container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content"> 
        <!-- ################################################################################################ -->
        <div id="gallery">             
          <figure>
            <h1 class="heading" align="center">ITBMU Photo Gallery</h1>
              @foreach($galleries as $titleid=>$photolist)
                <ul class="nospace clear">
                  @foreach ($photolist as $gallery)
                    <li class="one_quarter gallery">
                      <div id="gallery-div">
                        <img class="gallery-img" src="{{asset('gallery/images/'.$gallery->photo)}}" alt="" >
                      </div></li>
                  @endforeach
                  
                </ul>
              @endforeach
              {{-- <figcaption>Gallery Description Goes Here</figcaption> --}}
          </figure>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <nav class="pagination">
          <ul>
            <li><a href="#">&laquo; Previous</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><strong>&hellip;</strong></li>
            <li><a href="#">6</a></li>
            <li class="current"><strong>7</strong></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><strong>&hellip;</strong></li>
            <li><a href="#">14</a></li>
            <li><a href="#">15</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </div>
            <!-- Tabs -->
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
@endsection
