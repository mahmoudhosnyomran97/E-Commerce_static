<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">


				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->