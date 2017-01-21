<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Login|Cosette's Perfume</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
   		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
		<style type="text/css">

			::selection { background-color: #E13300; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }

			.cont{
				background-image: url(<?=base_url()?>img/try.jpg);
				background-color: black;
				background-size: cover;
				max-width:50%;
				margin-bottom: 150px;
				margin-left: auto;
				margin-right: auto;
				border: 1px solid #D0D0D0;
				box-shadow: 0 0 8px #D0D0D0;
				padding: 20px;
				height: 350px;
				color:#E13300
			}
			
			h1{
				font-size: 180px;
				font-family: Segoe Script;
				margin-left: -200px;
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
	<body bgcolor="black">
	  
		<div class="container bg" data-ibg-bg="<?=base_url()?>img/logout.png">
			<!-- Top Navi -->
			<div class="nav-top clearfix">
				<span class="right"><a class="nav-icon icon-th" href="<?php echo site_url('users/index') ?>"><span>Login </span></a></span>
			</div>

			<div class="header">
				
				<h1><center>Good bye</center></h1>
				
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
