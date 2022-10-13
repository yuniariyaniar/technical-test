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
							<h1 class="h2">E-TICKET</h1>
							<p class="lead">
								prepare a camera, then take a photo/screenshot of this page for evidence at the entrance later
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-6">
								
                    <table class="table align-middle mb-3 bg-white">
  					<thead class="bg-light">
    				<tr>
      					<th>No</th>
                        <th>Birthday</th>
      					<th>Nama</th>
      					<th>Gender</th>
                        <th>Inovice ID</th>
						
   					 </tr>
  					</thead>

  					<tbody>
						@foreach ($dttiket as $item)
    				<tr>
    				  <td>{{ $loop->iteration }}</td> 
					  <td>{{ date('d/m/Y', strtotime($item->tgl)) }}</td>
					  <td>{{ $item->nama }}</td>
                      <td>{{ $item->gender }}</td>
                      <td>{{ $item->custid }}</td>
            
	

					</tr>
					   @endforeach
  					</tbody>
                    </table>
										
									<div class="text-center mt-3">
                                        <a href="{{url('umum')}}" class="btn btn-lg btn-secondary">Back</a>
				
									</div>
									
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