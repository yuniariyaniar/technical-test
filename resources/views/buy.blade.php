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
	

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Create Issue</title>

	<link href="{{asset('front/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Ticket Registry</h1>
							<p class="lead">
								Enter your Identitas in here
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="{{url('save')}}" method="post">
                                    {{ csrf_field() }}

                            

                                    <div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="nama" name="nama" placeholder="enter your name" />
									</div>

                                     <div class="mb-3">
                                        <label for="form-label">Birthday</label>
                                        <input type="date" id="tgl" name="tgl" style="width:200px;" class="form-control" placeholder="date">
                                    </div>

									<div class="mb-3">
										<label class="form-label">Gender</label>
										<select class="form-control" name="gender" id="department" placeholder="gender">
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Pria">Pria</option>
                                            
                                        </select>
									</div>
										
									<div class="text-center mt-3">
                                        <a href="{{url('umum')}}" class="btn btn-lg btn-secondary">Back</a>
										<button type="submit" class="btn btn-lg btn-primary">buy</button> 
									</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>