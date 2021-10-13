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
		<span type="button" class="btn btn-primary btn-lg btn-block" id="show_login">Login</span>
	</div>

	<div class="form-group">
		<img src="<?php echo base_url('assets/images/users/no_image.png');?>" id="user_avatar" alt="user_avatar" class="img-circle" style="display: none;">
	</div>
		<form id="login_form" style="display: none;">
			<div class="form-group">
				<span id="branch_nm" style="display: none;"> </span>
			  	<input type="text" class="form-control" id="branch_id" placeholder="...Branch ID...">
			</div>
			<div class="form-group">
				<span id="user_nm" style="display: none;"> </span>
			  	<input type="text" class="form-control" id="user_name" placeholder="...User Name..." style="display: none;">
			</div>
			<div class="form-group">
			  	<input type="password" class="form-control" id="user_pass" placeholder="...Password..." style="display: none;">
			</div>

			<p>
			  <span type="button" class="btn btn-default" id="back1" style="display: none;">BACK</span>
			  <span type="button" class="btn btn-success" id="next1" style="display: none;">NEXT</span>
			  <span type="button" class="btn btn-default" id="back2" style="display: none;">BACK</span>
			  <span type="button" class="btn btn-success" id="next2" style="display: none;">NEXT</span>
			  <span type="button" class="btn btn-default" id="back3" style="display: none;">BACK</span>
			  <span type="button" class="btn btn-success" id="next3" style="display: none;">LOGIN</span>
			</p>
		</form>  			
	</div>
	<div class="col-xs-1 col-md-4"></div>

</div>












<script src="<?php echo base_url('/assets/js/login.js?r='.rand());?>"></script>