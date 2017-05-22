<!DOCTYPE html>
<html lang="en">
<head>
    <meta charshet="UTF-8">     
    <title>@yield('page_tittle','SMP PROJECT')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/css/bootstrap.min.css')}}">
    <link href="{{asset('baru/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('baru/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('baru/css/styles.css')}}" rel="stylesheet">
    <script src="{{asset('baru/js/lumino.glyphs.js')}}"></script>
    <style type="text/css">
        body{
            padding-top: auto ;
            padding-bottom: 70px;
        }
        .starter-template{
            padding: 40px 15px;
            text-align: center;
        }
        .form-horizontal{
            padding: 15px 10px;
        }
        footer{
            padding-top: 15px;
            text-align: right;
        }
        .navbar-inverse{
            background-color: #003399;
        }
        .container{
            padding-top: 50px;
            padding-left: 10px;
            padding-right: 200px;
        }

    </style>
</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Halaman Kepala Sekolah</span></a>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                <li><a href="/logout">Logout<i class="glyphicon glyphicon-log-out"></i></a></li>
                <li><a href="about"><i class="glyphicon glyphicon-leaf"></i>About Us</a></li>
            </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
      <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			
			<li><a href="{{url('guru_kepsek')}}"><i class="glyphicon glyphicon-user"></i> Data Guru</a></li>
			<li><a href="{{url('siswa_kepsek')}}"><i class="glyphicon glyphicon-user"></i> Data Siswa</a></li>
            <li><a href="{{url('staff_kepsek')}}"><i class="glyphicon glyphicon-user"></i>Data Staff</a></li>
            <li class="divider"></li>
			<li><a href="{{url('eskul_kepsek')}}"><i class="glyphicon glyphicon-file"></i> Data Eskul Siswa</a></li>
			<li><a href="{{url('ruangan_kepsek')}}"><i class="glyphicon glyphicon-file"></i>Data Ruangan</a></li>
            <li><a href="{{url('jeniseskul_kepsek')}}"><i class="glyphicon glyphicon-file"></i>Data Jenis Eskul</a></li>
            <li><a href="{{url('matapelajaran_kepsek')}}"><i class="glyphicon glyphicon-file"></i>Mata Pelajaran</a></li>
            <li><a href="{{url('jadwal_matapelajaran_kepsek')}}"><i class="glyphicon glyphicon-file"></i>Jadwal Mata Pelajaran</a></li>
            <li><a href="{{url('guru_matapelajaran_kepsek')}}"><i class="glyphicon glyphicon-file"></i>Data Guru Mengajar</a></li>
		</ul>
        <!-- <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div> -->
    </div><!--/.sidebar-->
        
        
                
        
        
        
    </div><!--/.main-->

    <div class="clearfix"></div>
    <div class="container">
        @if (Session::has('informasi'))
        <div class="alert alert-info">
            <strong>Informasi: </strong>{{Session::get('informasi')}}
        </div>
        @endif  

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        @yield('container')
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <footer class="container">
            <p class="copyright text-muted small">Copyright &copy; Kelompok 7 2015. All Rights Reserved</p>
        </footer>
    </nav>
    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    $(function(){
        $('[data-toggle="tooltip"]').tooltip()
    });
    </script>


</body>
</html>