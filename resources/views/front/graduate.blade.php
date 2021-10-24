@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content">
          <!-- ################################################################################################ -->
          <h1 align="center">Graduate degree course (B.A (A))</h1>

          <div id="comments">
            <ul>
              @foreach ($a_graduates as $A_graduate)
               <a href="#" target="_blank"><img src="../images/pdflogo.png" style="width:100px; height:120px; margin-right:10px;"  align="left"> </a>
               <li>
                   <font size="4"><strong>Year: </strong></font><font size="4">{{ $A_graduate->year }}</font>
                 <article>
                   <header>
                     <address>{{ date('d-m-Y', strtotime($A_graduate->date)) }}</address>
                   </header>
                   <div class="comcont">
                     <p><a href="{{asset('storage/exam_results/'.$A_graduate->pdf)}}" target="_blank">{{ $A_graduate->pdf }}</a></p>
                   </div>
                 </article>
               </li>
              @endforeach
             </ul> 

            <h1 align="center">Graduate degree course (B.A (B))</h1>

            <div id="comments">
              <ul>
                @foreach ($b_graduates as $B_graduate)
                 <a href="#" target="_blank"><img src="../images/pdflogo.png" style="width:100px; height:120px; margin-right:10px;"  align="left"> </a>
                 <li>
                     <font size="4"><strong>Year: </strong></font><font size="4">{{ $B_graduate->year }}</font>
                   <article>
                     <header>
                       <address>{{ date('d-m-Y', strtotime($B_graduate->date)) }}</address>
                     </header>
                     <div class="comcont">
                       <p><a href="{{asset('storage/exam_results/'.$B_graduate->pdf)}}" target="_blank">{{ $B_graduate->pdf }}</a></p>
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
