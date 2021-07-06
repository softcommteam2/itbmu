@extends('front.layout.base')
@section('content')
    <div class="wrapper row3">
        <style>
            /* Dropdown Button */

    .dropbtn {
        background-color: #FFA500;
        color: white;
        padding: 12px;
        font-size: 16px;
        text-align: left;
        border: none;
        cursor: pointer;
        min-width: 400px;
    }
    /* Dropdown button on hover & focus */

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #ffc125;
    }
    /* The container <div> - needed to position the dropdown content */

    .dropdown {
        position: relative;
        display: inline-block;
    }
    /* Dropdown Content (Hidden by Default) */

    .dropdown-content {
        display: none;
        position: relative;
        background-color: #f9f9f9;
        min-width: 400px;
        /*160px*/
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }
    /* Links inside the dropdown */

    .dropdown-content a {
        color: black;
        padding: 10px 14px;
        text-decoration: none;
        display: block;
    }
    /* Change color of dropdown links on hover */

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }
    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */

    .show {
        display: block;
    }
    </style>
        <main class="container hoc clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="content">
                <!-- ################################################################################################ -->
                <h1  align="center">Organization Set-up</h1>

                <h6 style="font-size:16px; font-weight:bold;">Academic Sector</h3>
                <p style="text-align:justify;">
                    The Academic Sector of the University is formed into four Faculties. These four Faculties are, further, constituted with specific Departments. Each Faculty is headed by a Dean under whose supervision its Departments function. The structure of the Faculties with their Departments are as following:-
                </p>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">1. Faculty of Pariyatti</button>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="#">(A) Department of Vinaya Studies</a>
                    <a href="#">(B) Department of Suttanta Studies</a>
                    <a href="#">(C) Department of Abhidhamma Studies</a>
                    <a href="#">(D) Department of Buddhist Culture and History</a>
                    <a href="#">(E) Department of Pāli Language</a>
                    <a href="#">(F) Department of Myanmar Language</a>
                    </div>
                </div>
                <br><br>
                <div class="dropdown">
                    <button onclick="myFunction1()" class="dropbtn">2. Faculty of Patipatti</button>
                    <div id="myDropdown1" class="dropdown-content">
                    <a href="#">(A) Department of Dhammānuloma Studies</a>
                    <a href="#">(B) Department of Samatha Studies</a>
                    <a href="#">(C) Department of Vipassanā Studies</a>
                    </div>
                </div>
                <br><br>
                <div class="dropdown">
                    <button onclick="myFunction2()" class="dropbtn">3. Faculty of Religious and Missionary Works</button>
                    <div id="myDropdown2" class="dropdown-content">
                    <a href="#">(A) Department of Studies of Religions</a>
                    <a href="#">(B) Department of Missionary Works</a>
                    <a href="#">(C) Department of Research</a>
                    </div>
                </div>
                <br><br>
                <div class="dropdown">
                    <button onclick="myFunction3()" class="dropbtn">4. Faculty of Foreign Languages and Translation</button>
                    <div id="myDropdown3" class="dropdown-content">
                    <a href="#">(A) Department of English</a>
                    <a href="#">(B) Department of French</a>
                    <a href="#">(C) Department of German</a>
                    <a href="#">(D) Department of Arabic</a>
                    <a href="#">(E) Department of Japanese</a>
                    <a href="#">(F) Department of Chinese</a>
                    <a href="#">(G) Department of Hindi</a>
                    </div>
                </div>
                <br><br>

                <h6 style="font-size:16px; font-weight:bold;">Administrative Sector</h6>
                <p style="text-align:justify;">
                Administrative Sector, which has several Branches Branches under its body, is organized into a number of official sections. This edifice of Administration dunctions uninterrupted under the supervision of the University Management Committee, formed with well-qualified government-appointed personages.
                </p>
                <p>Some fractions of the Administrative Body can be given as follows:-
                <div class="dropdown">
                    <button class="dropbtn">1. Administrative Division</button>
                    <br>
                    <button class="dropbtn">2. Financial Division</button>
                    <br>
                    <button class="dropbtn">3. Engineering Division</button>
                    <br>
                    <button class="dropbtn">4. Printing and Press Division</button>
                    <br>
                    <button class="dropbtn">5. Health Division</button>
                    <br>
                    <button class="dropbtn">6. Training Division</button>
                    <br>
                    <button class="dropbtn">7. Library Division</button>
                </div>
            </div>
        </main>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    /* When the user clicks on the button,
                                                        toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");
    }

    function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
    }

    function myFunction3() {
        document.getElementById("myDropdown3").classList.toggle("show");
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
@endsection
