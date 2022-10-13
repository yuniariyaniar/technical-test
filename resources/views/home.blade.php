<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('front/img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
  <link rel="stylesheet" href="{{asset('front/css/feathericon.min.css')}}">

	<title>secdoc</title>

	<link href="{{asset('front/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  </head>

  <script src="https://unpkg.com/feather-icons"></script>

  <body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar ">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
          <span class="" style="text-align:center"><center><b>SECDOC</b></center></span>
            <hr/>
        </a>

			<ul class="sidebar-nav" stye="height:100px">
				<li class="sidebar-header">
					Pages
				</li>

			<li class="sidebar-item active">
			<a class="sidebar-link" href="#">
            <span class="glyphicon glyphicon-envelope"></span>
            <i class="align-middle" data-feather="sliders" ></i> <span class="align-middle">Beranda</span>
            </a>
			</li>

            
			<li class="sidebar-item">
			<a class="sidebar-link" href="/issue">
            <span class="glyphicon glyphicon-envelope"></span>
            <i class="align-middle" data-feather="clipboard" ></i> <span class="align-middle">List E-Ticket</span>
            </a>
			</li>
            

			<li class="sidebar-item">
			<a class="sidebar-link" href="logout">
            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">logout</span>
            </a>
			</li>
			</ul>		
			</div>
		</nav>


		<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
				
            <!-- /Header -->
		<div class="navbar-collapse collapse">
			<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
			<a class="nav-link d-none d-sm-inline-block" href="#" >
            <i class="avatar img-fluid rounded me-1" data-feather="user" alt="Charles Hall"></i> <span class="text-dark"><?php echo Auth::user()->name; ?></span>
            </a>	
			</li>
			</ul>
		</div>
		</nav>

            <!-- /Area Content -->
			<main class="content">
			<div class="container-fluid p-0">

				
				<div class="row">
				<div class="col-12">
				<div class="card">

			<!-- /Card Header -->
				

				<div class="card-body">
					<div class="text-center mt-4">
							<h1 class="h2"><strong>SECDOC</strong></h1></strong>
							<p class="lead">
								WEBSITE FOR REPORTING E-TICKET
							</p>
                             <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing. Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing. Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
						</div>				


					
					</div>
					</div>
					</div>
					</div>

			</div>
			</main>

			<!-- /Footer Card-->
			<footer class="footer">
		    <div class="container-fluid">
			<div class="row text-muted">
			<div class="col-6 text-start">
				<p class="mb-0">
					<a class="text-muted" target="_blank"><strong>secdoc</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bank Tabungan Negara</strong></a>								&copy;
				</p>
			</div>	
			</div>
			</div>
			</footer>

		</div>
	</div>

  <script src="{{asset('front/js/app.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
  </body>
  </html>