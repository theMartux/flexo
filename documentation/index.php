<?php require_once('../PHP/config.php') ?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>FLEXO | Documentation</title>
	<meta name="viewport"  content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="../dist/css/flexo.min.css" />
	<link rel="stylesheet" href="../dist/css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body>
	<?php require_once('../PHP/partial/header.php') ?>
	<main>
		<div class="container fluid">
			<div class="row wrap block">
				<div class="fl-box fl-sm-12 fl-md-10 fl-mg-8 fl-md-offset-1 fl-mg-offset-2">
					<div class="fl-box-in no-padding">
						<div class="row wrap" id="int">
							<div class="fl-box fl-sm-12">
								<div class="fl-box-in">
									<h1>
										Documentation.
									</h1>
									<h2>
										Read the documentation to better use Flexo.
									</h2>
								</div>
							</div>
							<div class="fl-box fl-sm-10 fl-md-8">
								<div class="fl-box-in">
									<p>
										The documentation allows you to better understand how to use Flexo classes. 
										Watch the tutorials to learn more.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row justify-center block">
				<div class="fl-box  fl-sm-12 fl-mg-10 fl-ut-8" id="documentation">
					<div class="fl-box-in">
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5  fl-sp-4 fl-mg-3 doc-sx">
								<h3>Reference</h3>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<h3>Description</h3>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Tag</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5  fl-sp-4 fl-mg-3 doc-sx">
								<h5>body, html</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									These tags have no padding and no margin. They have max width = 100vw  and min height = 100%.<br />
									If you set the overflow = 1 then everything that exceeds 100vw will be hidden.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Container & row</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.container</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									The container is used to contain rows and columns.
									This class has the width set to 100% always.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.container.fluid</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									When the width is equal to the size of 'mg' the container is set for this dimension.<br />
									You can make this class fluid by using the .fluid class.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.row</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									The row is used to contain flex box item.
									This class has the width set to 100% always.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.row.fluid</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									When the width is equal to the size of 'mg' the row class is set for this dimension.<br />
									You can make this class fluid by using the .fluid class.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.row.wrap</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class breaks the continuity of the flex elements.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.row.wrap.row-reverse</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									The row-reverse class serves to reverse the order of the elements.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.row.wrap.wrap-reverse</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									The wrap-reverse class serves to reverse the order of the wrap elements.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.row.wrap.row-reverse.wrap-reverse</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									In this way you can invert both the order of the elements and the order of the wrap elements.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="#" title="Tutorial">Tutorial</a>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Container & row</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.container</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									The container is used to contain rows and columns.
									This class has the width set to 100% always.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<?php require_once('../PHP/partial/footer.php') ?>
	<script src="../dist/js/customize.js"></script>
</body>
</html>










