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
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="#" title="Tutorial">Tutorial</a>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Box & offset</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-box</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class is the child of the row class.
									Add the column sizes to this class.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-box-in</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class is the internal content of the column box.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-#{sm/md/lg/sp/mg/ut}-{1-12}</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									These are the column classes.
									You can set the number of columns in the scss file or in the customize form.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-#{sm/md/lg/sp/mg/ut}-offset-{1-12}</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									These are the classes for the space between the columns.
									You can use the percentages or the flex number.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-flex-#{sm/md/lg/sp/mg/ut}-{1-12}</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									These are the column classes with flex size.
									You can set the number of columns in the scss file or in the customize form.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.no-padding</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class eliminates the padding of the .row, .fl-box, .fl-box-in classes.
									If you add this class to the row everything else will be without padding.
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
								<h4>Wrap</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
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
								<h5>.row-reverse</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									The row-reverse class serves to reverse the order of the elements.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.wrap.wrap-reverse</h5>
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
								<a class="link-int doc" href="../tutorial/wrap/" title="Tutorial">Tutorial</a>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Alignments</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.justify-left</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the contents of the row to the left.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.justify-center</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the contents of the row to the center.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.justify-right</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the contents of the row to the right.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.align-top</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns vertically the contents of the row at the top.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.align-center</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns vertically the contents of the row at the center.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.align-bottom</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns vertically the contents of the row at the bottom.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.self-top</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns itself vertically at the top.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.self-center</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns itself vertically at the center.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.self-bottom</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns itself vertically at the bottom.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/alignments/" title="Tutorial">Tutorial</a>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Spacing</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.space-around</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									this class aligns the elements leaving only the space between one box and another.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.space-between</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class distributes the box elements so leaving the space around.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/spacing" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Order</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-#{sm/md/lg/sp/mg/ut}-order-{1-12}</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class attributes the order to the elements. To change the order in mobile first mode, the sm class is indispensable.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/order/" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Positioning & filling</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.position-relative</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class assigns the position relative to the element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.position-absolute</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class assigns the position absolute to the element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.position-fixed</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class assigns the position fixed to the element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.top-left</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class combined with the .position-absolute and .position-fixed classes aligns the top left element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.top-right</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class combined with the .position-absolute and .position-fixed classes aligns the top right element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.bottom-left</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class combined with the .position-absolute and .position-fixed classes aligns the bottom left element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.bottom-right</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class combined with the .position-absolute and .position-fixed classes aligns the bottom right element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fill</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class fills the height and width of the parent element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fill-width</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class fills the width of the parent element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fill-height</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class fills the height of the parent element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fill-vp</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class fills the height and width of the viewport.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fill-vp-h</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class fills the width of the viewport.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fill-vp-v</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class fills the height of the viewport.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.no-padding</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class remove the padding.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.no-margin</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									TThis class remove the margin.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/positioning-filling/" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Images</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.align-left</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the image to the left. If you want to use this class, the .d-block class is mandatory.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.align-center</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the image at the center. If you want to use this class, the .d-block class is mandatory.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.align-right</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the image to the right. If you want to use this class, the .d-block class is mandatory.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.d-block</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class adds the display block property to the element.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/images" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Text</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.text-left</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the text on the left.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.text-center</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the text at the center.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.text-right</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class aligns the text on the right.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.text-justify</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class justify the text.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/text" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Levels</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.z-index-{1-12}</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class adds several levels using the z-index property.
									The number of levels is customizable.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/levels" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Viewport height</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.vph-#{sm/md/lg/sp/mg/ut}-{10-100}</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class attributes the height of the viewport to the element.
									This class is applicable everywhere.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/viewport" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Visibility</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-#{sm/md/lg/sp/mg/ut}-hidden</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class hides the elements based on the size of the window/viewport.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>.fl-#{sm/md/lg/sp/mg/ut}-show</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class shows the elements based on the size of the window/viewport.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/visibility" title="Tutorial">Tutorial</a>
							</div>
						</div>
						
						
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h4>Wireframe</h4>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx"></div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>body#wireframe</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									Adding this id to the body tag the library elements will only appear with the border.
									For each item, you can view the measurement you used for media queries
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>body#wireframe-fill</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This id is like the wireframe id, but the library elements will be colored.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12 fl-md-5 fl-sp-4 fl-mg-3 doc-sx no-border">
								<h5>body#wireframe-fill.border</h5>
							</div>
							<div class="fl-box fl-sm-12 fl-md-7 fl-sp-8 fl-mg-9 doc-dx">
								<p>
									This class adds borders to the wireframe-fill id.
								</p>
							</div>
						</div>
						<div class="row wrap fluid">
							<div class="fl-box fl-sm-12">
								<a class="link-int doc" href="../tutorial/wireframe/" title="Tutorial">Tutorial</a>
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










