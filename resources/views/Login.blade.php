<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>@yield('page_title','Login User')</title>
<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
<link href="coba/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<style type="text/css">
body{
	padding-top: 70px;
	padding-bottom: 70px
}
.startter-template{
	padding: 40 px 15px;
	text-align: center;
}
.form-horizontal{
	padding: 15px 10px;
}
footer{
	padding-top: 15px;
	text-align: right;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">SELAMAT DATANG</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">home</a>
                    </li>
                    <li>
                        <a href="about">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="clearfix"></div>
<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Silakan Login Terlebih Dahulu</strong>
		</div>
		{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
		<div class="form-group">
			<label class="col-sm-4 control-lable">Username</label>
			<div class="col-sm-8">
				{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-lable">Password</label>
			<div class="col-sm-8">
				{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"])!!}
			</div>
		</div>
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-primary btn-block"><i class="fa fa-lock"></i>Masuk</button>
			<button type="reset" class="btn btn-danger btn-block"><i class="fa fa-undo"></i>Ulangi</button>
		</div>
		{!! Form::close() !!}
	</div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
	<footer class="container">
	 <p class="copyright text-muted small">Copyright &copy; Kelompok 7 2015. All Rights Reserved</p>	
	</footer>
</nav>
<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
	$(function() {
		$('[data-toogle="tooltip"]').tooltip()
	});
</script>
</body>
</html>