<?php require_once('../PHP/config.php') ?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>FLEXO | Wireframe</title>
	<meta name="viewport"  content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="../dev/css/flexo.css" />
	<link rel="stylesheet" href="../dist/css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body id="" class="">
	<?php require_once('../PHP/partial/header.php') ?>
	<main>
		<div class="container fluid">
			<div class="row block">
				<div class="fl-box fl-sm-12 fl-md-10 fl-mg-8 fl-md-offset-1 fl-mg-offset-2">
					<div class="fl-box-in no-padding">
						<div class="row wrap" id="int">
							<div class="fl-box fl-sm-12">
								<div class="fl-box-in">
									<h1>
										Wireframe
									</h1>
									<h2>
										Scaffolding and wireframe first of all :)
									</h2>
								</div>
							</div>
							<div class="fl-box fl-sm-10 fl-md-8">
								<div class="fl-box-in">
									<p>
										With flexo you can use the wireframe and check the boxes you use during the changing of the device lengths.
										You should add the wireframe id in the body tag.
									</p>
								</div>
							</div>
							<div class="fl-box fl-sm-12">
								<div class="fl-box-in">
									<a class="link-int" href="#" title="Download Flexo"  id="btn-wireframe" >Wireframe</a>
									<a class="link-int" href="#" title="" id="btn-wireframe-fill" >Wireframe-fill</a>
									<a class="link-int" href="#" title="" id="btn-wireframe-fill-border" >Wireframe-fill + border</a>
									<a class="link-int" href="#" title="" id="btn-wireframe-clean" >Clean</a>
								</div>
							</div>
							<div class="fl-box fl-sm-12" >
								<div class="fl-box-in">
									<div class="fill-width box-conatiner-box">
										<div class="container fluid" id="container-ex">
											<div class="row fluid" >
												<div class="fl-box fl-sm-6 fl-lg-4">
													<div class="fl-box-in">
														A
													</div>
												</div>
												<div class="fl-box fl-sm-6 fl-lg-2">
													<div class="fl-box-in">
														B
													</div>
												</div>
												<div class="fl-box fl-sm-7 fl-lg-3">
													<div class="fl-box-in">
														C
													</div>
												</div>
												<div class="fl-box fl-sm-5 fl-lg-3">
													<div class="fl-box-in">
														D
													</div>
												</div>
											</div>
											<div class="row fluid">
												<div class="fl-box fl-flex-sm-6 fl-flex-sp-8">
													<div class="fl-box-in">
														flex A
													</div>
												</div>
												<div class="fl-box fl-flex-sm-6 fl-flex-sp-3">
													<div class="fl-box-in">
														flex B
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="../dist/js/wireframe.js"></script>
</body>
</html>










