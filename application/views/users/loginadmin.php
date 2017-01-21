<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Admin|Cosette's Perfume</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
   		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
		<style type="text/css">

			::selection { background-color: #E13300; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }

			.cont{
				background-image: url(<?=base_url()?>img/adminbg.jpg);
				background-size: cover;
				max-width:50%;
				margin-top: 10px;
				margin-bottom: 150px;
				margin-left: auto;
				margin-right: auto;
				border: 1px solid #D0D0D0;
				box-shadow: 0 0 8px #D0D0D0;
				padding: 20px;
				height: 350px;
				color:#E13300
			}
			#user {
				background-color: rgba(255, 255, 255, 0.5);
				background-image: url(<?=base_url()?>img/user.png);
				background-size: 18px 18px;
				background-repeat: no-repeat;
				padding-left: 26px;
				display: inline-block;
			}
	
			#pass {
				background-color: rgba(255, 255, 255, 0.5);
				background-image: url(<?=base_url()?>img/lock.png);
				background-size: 18px 18px;
				background-repeat: no-repeat;
				padding-left: 26px;
				display: inline-block;
			}
			
		</style>
		
	</head>
	<body>
	  
		<div class="container bg" data-ibg-bg="<?=base_url()?>img/adminbg.jpg">
			<div class="header">
				<a href="<?php echo site_url('users/index') ?>">
					<img src = "<?=base_url()?>logo3.png">
				</a>
				<div class = "cont">
				<h1><center>Admin Login</center></h1>
				<div>
					<form method="POST" action="Login2">
						<h3>
						Username: <input id="user" type="text" name="username" placeholder = "Enter username"><br/><br/>
						Password: &#8202 <input id="pass" type="password" name="password" placeholder = "Enter password"><br/>
						</h3>
					<center><input type="Submit" Value="Login"/><br></center>
					</form>
				</div>
				</div>
					
			</div>

			
    	<div class="main">
			
    	</div>
    	<script type="text/javascript">
        $(".bg").interactive_bg();
      </script>
		</div><!-- Container -->
	</body>
</html>
