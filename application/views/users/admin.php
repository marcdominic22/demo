<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Admin Page</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
   		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
		<style type="text/css">

			::selection { background-color: #E13300; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }

			.cont{
				background-color: rgba(255, 255, 255, 0.5);
				max-width:50%;
				margin-bottom: 150px;
				margin-left: auto;
				margin-right: auto;
				border: 1px solid #D0D0D0;
				box-shadow: 0 0 8px #D0D0D0;
				padding: 20px;
				color: #F00;
			}
			table, th, td {
				border: 1px solid black;
			}
			table{
				width: 100%;
			}
			th{
				width:50%;
			}
			.pak:hover {
				background-color: #E13300; 
				color: white;
				}
			
		</style>
		
	</head>
	<body>
	  
		<div class="container bg" data-ibg-bg="<?=base_url()?>admin.jpg">
			<!-- Top Navi -->
			<div class="nav-top clearfix">
				<span class="right"><a class="nav-icon icon-th" href="<?php echo site_url('users/logout') ?>"><span>Logout</span></a></span>
			</div>

			<div class="header">
				<h1>Database Users</h1>
				<div class = "cont">
					<table class = "teburu">
						<tr>
							<th>Player ID</th>
							<th>Username</th>
						</tr>
						<tr class= "pak">
							<td> 1</td>
							<td>Player 1</td>
						</tr>
						<tr class= "pak">
							<td>2</td>
							<td>Player 2</td>
						</tr>
						<tr class= "pak">
							<td>3</td>
							<td>Player 3</td>
						</tr>
					</table>
				
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
