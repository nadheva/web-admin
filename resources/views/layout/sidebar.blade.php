<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{asset('template/')}}/assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text">
            Kampus Gratis
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com/" class="simple-text">
            Ct
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('template/')}}/assets/img/kampusgratis.jpeg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    Kampus Gratis
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">book</i>
                    <p>Modul Bank
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="dropdown" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{route('kelas.index')}}">Kursus</a>
                        </li>
                        <li>
                            <a href="{{route('kontenVidio.index')}}">Konten Video</a>
                        </li>
                        <li>
                            <a href="{{route('kontenDokumen.index')}}">Konten Dokumen </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p>Tables
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="tables/regular.html">Regular Tables</a>
                        </li>
                        <li>
                            <a href="tables/extended.html">Extended Tables</a>
                        </li>
                        <li>
                            <a href="tables/datatables.net.html">DataTables.net</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>