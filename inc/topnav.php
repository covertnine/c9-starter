<div class="navbar-top" id="topnav">

    <div class="container">
	    <div class="row no-gutters">
		    <div class="col-12 col-md-9">
				<div class="form-linline">
				<?php
					if (!is_user_logged_in()) {
						//echo s2member_pro_login_widget();
						wp_login_form(
							array(
								'remember'       => false,
								'label_username' => __( 'Login' ),
								'label_password' => __( 'Password' ),
								'label_log_in'   => __( 'Login' ),
							)
						);
					}
				?>
				</div>

		    </div><!--end col-->
		    <div class="col-12 col-md-3 text-right">

				<a href="#" class="btn btn-secondary btn-cea topnav-btn-signup"><i class="fa fa-star" aria-hidden="true"></i> Talent Sign Up</a>

		    </div><!--end col-->
	    </div>
    </div>

</div><!--end navbar-top-->
