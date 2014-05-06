<!doctype html>
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/cerulean/bootstrap.min.css" rel="stylesheet">
		
	</head>

	<body>

		<nav class="navbar navbar-default" role="navigation">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#">Creazion © RedIglesia>></a>
		  </div>

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <!--<li class="active"><a href="#">Link</a></li>
		      <li><a href="#">Link</a></li> -->
		      
		    </ul>
		    
		    <ul class="nav navbar-nav navbar-right">
		      <!-- <li><a href="#">Link</a></li> -->
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Registrarse</a></li>
		          <li><a href="#">Cerrar Sesión</a></li>
		          <li><a href="#">Pagina Oficial</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Cerrar Sesión</a></li>
		        </ul>
		      </li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>

		<div class="container">
	<!-- 		@if (Session::has('message'))
		<div class="bg-warning">
			<p>{{ Session::get('message') }}</p>
		</div>
	@endif -->
			@yield('container')

		</div>
	 	<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
		<style>
			table form { margin-bottom: 0; }
			form ul { margin-left: 0; list-style: none; }
			.error { color: red; font-style: italic; }
			body{
			    background: url(img/back.png);
				background-color: #444;
			    background: url(img/pinlayer2.png),url(img/pinlayer1.png),url(img/back.png);    
				}

			.vertical-offset-100{
			    padding-top:100px;
			}
		</style>
		<script>
			$(document).ready(function(){
		  $(document).mousemove(function(e){
		     TweenLite.to($('body'), 
		        .5, 
		        { css: 
		            {
		                'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"
		            }
		        });
		  });
		});
	</script>
	</body>
	</body>

</html>