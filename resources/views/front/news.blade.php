@extends('front.layout.base')
@section('content')
<div class="wrapper row3">

  <main class="container hoc clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->
      <h1 align="center">News & Events</h1>
            <p>
              @foreach ($news as $new)
        <table>
          <tbody>
           
              <tr>
              
                <td rowspan="3" width="160px">
                  @if(!empty($new->photo))
                    @if(!empty($new->pdf))
                        <div class="text-center">
                            <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                <img class="default-img" src="{{asset('storage/news/'.$new::first_photo($new->photo))}}">
                            </a>
                        </div>
                    @else
                        <div class="text-center">
                            <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                <img class="default-img" src="{{asset('storage/news/'.$new::first_photo($new->photo))}}">
                            </a>
                        </div>
                    @endif
                  @else
                    @if(empty($new->pdf))
                          @if($new->type==0)
                            <div class="text-center">
                                <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                    <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
                                </a>
                            </div>
                            @else
                            <div class="text-center">
                              <a href="{{asset('images/theannouncement.pdf')}}" target="_Black">
                                  <img class="default-img"  src="{{asset('images/itbmu.jpg')}}" >
                              </a>
                          </div>
                        @endif
                    @else
                      @if($new->type==0)
                        <div class="text-center">
                            <a href="{{asset('storage/news/'.$new->pdf)}}" target="_Black">
                                <img class="default-img"  src="{{asset('images/itbmu-announcement.jpg')}}" >
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
              
                  @endif
                </td>
                <td colspan="3"><strong>{{ $new->newstitleeng }}</strong></td>
              </tr>
              <tr>
                <td><strong>{{ Illuminate\Support\Str::limit(strip_tags( $new->newsmyan), 150) }} </strong></td>
                <td><strong>၁၃၈၁-ခုနှစ် တပို့တွဲ-တပေါင်း </strong></td>
                <td><strong>{{ $new->upcomedate }}</strong></td>
              </tr>
              <tr>

                <td colspan="3" align="right"> <p class="nospace"><a href="{{ url('event-detail/'.$new->id) }}" id="show-more"><strong>Read More &raquo;</strong></a></p></td>
              </tr>
           
          </tbody>
        </table>
        @endforeach
      </p>


      <!-- ################################################################################################ -->
      <nav class="pagination">
        
        <ul>
          <li><a href="{{ $news->previousPageUrl()}}">&laquo; Previous</a></li>
          <li class="current"><strong>{{$news->currentPage()}}</strong></li>
          <li><a href="{{ url('events?page='.$news->lastPage()) }}">{{$news->lastPage()}}</a></li>
          <li><a href="{{$news->nextPageUrl()}}"> &raquo;Next</a></li>
        </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection

