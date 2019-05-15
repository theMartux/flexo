<?php require_once('PHP/config.php') ?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>FLEXO</title>
	<meta name="viewport"  content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $base_url; ?>/dist/css/flexo.min.css" />
	<link rel="stylesheet" href="<?php echo $base_url; ?>/dist/css/main.css" />
	<link rel="stylesheet" href="<?php echo $base_url; ?>/dist/lib/rainbow/styles/blackboard.css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body>
	<?php require_once('PHP/partial/header.php') ?>
	<main>
		<div class="container fluid">
			<div class="row block">
				<div class="fl-box fl-sm-12 fl-md-10 fl-mg-8 fl-md-offset-1 fl-mg-offset-2">
					<div class="fl-box-in no-padding">
						<div class="row wrap" id="int">
							<div class="fl-box fl-sm-12">
								<div class="fl-box-in">
									<h1>
										Flexo.
									</h1>
									<h2>
										Light css grid and wireframe based on flex property.
									</h2>
								</div>
							</div>
							<div class="fl-box fl-sm-10 fl-md-8">
								<div class="fl-box-in">
									<p>
										Flexo is a lightweight framework for page scaffolding using the css flex property. 
										Flexo helps the developer and designer to create modular web pages quickly.
									</p>
								</div>
							</div>
							<div class="fl-box fl-sm-10 fl-md-12">
								<div class="fl-box-in">
									<a class="link-int" href="<?php echo $base_url; ?>/download/flexo/flexo.zip" title="Download Flexo" download><i class="fas fa-download"></i> Download</a>
									<a class="link-int" href="<?php echo $base_url ?>/customize" title="Customize Flexo"><i class="fas fa-sliders-h"></i> Customize</a>
									<a class="link-int" href="https://github.com/theMartux/flexo" title="Flexo o Github"><i class="fab fa-github"></i> GitHub</a>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Installation
								</h3>
								<h4>
									Use direct link or Download
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Link dev(wireframe intergated)</strong>
								<div class="fill-width box-conatiner-code">
									
<pre>
<code data-language="html">
<link rel="stylesheet" href="http://davidemartucci.it/flexo/dev/css/flexo.css" />
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Link dist(minify)</strong>
								<div class="fill-width box-conatiner-code">
									
<pre>
<code data-language="html">
<link rel="stylesheet" href="http://davidemartucci.it/flexo/dist/css/flexo.min.css" />
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h4>
									Use dependence
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>NPM</strong>
								<div class="fill-width box-conatiner-code">
									
<pre>
<code data-language="html">
npm install @the_martux/flexo -D
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>YARN</strong>
								<div class="fill-width box-conatiner-code">
									
<pre>
<code data-language="html">
yarn add @the_martux/flexo -D
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Basic elements
								</h3>
								<h4>
									There are five elements that build the grid.<br />
									<strong>Container</strong>: this element contains all the rows and can have a fixed or fluid length.<br />
									<strong>Row</strong>: contains the box and can have a fixed or fluid length.<br />
									<strong>Box</strong>: this element is the grid cell. can be fixed or flexible.<br />
									<strong>Box in</strong>: is the contents of the cell. Here it is possible to insert other grids.<br />
									<strong>Flex</strong>: is the basic flex property.<br />
									<strong>Emmet</strong>:div.container.fluid>div.row.wrap>div.fl-box.fl-sm-12>div.fl-box-in{content}
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<div class="fill-width box-conatiner-box">
									<div class="container fluid">
										<div class="row fluid">
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-1">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-5">
												<div class="fl-box-in">
													3
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													4
												</div>
											</div>
										</div>
										<div class="row fluid">
											<div class="fl-box fl-flex-sm-1 fl-flex-md-3">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-flex-sm-1 fl-flex-md-2">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-flex-sm-5 fl-flex-md-3">
												<div class="fl-box-in">
													3
												</div>
											</div>
											<div class="fl-box fl-flex-sm-7 fl-flex-md-5">
												<div class="fl-box-in">
													4
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Use no padding</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row no-padding fluid">
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													No padding
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													No padding
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													No padding
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Use no padding in fl-box-in</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row  fluid">
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in  no-padding">
													No padding in
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
									
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid">
      <div class="fl-box fl-sm-10 fl-md-8 fl-lg-4 fl-sp-3 fl-mg-2 fl-ut-1">
         <div class="fl-box-in">
           Use %
         </div>
      </div>
   </div>
   <div class="row fluid">
      <div class="fl-box  fl-flex-sm-1 fl-flex-md-3">
         <div class="fl-box-in">
           Use flex
         </div>
      </div>
   </div>
</div>
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12">
							<div class="fl-box-in">
								<h3>
									Offset box
								</h3>
								<h4>
									
									With offsets you can separate the boxes for the elements with the percentage and flex elements.<br />
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<div class="fill-width box-conatiner-box">
									<div class="container fluid">
										<div class="row fluid">
											<div class="fl-box fl-sm-3 fl-mg-2">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-3 fl-mg-4 fl-sm-offset-2 fl-mg-offset-4">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4 fl-mg-2">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
										<div class="row fluid">
											<div class="fl-box fl-flex-sm-1 fl-flex-mg-2">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-flex-sm-6 fl-flex-mg-4 fl-sm-offset-2 fl-mg-offset-4">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-flex-sm-4 fl-flex-mg-5">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid">
      <div class="fl-box fl-sm-3 fl-mg-2">
         <div class="fl-box-in">
           Offset %
         </div>
	  </div>
      <div class="fl-box fl-sm-3 fl-mg-4 fl-sm-offset-2 fl-mg-offset-4">
         <div class="fl-box-in">
           2
         </div>
      </div>
   </div>
   <div class="row fluid">
      <div class="fl-box fl-flex-sm-1 fl-flex-mg-2">
         <div class="fl-box-in">
            1
         </div>
      </div>
      <div class="fl-box fl-flex-sm-6 fl-flex-mg-4 fl-sm-offset-2 fl-mg-offset-4">
         <div class="fl-box-in">
            2
         </div>
      </div>
   </div>
</div>
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Align, justification and spacing
								</h3>
								<h4>
									With this grid it is possible to align, justify and position the elements inside the row
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<h5>Justify center</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid justify-center">
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Justify right</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid justify-right">
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Space around</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid space-around">
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Space between</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid space-between">
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-3">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Align center</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid align-center" style="min-height: 150px">
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Align bottom</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid align-bottom height-fix" >
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Align self box</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid height-fix">
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-4  self-center">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4  self-bottom">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid space-around">
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
           1
         </div>
	  </div>
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
           2
         </div>
      </div>
	  <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
           3
         </div>
      </div>
   </div>
   <div class="row fluid align-center height-fix">
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
            1
         </div>
      </div>
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
            2
         </div>
      </div>
	  <div class="fl-box fl-sm-4 self-bottom">
         <div class="fl-box-in">
            3
         </div>
      </div>
   </div>
</div>
<!-- !!! use min-height in row if you use the vertical align !!!-->
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Order and reverse
								</h3>
								<h4>
									With the order class you can choose the order of the boxes based on the width of the device.
                                    Works well with the fl-flex class.<br />
									With the row-reverse class it is possible to invert the arrangement of the boxes.
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<h5>Order box</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid">
											<div class="fl-box fl-sm-4 fl-sm-order-1  fl-mg-order-2">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-4 fl-sm-order-2  fl-mg-order-3">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4 fl-sm-order-3   fl-mg-order-1">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5>Reverse</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row row-reverse fluid">
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid">
      <div class="fl-box fl-sm-4 fl-sm-order-1  fl-mg-order-2">
         <div class="fl-box-in">
            1
         </div>
      </div>
      <div class="fl-box fl-sm-4 fl-sm-order-2  fl-mg-order-3">
         <div class="fl-box-in">
            2
         </div>
      </div>
      <div class="fl-box fl-sm-4 fl-sm-order-3   fl-mg-order-1">
         <div class="fl-box-in">
            3
         </div>
      </div>
   </div>
   <div class="row row-reverse fluid">
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
            1
         </div>
      </div>
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
            2
         </div>
      </div>
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
            3
         </div>
      </div>
   </div>
</div>
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Position rules
								</h3>
								<h4>
									Set the position property on element. <br />
									The fixed position has the same logic as the absolute position but works as the default rule of the fixed property.
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<div class="fill-width box-conatiner-box">
									<div class="container fluid">
										<div class="row fluid">
											<div class="fl-box fl-sm-12">
												<div class="fl-box-in no-padding" style="height: 200px">
													<div class="position-relative fill-height text-center" >
														Position relative
														<div class="position-absolute top-left absolute-ex">
															Position absolute top-left
														</div>
														<div class="position-absolute top-right absolute-ex" >
															Position absolute top-right
														</div>
														<div class="position-absolute bottom-left absolute-ex" >
															Position absolute bottom-left
														</div>
														<div class="position-absolute bottom-right absolute-ex" >
															Position absolute bottom-left
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid">
      <div class="fl-box fl-sm-3 fl-mg-2">
         <div class="fl-box-in no-padding" style="height: 200px">
            <div class="position-relative fill-height text-center" >
                 Position relative
               <div class="position-absolute top-left absolute-ex">
                 Position absolute top-left
               </div>
               <div class="position-absolute top-right absolute-ex" >
                 Position absolute top-right
               </div>
               <div class="position-absolute bottom-left absolute-ex" >
                 Position absolute bottom-left
               </div>
               <div class="position-absolute bottom-right absolute-ex" >
                 Position absolute bottom-left
               </div>
            </div>
        </div>
	  </div>
   </div>
</div>
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Z index
								</h3>
								<h4>
									With the z-index class you can choose which elements are above and which are below.<br />
									The z-index classes are created in the config.scss file configuration
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<div class="fill-width box-conatiner-box">
									<div class="container fluid">
										<div class="row  wrap fluid">
											<div class="fl-box fl-sm-12 fl-lg-6">
												<div class="fl-box-in overflow-hidden" style="height: 200px;">
													<div class="position-relative fill-width" >
														<div class="position-absolute absolute-ex" style="width: 200px;top: 30px;left: 50px">
															z-index 1
														</div>
														<div class="position-absolute absolute-ex" style="width: 200px;top: 70px;left: 100px;background-color: darkorchid">
															z-index 2
														</div>
														<div class="position-absolute absolute-ex" style="width: 200px;top: 110px;left: 150px;background-color: yellowgreen">
															z-index 3
														</div>
													</div>
												</div>
											</div>
											<div class="fl-box fl-sm-12 fl-lg-6">
												<div class="fl-box-in overflow-hidden" style="height: 200px;">
													<div class="position-relative fill-width" >
														<div class="position-absolute absolute-ex z-index-2" style="width: 200px;top: 30px;left: 50px">
															z-index 2
														</div>
														<div class="position-absolute absolute-ex z-index-1" style="width: 200px;top: 70px;left: 100px;background-color: darkorchid">
															z-index 1
														</div>
														<div class="position-absolute absolute-ex  z-index-0" style="width: 200px;top: 110px;left: 150px;background-color: yellowgreen">
															z-index 0
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid">
      <div class="fl-box fl-sm-12">
         <div class="fl-box-in" style="height: 200px;">
            <div class="position-relative fill-width" >
               <div class="position-absolute absolute-ex z-index-2" style="width: 200px;top: 30px;left: 50px">
	              z-index 2
               </div>
               <div class="position-absolute absolute-ex z-index-1" style="width: 200px;top: 70px;left: 100px;background-color: darkorchid">
	              z-index 1
               </div>
               <div class="position-absolute absolute-ex  z-index-0" style="width: 200px;top: 110px;left: 150px;background-color: yellowgreen">
	              z-index 0
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</code>
</pre>
								</div>
							</div>
						</div>
						<div class="fl-box  fl-sm-12" >
							<div class="fl-box-in">
								<h3>
									Visibility
								</h3>
								<h4>
									With this class you can choose when to hide a fl-box element
								</h4>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<h5>The second div is visible for large and super</h5>
								<div class="fill-width box-conatiner-box another">
									<div class="container fluid">
										<div class="row fluid justify-center">
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													1
												</div>
											</div>
											<div class="fl-box fl-sm-4 fl-sm-hidden fl-lg-show fl-mg-hidden  fl-ut-hidden">
												<div class="fl-box-in">
													2
												</div>
											</div>
											<div class="fl-box fl-sm-4">
												<div class="fl-box-in">
													3
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fl-box fl-sm-12" >
							<div class="fl-box-in">
								<strong>Example:</strong>
								<div class="fill-width box-conatiner-code">
<pre>
<code data-language="html">
<div class="container fluid">
   <div class="row fluid justify-center">
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
            1
         </div>
      </div>
      <div class="fl-box fl-sm-4 fl-sm-hidden fl-lg-show fl-mg-hidden  fl-ut-hidden">
         <div class="fl-box-in">
           large and super are visibles;
         </div>
      </div>
      <div class="fl-box fl-sm-4">
         <div class="fl-box-in">
           3
         </div>
      </div>
   </div>
</div>
</code>
</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php require_once('PHP/partial/footer.php') ?>
	<script src="<?php echo $base_url; ?>/dist/lib/rainbow/rainbow-custom.min.js"></script>
</body>
</html>










