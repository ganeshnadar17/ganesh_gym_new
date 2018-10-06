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
			<?php #print_r($allPlansList[0]); exit;?>
			
			<form action="<?php echo base_url();?>/index.php/home/addTariffPlan" class="form-horizontal" id="form_sample_1" novalidate="novalidate" method='post' enctype="multipart/form-data">
			<!-- <input type='hidden' name="plan_id" <?php #if(isset($plan_data[0]['id'])) {?> value="<?php #echo $plan_data[0]['id']; }?>" /> -->
									<div>
										<div class="form-body">
											<div class="alert alert-danger display-hide">
												<button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button> Your form validation is successful! </div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Select Plan
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-6">
														<select class="form-control" name="plan_id">
															<?php foreach($allPlansList as $value) { ?>
															<option value="<?php echo $value['id']; ?>"><?php echo $value['plan_name'];?></option>
															<?php }?>
														</select>
                                                    </div>
                                                </div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Duration
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-6">
														<select class="form-control" name="duration">
															<option value="1">1 Months</option>
															<option value="3">3 Months</option>
															<option value="6">6 Months</option>
															<option value="12">12 Months</option>
														</select>
													</div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Price
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="" name="price" <?php #if(isset($plan_data[0]['plan_code'])) {?> value="<?php #echo $plan_data[0]['plan_code']; }?>">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Offer </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="" name="offer" <?php #if(isset($plan_data[0]['plan_code'])) {?> value="<?php #echo $plan_data[0]['plan_code']; }?>">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
												<div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Notes
                                                        <span class="required" aria-required="true">*</span>
                                                    </label>
                                                    <div class="col-md-6">
														<textarea class="form-control" rows="3" placeholder="" name="notes"></textarea>
                                                        <!--<input type="text" class="form-control" placeholder="" name="plan_code" <?php #if(isset($plan_data[0]['plan_code'])) {?> value="<?php #echo $plan_data[0]['plan_code']; }?>">-->
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
												
												
												
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green"><?php if(isset($plan_data[0]['plan_code'])){?> Update <?php } else {?> Submit <?php }?> </button>
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