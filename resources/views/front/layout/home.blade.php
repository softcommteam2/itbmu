@extends('front.layout.base')
@section('wowslider-content')
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            <li><img src="data1/images/s1.png" alt="s1" id="wows1_0" /></li>
            <li><img src="data1/images/s2.png" alt="s2" id="wows1_1" /></li>
            <li><img src="data1/images/s3.png" alt="s3" id="wows1_2" /></li>
            <li><img src="data1/images/s4.png" alt="s4" id="wows1_3" /></li>
            <li><img src="data1/images/s5.png" alt="s5" id="wows1_4" /></li>
            <li><img src="data1/images/1.jpg" alt="1" id="wows1_5" /></li>
            <li><img src="data1/images/2.jpg" alt="slideshow html code" id="wows1_6" /></li>
            <li><img src="data1/images/3.jpg" alt="3" id="wows1_7" /></li>
        </ul>
    </div>
    <div class="ws_bullets" >
        <div>
            <a href="#" title="s1"><span><img src="data1/tooltips/s1.png" alt="s1"/>1</span></a>
            <a href="#" title="s2"><span><img src="data1/tooltips/s2.png" alt="s2"/>2</span></a>
            <a href="#" title="s3"><span><img src="data1/tooltips/s3.png" alt="s3"/>3</span></a>
            <a href="#" title="s4"><span><img src="data1/tooltips/s4.png" alt="s4"/>4</span></a>
            <a href="#" title="s5"><span><img src="data1/tooltips/s5.png" alt="s5"/>5</span></a>
            <a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>6</span></a>
            <a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>7</span></a>
            <a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>8</span></a>
        </div>
    </div>
    <div class="ws_shadow"></div>
