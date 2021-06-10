<x-layout>
    <div class="wrapper row3">
        <main class="container hoc clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="content">
              <!-- ################################################################################################ -->
              <div id="gallery">
                <figure>
                  <header class="heading"  align="center">Organization</header>

                  <h2 style="font-size:16px; font-weight:bold;">Rector</h2>
                  <ul class="nospace clear">
                    @foreach ($organizations::rectors()->get() as $rector)
                        <li class="one_quarter first" align="center"><a href="desorganization.html"><img src="{{ $rector->photoUrl() }}" alt="" style="width:130px; height:160px; border:5px dotted #a95001;"><br> <div align="center"  style="font-size:13px;">{{ $rector->name }}</div></a></li>
                    @endforeach
                  </ul>

                  <h2 style="font-size:16px; font-weight:bold;">Prorector</h2>
                  <ul class="nospace clear">
                    @foreach ($organizations::prorectors()->get() as $prorector)

                        <li class="one_quarter first" align="center"><a href="#"><img src="{{ $prorector->photoUrl() }}" alt="" style="width:130px; height:160px;border:5px dotted #a95001;"><br> <div align="center"  style="font-size:13px;">{{ $prorector->name }}</div></a></li>
                    @endforeach
                  </ul>
                  <h2 style="font-size:16px; font-weight:bold;">Dean</h2>
                  <ul class="nospace clear">
                    @foreach ($organizations::deans()->get() as $dean)
                    <li class="one_quarter" align="center"><a href="#"><img src="{{ $dean->photoUrl() }}" alt="" style="width:130px; height:160px;border:5px dotted #a95001;"><br> <div align="center"  style="font-size:13px;">{{ $dean->name }}</div></a></li>
                    @endforeach

                  </ul>


                  </ul>
                </figure>
              </div>
              <!-- ################################################################################################ -->

            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
          </main>
      </div>
</x-layout>
