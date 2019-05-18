<?php 
session_start();
require_once('../PHP/config.php');
require_once('../PHP/functions.php');
if(isset($_SESSION['name_file']))
{
	header("Location: {$base_url}/PHP/download-customize.php");
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>FLEXO | Customize</title>
	<meta name="viewport"  content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $base_url ?>/dist/css/flexo.min.css" />
	<link rel="stylesheet" href="<?php echo $base_url ?>/dist/css/main.css" />
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
										Customize.
									</h1>
									<h2>
										Create the css file and use it.
									</h2>
								</div>
							</div>
							<div class="fl-box fl-sm-10 fl-md-8">
								<div class="fl-box-in">
									<p>
										Flexo has a simple config file where you can change the basic structure like: 
										number of boxes, transition, container width, padding, etc...
									</p>
								</div>
							</div>
							<?php if(isset($_SESSION['error_input']) && $_SESSION['error_input'] == 1): ?>
							<div class="fl-box fl-sm-10 fl-md-8">
								<div class="fl-box-in">
									<p id="error-customize">Not valid inserted values!</p>
								</div>
							</div>
							<?php endif; ?>
							<div class="fl-box fl-sm-10 fl-md-8">
								<div class="fl-box-in">
									<a id="customize-min" class="link-int <?php echo ($_SESSION['form_customize']['dev_min'] == 'min') ? 'checked' : '' ?>" 
									   href="#" title="Use in distribution">No Wireframe *</a>
									<a id="customize-dev" class="link-int <?php echo ($_SESSION['form_customize']['dev_min'] == 'dev') ? 'checked' : '' ?>" href="#" title="Use in development">Wireframe *</a>
								</div>
							</div>
							<div class="fl-box  fl-sm-12" id="customize">
								<div class="fl-box-in">
									<h3>
										Compile the form and download
									</h3>
									<form method="post" action="../PHP/compiler-scss.php" id="form-customize">
										<input type="hidden" name="dev_min" id="dev-min" <?php csz_sess('dev_min'); ?> />
										<div class="row wrap fluid row-input">
											<div class="fl-box fl-sm-6 fl-lg-2">
												<div class="fl-box-in no-padding">
													<label>Box number *</label>
													<input class="input" type="text" name="box" placeholder="Default is 12" <?php csz_sess('box'); ?>/>
												</div>
											</div>
											<div class="fl-box fl-sm-12">
												<p>Set the page columns number. | <span>Default: 12</span></p>
											</div>
										</div>
										<div class="row wrap fluid row-input">
											<div class="fl-box fl-sm-6 fl-lg-3">
												<div class="fl-box-in no-padding">
													<label>Media query MD*</label>
													<input class="input" type="text" name="media-query-md" placeholder="Default is 780px" <?php csz_sess('media-query-md'); ?>/>
												</div>
											</div>
											<div class="fl-box fl-sm-6 fl-lg-3">
												<div class="fl-box-in no-padding">
													<label>Media query LG *</label>
													<input class="input" type="text" name="media-query-lg" placeholder="Default is 1240px" <?php csz_sess('media-query-lg'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-6 fl-lg-3">
												<div class="fl-box-in no-padding">
													<label>Media query SP *</label>
													<input class="input" type="text" name="media-query-sp" placeholder="Default is 1460px" <?php csz_sess('media-query-sp'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-6 fl-lg-3">
												<div class="fl-box-in no-padding">
													<label>Media query MG *</label>
													<input class="input" type="text" name="media-query-mg" placeholder="Default is 1680px" <?php csz_sess('media-query-mg'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-6 fl-lg-3">
												<div class="fl-box-in no-padding">
													<label>Media query UT *</label>
													<input class="input" type="text" name="media-query-ut" placeholder="Default is 1920px" <?php csz_sess('media-query-ut'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-12">
												<p>Set the breakpoints for devices length. | <span>Default: 780px(md), 1240px(lg), 1460px(sp), 1680px(mg), 1920px(ut) </span></p>
											</div>
										</div>
										<div class="row wrap fluid row-input">
											<div class="fl-box fl-sm-6 fl-lg-4">
												<div class="fl-box-in no-padding">
													<label>Padding box *</label>
													<input class="input" type="text" name="padding-box" placeholder="Default 3px 3px" <?php csz_sess('padding-box'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-6 fl-lg-4">
												<div class="fl-box-in no-padding">
													<label>Padding box in *</label>
													<input class="input" type="text" name="padding-box-in" placeholder="Default is 10px 10px" <?php csz_sess('padding-box-in'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-12">
												<p>Set the padding in fl-box class. | <span>Default: 3px 3px(padding box), 10px 10px(padding box in) </span></p>
											</div>
										</div>
										<div class="row wrap fluid row-input">
											<div class="fl-box fl-sm-4 fl-lg-3 fl-mg-2">
												<div class="fl-box-in no-padding">
													<label>Transition *</label>
													<input id="transition-c" class="input" type="text" name="transition" placeholder="Default 1" <?php csz_sess('transition'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-4 fl-lg-3">
												<div class="fl-box-in no-padding" id="transition-time-c">
													<label>Transition time *</label>
													<input id="transition-time-c-input" class="input" type="text" name="transition-time" placeholder="Default 300ms" <?php csz_sess('transition-time'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-4 fl-lg-3">
												<div class="fl-box-in no-padding" id="transition-ease-c">
													<label>Transition easing *</label>
													<input id="transition-ease-c-input" class="input" type="text" name="transition-easing" placeholder="Default ease-in-out" <?php csz_sess('transition-easing'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-12">
												<p>Set the transition. | <span>Default: transition(1), duration(300ms), easing(ease-in-out)</span></p>
											</div>
										</div>
										<div class="row wrap fluid row-input">
											<div class="fl-box fl-sm-4 fl-lg-3 fl-mg-2">
												<div class="fl-box-in no-padding">
													<label>Overflow X hidden *</label>
													<input class="input" type="text" name="overflow-x" placeholder="Default 1" <?php csz_sess('overflow-x'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-12">
												<p>Set the Overflow X for the body/html tag. | <span>Default: 1</span></p>
											</div>
										</div>
										<div class="row wrap fluid row-input no-border">
											<div class="fl-box fl-sm-6 fl-lg-4 fl-sp-3 fl-mg-2">
												<div class="fl-box-in no-padding">
													<label>Levels z-index *</label>
													<input class="input" type="text" name="level-z-index" placeholder="Default 12" <?php csz_sess('level-z-index'); ?> />
												</div>
											</div>
											<div class="fl-box fl-sm-12">
												<p>Set the number of z-index level. | <span>Default: 12</span></p>
											</div>
										</div>
										<div class="row wrap fluid">
											<div class="fl-box fl-sm-12 text-right">
												<div class="fl-box-in no-padding">
													<input class="input-submit" type="submit" name="submit-customize" value="Download" />
												</div>
											</div>
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
	<?php require_once('../PHP/partial/footer.php') ?>
	<script src="<?php echo $base_url ?>/dist/js/customize.js"></script>
</body>
</html>
