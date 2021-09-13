@extends('front.layout.base')
@section('content')
<div class="wrapper row3">
    <main class="container hoc clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content">
          <!-- ################################################################################################ -->
          <h1 align="center">Magazine</h1>
                <p>
            <table>
              <tbody>
                <tr style="border: 0px solid;background-color: #fff;">
                  <td rowspan="3" width="160px" ><img src="../images/01.png" style="width:150px; height:150px;background-color: #fff;"></td>
                  <td colspan="3" style="border: 0px solid;background-color: #fff;"><strong>ထေရဝါဒဓမ္မစာစောင်</strong></td>
                </tr>
                <tr style="border: 0px solid;background-color: #fff;">
                   <td style="border: 0px solid;background-color: #fff;"><strong>အတွဲ (၁၄) အမှတ် (၁) </strong></td>
                  <td style="border: 0px solid;background-color: #fff;"><strong>၁၃၈၁-ခုနှစ် တပို့တွဲ-တပေါင်း </strong></td>
                  <td style="border: 0px solid;background-color: #fff;"><strong>၂၀၂၀ ပြည့်နှစ်  ဖေဖော်ဝါရီလ</strong></td>
                </tr>
                <tr style="border: 0px solid;background-color: #fff;">

                  <td colspan="3" style="border: 0px solid;background-color: #fff;" align="right"> <p class="nospace"><a href="mgdetail.html">Read More &raquo;</a></p></td>
                </tr>
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
