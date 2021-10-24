@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content">
          <!-- ################################################################################################ -->
          <h1 align="center">M.A Post graduate course (M.A Part I)</h1>

          <div id="comments">
            <ul>
              @foreach ($ma_graduatesI as $ma_graduateI)
               <a href="#" target="_blank"><img src="../images/pdflogo.png" style="width:100px; height:120px; margin-right:10px;"  align="left"> </a>
               <li>
                   <font size="4"><strong>Year: </strong></font><font size="4">{{ $ma_graduateI->year }}</font>
                 <article>
                   <header>
                     <address>{{ date('d-m-Y', strtotime($ma_graduateI->date)) }}</address>
                   </header>
                   <div class="comcont">
                     <p><a href="{{asset('storage/exam_results/'.$ma_graduateI->pdf)}}" target="_blank">{{ $ma_graduateI->pdf }}</a></p>
                   </div>
                 </article>
               </li>
              @endforeach
             </ul> 

            <h1 align="center">M.A Post graduate course (M.A Part II)</h1>

            <div id="comments">
              <ul>
                @foreach ($ma_graduatesII as $ma_graduateII)
                 <a href="#" target="_blank"><img src="../images/pdflogo.png" style="width:100px; height:120px; margin-right:10px;"  align="left"> </a>
                 <li>
                     <font size="4"><strong>Year: </strong></font><font size="4">{{ $ma_graduateII->year }}</font>
                   <article>
                     <header>
                       <address>{{ date('d-m-Y', strtotime($ma_graduateII->date)) }}</address>
                     </header>
                     <div class="comcont">
                       <p><a href="{{asset('storage/exam_results/'.$ma_graduateII->pdf)}}" target="_blank">{{ $ma_graduateII->pdf }}</a></p>
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
