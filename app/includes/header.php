<header>
	<a href="<?php echo BASE_URL .'/index.php'?>" class="logo">
		<h1 class="logo-text"><span>Awa</span>Inspires</h1>
			</a>
			<i class="fa fa-bars menu-toggle"></i>
				<ul class="nav">
					<li><a href="<?php echo BASE_URL .'/index.php'?>">home</a></li>
					<li><a href="<?php echo BASE_URL .'/about.php'?>">About</a>
					</li>
					<li><a href="<?php echo BASE_URL .'/servises.php'?>">Servise</a></li>
				<?php if (isset($_SESSION['id'])): ?>
					
					<li><a href="#">
					<i class="fa fa-user"></i>
					<?php echo $_SESSION['username']; ?>
					<i class="fa fa-chevron-down" style="font-size:.8em;"></i>
					</a>
					<ul>
				<?php if($_SESSION['admin']): ?>
					<li><a href="<?php echo BASE_URL .'/admin/dashboard.php'?>">Dashboard</a></li>
				<?php endif; ?>
					<li><a href="<?php echo BASE_URL .'/logout.php'?>"class="logout">logout </a></li> 
					</ul>  
					</li> 
					<?php else: ?>
					<li><a href="<?php echo BASE_URL .'/register.php'?>"class="signup">Sign up </a></li>
					<li><a href="<?php echo BASE_URL .'/login.php'?>"class="login">login </a></li> 
					<?php endif; ?>

					
				</ul>
</header>
