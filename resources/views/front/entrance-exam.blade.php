@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content"> 
          <!-- ################################################################################################ -->
          <h1 align="center">Entrance</h1>
          
          <div id="comments">
           <ul>
             @foreach ($entrances as $entrance)
              <a href="#" target="_blank"><img src="../images/pdflogo.png" style="width:100px; height:120px; margin-right:10px;"  align="left"> </a>
              <li>
                  <font size="4"><strong>Year: </strong></font><font size="4">{{ $entrance->year }}</font>
                <article>
                  <header>
                    <address>{{ date('d-m-Y', strtotime($entrance->date)) }}</address>
                  </header>
                  <div class="comcont">
                    <p><a href="{{asset('storage/exam_results/'.$entrance->pdf)}}" target="_blank">{{ $entrance->pdf }}</a></p>
                  </div>
                </article>
              </li>
             @endforeach
            </ul> 
            
          </div>
          <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
</div>
@endsection