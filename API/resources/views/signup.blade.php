<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Signup</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<link href="css1/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	</head>
	<body>
		<header style="height: 50px; background-color: #10A75F;">
			<a class="navbar-brand" href="url_homepage">PIGBI</a>
		</header>
		<div id="wrapper">
			<form name="login-form" class="login-form" action="url_signup" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			    <div class="header">
				    <h1>Signup Form</h1>
				</div>
                <div class="content">
                    @if (isset($error))
                        <div class="cls_errorcode">
                            <h4>{{$error}}</h4>
                        </div>
                    @endif
                    <input name="username" required type="text" class="input username cls_input" value="Username" onfocus="this.value=''" />
                    <input name="email" required type="email" style="margin-top: 10%;" class="input username cls_input" value="Email@email.com" onfocus="this.value=''" />
                    <input name="password" required type="password" class="input password cls_input" value="Password" onfocus="this.value=''" />
                </div>
			    <div class="footer">
				    <input type="submit" name="submit" value="Signup" class="button" />
				    <!-- <input type="submit" name="submit" value="Register" class="register" /> -->
			    </div>
			</form>
		</div>
		<div class="gradient"></div>
	</body>
</html>