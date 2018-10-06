<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | 404 Page Option 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for 404 page option 1" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>/assets/pages/css/error.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url();?>/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url();?>/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
		
		<?php include("header.php"); ?>
		<!-- BEGIN CONTAINER -->
           <div class="page-container">
			<?php include("side_bar.php"); ?>
			<?php #print_r($edit_member_list[0]); exit;?>
			
			<form action="<?php echo base_url();?>/index.php/home/addPersonalDetails" class="form-horizontal" id="form_sample_1" novalidate="novalidate" method='post' enctype="multipart/form-data">
			<input type='hidden' name="member_id_hidden" <?php if(isset($edit_member_list[0]['id'])) {?> value="<?php echo $edit_member_list[0]['id']; }?>" />
									<div>
										<div class="form-body">
											<div class="alert alert-danger display-hide">
												<button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Name
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" name="name" <?php if(isset($edit_member_list[0]['name'])) {?> value="<?php echo $edit_member_list[0]['name']; }?>">
                                                        <div class="form-control-focus"> </div>
                                                        <span class="help-block">enter your full name</span>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Email
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" name="email_id" <?php if(isset($edit_member_list[0]['email_id'])) {?> value="<?php echo $edit_member_list[0]['email_id']; }?>">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Number
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" name="number" <?php if(isset($edit_member_list[0]['number'])) {?> value="<?php echo $edit_member_list[0]['number']; }?>">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Member ID
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" name="member_id" <?php if(isset($edit_member_list[0]['member_id'])) {?> value="<?php echo $edit_member_list[0]['member_id']; }?>">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Password
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
													<div class="col-md-9">
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" placeholder="Password" name="password" <?php if(isset($edit_member_list[0]['password'])) {?> value="<?php echo $edit_member_list[0]['password']; }?>">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                    </div>
												</div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Role</label>
														<div class="col-md-9">
														<div class="input-group col-md-9">
															<select class="form-control" name="role">
																<option value="level_1">Level 1</option>
																<option value="level_2">Level 2</option>
																<option value="level_3">Level 3</option>
																<option value="level_4">Level 4</option>
															</select>
                                                        </div>
														</div>
												</div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Address</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="address" rows="3"> <?php if(isset($edit_member_list[0]['address'])) { echo $edit_member_list[0]['address']; }?></textarea>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-radios">
                                                    <label class="col-md-3 control-label" for="form_control_1">Gender</label>
                                                    <div class="col-md-9">
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="checkbox1_8" name="gender" value="male" class="md-radiobtn" <?php if(isset($edit_member_list[0]['gender'])) { if($edit_member_list[0]['gender'] == 'male'){?> checked="checked" <?php }}?>">
                                                                <label for="checkbox1_8">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Male </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="checkbox1_9" name="gender" value="female" class="md-radiobtn" <?php if(isset($edit_member_list[0]['gender'])) { if($edit_member_list[0]['gender'] == 'female'){?> checked="checked" <?php }}?>">
                                                                <label for="checkbox1_9">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Female </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green"><?php if(isset($edit_member_list[0]['name'])){?> Update <?php } else {?> Submit <?php }?> </button>
                                                        <button type="reset" class="btn default">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
										</div>
									</form>
								</div>
		<?php include("footer.php"); ?>
		
		
		<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
		               
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url();?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>