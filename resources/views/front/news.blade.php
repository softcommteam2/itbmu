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
        <table>
          <tbody>
            @foreach ($news as $new)
              <tr style="border: 0px solid;background-color: #fff;">
                {{-- <td rowspan="3" width="160px" ><img src="{{asset('storage/news/images/'.$new->photo)}}" style="width:150px; height:150px;background-color: #fff;"></td> --}}
                <td rowspan="3" width="160px" >
                @foreach (unserialize($new->photo) as $photo)
                    <img src="{{asset('storage/news/images/'.$photo)}}" width="100px" height="82px">
                @endforeach
                </td>
                <td colspan="3" style="border: 0px solid;background-color: #fff;"><strong>{{ $new->newstitleeng }}</strong></td>
              </tr>
              <tr style="border: 0px solid;background-color: #fff;">
                <td style="border: 0px solid;background-color: #fff;"><strong>{{ $new->newsmyan }} </strong></td>
                <td style="border: 0px solid;background-color: #fff;"><strong>၁၃၈၁-ခုနှစ် တပို့တွဲ-တပေါင်း </strong></td>
                <td style="border: 0px solid;background-color: #fff;"><strong>{{ $new->upcomedate }}</strong></td>
              </tr>
              <tr style="border: 0px solid;background-color: #fff;">

                <td colspan="3" style="border: 0px solid;background-color: #fff;" align="right"> <p class="nospace"><a href="{{ url('event-detail/'.$new->id) }}">Read More &raquo;</a></p></td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </p>

      <!-- ################################################################################################ -->

      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li class="current"><a href="#">1</a></li>
          <li><a href="#">2</a></li>

          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection

{{-- @extends('front.layout.base')
@section('content')

@endsection --}}
