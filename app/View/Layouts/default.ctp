<?php
    $cakeDescription = __d('cake_dev', 'HP Data Collector : Global Sourcing Module');
    $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
<?php
	echo $this->Html->meta('icon');
        
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('metisMenu.min');
	echo $this->Html->css('sb-admin-2');
        echo $this->Html->css('timeline');
        echo $this->Html->css('morris');
	echo $this->Html->css('font-awesome.min');
	echo $this->Html->css('bootstrap-fileupload');
	echo $this->Html->css('jcarousel.connected-carousels');
        
	echo $this->Html->script('jquery-2.1.1.min');
	echo $this->Html->script('jquery.jcarousel.min.js');
	echo $this->Html->script('jcarousel.connected-carousels');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('metisMenu.min');
	echo $this->Html->script('sb-admin-2');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>
	
<style type="text/css">
body {
	background-image: url(/img/banner--themeforest-342995208860d6c90b98134db089ef84.jpg);
	background-attachment: fixed;
	background-repeat: no-repeat;
}
</style>
</head>

<body>
	
	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top apanal" role="navigation" style="margin-bottom: 0">
			<img src="/img/logo.png" WIDTH=auto; HEIGHT=54px href="/AssetInformations/index">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> </button>

			<!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-right">
				
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle icontop" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
					<ul class="dropdown-menu dropdown-user">
                                               <?php $currentUser = $this->Session->read('Auth.User');?>
						<li><a href="/Users/view/<?php echo $currentUser['id']; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a> </li>
						<li><a href="Users/edit/<?php echo $currentUser['id']; ?>"><i class="fa fa-gear fa-fw"></i> Settings</a> </li>
						<li class="divider"></li>
						<li><a href="/Users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
					</ul>
				</li>
				<!-- /.dropdown-user --> 

			</ul>
                        
			<?php echo $this->element('menu'); ?>

		</nav>


			<!-- Navigation -->


			<div id='page-wrapper'>
				<div class="container-fluid">

					<?php echo $this->Session->flash(); ?>


					<?php echo $this->fetch('content'); ?>

					<div class="row">
						<a href="javascript:void(null)" onclick="$('.cake-sql-log').toggle()">...</a>
						<?php echo $this->element('sql_dump'); ?>
					</div>

				</div>
			</div>
		</div>

		<form name="frmProductSearch" method="post">
			<input type="hidden" name="data[Product][text_search]" value="">
		</form>
	</body>
</html>
