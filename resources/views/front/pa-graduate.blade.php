@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content">
          <!-- ################################################################################################ -->
          <h1 align="center">Ph.D Post graduate course</h1>

          <div id="comments">
            <ul>
              @foreach ($pa_graduates as $pa_graduate)
               <a href="#" target="_blank"><img src="../images/pdflogo.png" style="width:100px; height:120px; margin-right:10px;"  align="left"> </a>
               <li>
                   <font size="4"><strong>Year: </strong></font><font size="4">{{ $pa_graduate->year }}</font>
                 <article>
                   <header>
                     <address>{{ date('d-m-Y', strtotime($pa_graduate->date)) }}</address>
                   </header>
                   <div class="comcont">
                     <p><a href="{{asset('storage/exam_results/'.$pa_graduate->pdf)}}" target="_blank">{{ $pa_graduate->pdf }}</a></p>
                   </div>
                 </article>
               </li>
              @endforeach
             </ul> 
          <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
</div>
@endsection
