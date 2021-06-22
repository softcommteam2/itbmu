@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="hoc container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content"> 
        <!-- ################################################################################################ -->
        <div id="gallery">
            
            @foreach($galleries as $gallery)
                <figure>
                    <h1 class="heading" align="center">{{ $gallery::activity_type($gallery->title_id) }}</h1>
                    <ul class="nospace clear">
                    <li class="one_quarter"><a href="#"><img src="{{asset('gallery/images/'.$gallery->photo)}}" alt=""></a></li>
                   
                    
                    </ul>
                    <figcaption>Gallery Description Goes Here</figcaption>
                </figure>
          @endforeach
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
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
@endsection