</div>
@endsection
@section('article-content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <article class="group">
            <div class="sectiontitle">
                <h6 class="heading">Welcome to the University</h6>

            </div>

            <div class="content">

                <p style="text-align: justify;"><img src="images/homeimg.jpg" align="Left" style="margin-right:10px;" class="borderbox"> The International Therav??da Buddhist Missionary University(ITBMU) is situated on the Dhammap??la Hill, Mayangone Township, in Yangon, The Republic
                    of the Union of Myanmar. It was inaugurated on 9 December 1998, under Ministry of Religious Affairs and Culture. <br><br> Myanmar has carefully preserved Therav??da Buddhism in its pristine form for nearly one thousand years. Now
                    she is sharing her knowledge of Buddhism both in theory and practice with the people of the world to promote their happiness and moral well-being. Those who wish to learn Therav??da Buddhist canonical texts and insight meditation
                    in Myanmar tradition have a golden opportunity to study them from the Myanmar Buddhist scholars of high academic achievements at the same institution. The Myanmar and P??li languages are included in the academic programmes. The
                    medium of instruction is English.</p>

            </div>
        </article>
    </main>
</div>
@endsection
@section('content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <h3>Objectives</h3> <br> There are eight objectives of the university:<br>

        <br> (a) To share the genuine Therav??da Buddhism (the teachings of Gotama Buddha) with the people of the world.<br> (b) To study and comprehend the canonical texts of Therav??da Pitaka as approved successively by the six Buddhist Councils.<br>            (c) To abstain from evil deeds and practice good deeds.<br> (d) To promote the four modes of sublime living (Brahma-vih??ra) which would lead to the establishment of peaceful and prosperous world.<br> (e) To train more missionaries endowed
        with good morality who are well-versed in Pitaka literature and meditational practices.<br> (f) To teach and train local and foreign students who are willing to study Therav??da Pitaka in its pristine form.<br> (g) To collaborate with local
        and foreign universities, and also to cooperate with other universities that will support the objectives of the university.<br> (h) To send missionaries to foreign countries for the propagation of Therav??da Buddhism.
        <br><br>
        <div class="content">
            <!-- ################################################################################################ -->

            <!-- ################################################################################################ -->
            <div class="group btmspace-50 demo">

                <div class="one_half first card">
                    <div class="bg-card-header" align="center">News</div>
                    <div class="p-0 card-body">
                        <div class="p-3 border-bottom scrollable">
                            <table>
                                <tbody>
                                    @foreach ($news->take(5) as $new)

                                        <div>
                                            <tr>
                                                <td>
                                                    @if(!empty($new->cover_photo))
                                                        @if(!empty($new->pdf))
                                                            <div class="text-center">
                                                                <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                                                    <img class="default-img" src="{{asset('storage/news/'.$new->cover_photo)}}">
                                                                </a>
                                                            </div>
                                                        @else
                                                            <div class="text-center">
                                                                <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                                                    <img class="default-img" src="{{asset('storage/news/'.$new->cover_photo)}}">
                                                                </a>
                                                            </div>
                                                        @endif
                                                    @else
                                                        @if(empty($new->pdf))
                                                            <div class="text-center">
                                                                <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                                                    <img class="default-img"  src="{{asset('images/itbmu.jpg')}}" >
                                                                </a>
                                                            </div>
                                                        @else
                                                            <div class="text-center">
                                                                <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                                                    <img class="default-img"  src="{{asset('images/itbmu.jpg')}}" >
                                                                </a>
                                                            </div>
                                                        @endif
                                                    
                                                    @endif
                                                </td>
                                                <td colspan="3">{{ Illuminate\Support\Str::limit(strip_tags( $new->newtitle), 100) }}</td>

                                            </tr>
                                            <tr style="text-align: center;">
                                                <td class="secondary"><i class="far fa-user"> Admin</i> </td>
                                                <td class="secondary"><i class="far fa-calendar-alt"> {{$new->upcomedate}}</i></td>
                                                <td class="secondary"><i class="fas fa-plus-circle"> <a href="{{ url('event_detail/'.$new->id) }}" id="show-more">Show More </a></i></td>

                                            </tr>
                                        </div>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- <nav class="pagination">
                                <ul>
                                    <li><a href="#">&laquo; Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>

                                    <li><a href="#">Next &raquo;</a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
                <div class="one_half card">
                    <div class="bg-card-header" align="center">Announcement</div>
                    <div class="p-0 card-body">
                        <div class="p-3 border-bottom">
                            <table>
                                <tbody>
                                    @foreach ($announcements->take(5) as $ann)
                                    <div>
                                        <tr>
                                            <td>
                                                {{-- @if(empty($ann->pdf))
                                                        <div class="text-center">
                                                            <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                                                <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                                            </a>
                                                        </div>
                                                @else
                                                    <div class="text-center">
                                                        <a href="{{asset('storage/news/'.$ann->pdf)}}" target="_Black">
                                                            <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                                        </a>
                                                    </div>
                                                @endif --}}
                                                @if(!empty($ann->cover_photo))
                                                    @if(!empty($ann->pdf))
                                                        <div class="text-center">
                                                            <a href="{{asset('storage/news/'.$ann->pdf)}}" target="_Black">
                                                                <img class="default-img" src="{{asset('storage/news/'.$ann->cover_photo)}}">
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="text-center">
                                                            <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                                                <img class="default-img" src="{{asset('storage/news/'.$ann->cover_photo)}}">
                                                            </a>
                                                        </div>
                                                    @endif
                                                @else
                                                    @if(empty($ann->pdf))
                                                        <div class="text-center">
                                                            <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                                                <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="text-center">
                                                            <a href="{{asset('storage/news/'.$ann->pdf)}}" target="_Black">
                                                                <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                                            </a>
                                                        </div>
                                                    @endif
                                                
                                                @endif
                                            </td>
                                            <td colspan="3">{{ Illuminate\Support\Str::limit(strip_tags( $ann->newtitle), 100) }}</td>

                                        </tr>
                                        <tr style="text-align: center;">
                                            <td class="secondary"><i class="far fa-user"> Admin</i> </td>
                                            <td class="secondary"><i class="far fa-calendar-alt"> {{$ann->upcomedate}}</i></td>
                                            <td class="secondary"><i class="fas fa-plus-circle"> <a href="{{ url('event_detail/'.$ann->id) }}" id="show-more">Show More </a></i></td>

                                        </tr>
                                    </div>
                                    @endforeach


                                </tbody>
                            </table>
                            {{-- <nav class="pagination">
                                <ul>
                                    <li><a href="#">&laquo; Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>

                                    <li><a href="#">Next &raquo;</a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
                <div >
                    <a href="{{route('new')}}" target="_blank">
                        <button class="view-all"> View All news & Announcements</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection


