<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="row" style="margin-top: 20px;  text-align:center;">
	<div class="col-xs-1 col-md-4">&nbsp;</div>
	<div class="col-xs-10 col-md-4">
		<div class="text-center" style="margin-top: 20px;  text-align:center;">
			<img class="img-responsive" src="<?php echo base_url('assets/images/pos_logo_1.png')?>">
		</div>
		<div class="text-center" style="margin-top: 20px;">
			<h1>Dashboard</h1>
		</div>
		<div class="text-center" style="margin-top: 30px;">
			<a href="<?php echo base_url('welcome/logout');?>"><span type="button" class="btn btn-danger btn-lg btn-block" id="btn_logout">Logout</span></a>
		</div>		
	</div>	
</div>
