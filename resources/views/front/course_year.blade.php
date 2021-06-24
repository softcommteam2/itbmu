@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content"> 
          <!-- ################################################################################################ -->
          <h1 align="center">Courses Years</h1>
          <h6 style="font-size:16px; font-weight:bold;">Diploma and Degrees Offered</h3>
          <p style="text-align:justify;">
            One year diploma and other degree are offered for graduate and post-graduate students. They are as follows:-
          </p>
          <table style="background-color:#fff; border:0px;">
            @foreach ($courses as $course)
                <tr style="background-color:#fff; border:0px; height:35px;">
                <td style="background-color:#fff; border:0px;">{{$course->id}}</td>
                <td style="background-color:#fff; border:0px;">{{$course->name}}</td>
                <td style="background-color:#fff; border:0px;">({{$course->open_time}}) Year</td>
                </tr>
            @endforeach
            {{-- <tr style="background-color:#fff; border:0px; height:35px;">
              <td style="background-color:#fff; border:0px;">2. </td>
              <td style="background-color:#fff; border:0px;">Bachelor of Arts in Buddha Dhamma</td>
              <td style="background-color:#fff; border:0px;">(2) year</td>
            </tr>
            <tr style="background-color:#fff; border:0px; height:35px;">
              <td style="background-color:#fff; border:0px;">3. </td>
              <td style="background-color:#fff; border:0px;">Master of Arts in Buddha Dhamma</td>
              <td style="background-color:#fff; border:0px;">(3) year</td>
            </tr>
            <tr style="background-color:#fff; border:0px; height:35px;">
              <td style="background-color:#fff; border:0px;">4. </td>
              <td style="background-color:#fff; border:0px;">Doctor of Philosophy in Buddha Dhamma</td>
              <td style="background-color:#fff; border:0px;">(4) year</td> --}}
            </tr>
          </table>
          <h6 style="font-size:16px; font-weight:bold;">Academic Requirements</h3>
          <p style="text-align:justify;">
            Anyone regardless of gender, race, religion, and creed, having educational qualifications prescribed by the University, can apply for admission. However, students are required to sit for the entrance examination.
          </p>
          <p style="text-align:justify;">
            Any application for Diploma in Buddha Dhamma will have to meet the following requirements;
          </p>
          <ol style="text-align:justify;">
            <li>The foreign monks, nuns and laymen must have passed at least the Matriculation or equivalent. For the laymen and nuns who are Myanmar citizens must have their first degrees BA or BSc. Myanmar monks must have passed Dhammācariya examination.</li>
            <li>The candidates need to sit for an entrance examination prescribed by the University.</li>
            <li>They should have some knowledge of Pāli, Sanskirt, and Theravāda Buddhist Scriptures, fluent in spoken and written English is desirable.</li>
          </ol>
          <h6 style="font-size:16px; font-weight:bold;">Academic Terms</h3>
          <p style="text-align:justify;">
            The first term starts in June and ends in September. The Second term starts in December and end in March.
          </p>
          <h6 style="font-size:16px; font-weight:bold;">Vacation</h3>
          <p style="text-align:justify;">
            April, May and November.
          </p>
          <h6 style="font-size:16px; font-weight:bold;">Accomodation</h3>
          <p style="text-align:justify;">
            The University provides foreign students with free accommodation and meals.
          </p>
          <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
  </div>
@endsection