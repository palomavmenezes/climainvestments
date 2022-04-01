<?php 
    /* Template Name: Sign in */

    // Sign up
    if ( isset( $_POST['action'] ) && $_POST['action'] == 'sign-up' ) {
        $response = clima_signup( $_POST );
    }

    // Recover password
    if ( isset( $_POST['action'] ) && $_POST['action'] == 'reset_pwd' ) {
        $response = clima_recover_password( $_POST );
    }

    $action = $_POST['action'];

    global $login_error;
?>

<?php get_header() ?>

<main id="sign-in">

    <style>
        
        #login-form,
        #reset-pwd-form {
            display: none;
        }

        #login-form.show,
        #reset-pwd-form.show {
            display: flex;
        }
    </style>

<section id="forms-login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-white">
                <div class="row">
                    <h3>Welcome</h3>
                </div>

                <form class="row <?= ($action == 'login' || is_null( $action )) ? 'show' : '' ?>" method="post" action="" id="login-form" >
                    <?php if ( is_array( $login_error ) && isset( $login_error['status'] )  && $login_error['status'] == false && $action == 'login' ): ?>
                        <div class="alert alert-danger row" role="alert">
                            <?php if ( is_array( $login_error['message'] ) ): ?>
                                <?php foreach ( $login_error['message'] as $error ): ?>
                                    <strong style="margin-right: 5px">Error: </strong> <?=  $error ?>
                                <?php endforeach ?>
                            <?php else: ?>
                                <strong style="margin-right: 5px">Error: </strong> <?= $login_error['message'] ?>
                            <?php endif ?>
                        </div>
                    <?php endif ?>

                    <div class="col-md-12">
                        <input type="email" id="login_email" name="login_email" class="form-sign-in" placeholder="Email">
                    </div>

                    <div class="col-md-12">
                        <input type="password" id="login_password" name="login_password" class="form-sign-in" placeholder="Password">
                    </div>

                    <div class="col-md-12">
                        <a href="javascript:void(0)" id="forgot_pwd_btn">Forgot password?</a>
                    </div>

                    <input type="hidden" name="action" value="login">

                    <div class="col-md-12">
                        <input type="submit" class="btn-sign-in" value="Sign in">
                    </div>
                </form>

                <form class="row <?= $action == 'reset_pwd' ? 'show' : '' ?>" method="post" action="" id="reset-pwd-form">
                    <div class="col-12">
                        <?php if ( is_array( $response ) && isset( $response['status'] ) && $action == 'reset_pwd' ): ?>
                            <?php if ( $response['status'] ): ?>
                                <div class="alert alert-success row" role="alert">
                                    <?= $response['message'] ?>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-danger row" role="alert">
                                    <strong style="margin-right: 5px">Error: </strong> <?= $response['message'] ?>
                                </div>
                            <?php endif ?>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-12">
                        <input type="email" id="recover_email" name="recover_email" class="form-sign-in" placeholder="Email">
                    </div>

                    <div class="col-md-12">
                        <a href="javascript:void(0)" id="login_btn">Login</a>
                    </div>

                    <input type="hidden" name="action" value="reset_pwd">

                    <div class="col-md-12">
                        <input type="submit" class="btn-sign-in" value="Reset password">
                    </div>
                </form>
            </div>

            <div class="col-md-6 bg-white">
                <form action="" method="post" id="register-form">
                    <?php if ( is_array( $response ) && isset( $response['status'] )  && $response['status'] == false && $action == 'sign-up' ): ?>
                        <div class="alert alert-danger row" role="alert">
                            <?php if ( is_array( $response['message'] ) ): ?>
                                <?php foreach ( $response['message'] as $error ): ?>
                                    <strong style="margin-right: 5px">Error: </strong> <?=  $error ?>
                                <?php endforeach ?>
                            <?php else: ?>
                                <strong style="margin-right: 5px">Error: </strong> <?= $response['message'] ?>
                            <?php endif ?>
                        </div>
                    <?php endif ?>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>New here?</h3>
                            <p>Sign up to our platform and learn about the companies that can decarbonise the planet.</p>
                            <p>We want to build a community of individuals that want to invest for green impact. Please tell us just a bit about yourself.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label class="title-form">Year of birth</label>
                            <input type="date" id="date" name="date_of_birth" class="form-sign-in" value="<?= old( 'date_of_birth' ) ?>">
                        </div>

                        <div class="col-md-12">
                            <input type="text" id="where-you-live" name="address" class="form-sign-in" placeholder="Where you live?" value="<?= old( 'address' ) ?>">
                        </div>

                        <div class="col-md-12">
                            <div><label class="title-form">Primary Interest</label></div>
                            <div class="form-check form-check-inline">
                            
                            <input class="form-check-input" type="checkbox" id="climatechange" name="interests[]" value="Climate change" <?= ( old( 'interests' ) &&  in_array( 'Climate change', old( 'interests' ) ) ) ? 'checked' : '' ?>>
                            
                            <label class="form-check-label" for="climatechange">Climate change</label>
                            </div>

                            <div class="form-check form-check-inline">
                            
                            <input class="form-check-input" type="checkbox" id="stockpicking" name="interests[]" value="Stock picking" <?= ( old( 'interests' ) &&  in_array( 'Stock picking', old( 'interests' ) ) ) ? 'checked' : '' ?>>
                            
                            <label class="form-check-label" for="stockpicking">Stock picking</label>
                            </div>

                            <div class="form-check form-check-inline">
                            
                            <input class="form-check-input" type="checkbox" id="bothequally" name="interests[]" value="Both equally" <?= ( old( 'interests' ) &&  in_array( 'Both equally', old( 'interests' ) ) ) ? 'checked' : '' ?>>
                            
                            <label class="form-check-label" for="bothequally">Both equally</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="title-form">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                            <option value="Male" <?= ( old( 'gender' ) && old( 'gender' ) == 'Male' ) ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= ( old( 'gender' ) && old( 'gender' ) == 'Female' ) ? 'selected' : '' ?>>Female</option>
                            <option value="Other" <?= ( old( 'gender' ) && old( 'gender' ) == 'Other' ) ? 'selected' : '' ?>>Other</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <h6>Great, now onto your Login and Password.</h6>
                        </div>

                        <div class="col-md-12">
                            <input type="email" id="email" name="email" class="form-sign-in" placeholder="Email" value="<?= old( 'email' ) ?>">
                        </div>

                        <div class="col-md-12">
                            <input type="email" id="email" name="email-confirmation" class="form-sign-in" placeholder="Please type it again to confirm" value="<?= old( 'email-confirmation' ) ?>">
                        </div>

                        <div class="col-md-12">
                            <input type="password" id="password" name="password" class="form-sign-in" placeholder="Please create a password">
                        </div>

                        <div class="col-md-12">
                            <input type="password" id="password" name="password-confirmation" class="form-sign-in" placeholder="Please confirm the password">
                        </div>

                        <div class="col-md-12">
                            <div><label class="title-form">Please read and confirm that you are happy with our <a href="<?php get_site_url(); ?>/terms-and-conditions-user" target="_blank">Terms & Conditions</a> for the use of the platform</label></div>
                            <div class="form-check form-check-inline">

                            <input class="form-check-input" type="checkbox" name="terms" id="confirmyes" value="yes" <?= ( old( 'terms' ) && old( 'terms' ) == 'yes' ) ? 'checked' : '' ?>>

                            <label class="form-check-label" for="confirmyes">Yes</label>
                            </div>

                            <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="confirmno" value="option2">
                            <label class="form-check-label" for="confirmno">No</label>
                            </div> -->
                        </div>

                        <?php if ( is_array( $response ) && isset( $response['status'] )  && $response['status'] == true && $action == 'sign-up' ): ?>
                            <div class="col-md-12">
                                <h6 style="margin-top: 2rem;">Amazing! Thank you for joining Clima Investments. Please talk to us about what information you would like to see more, what companies you are keen on, and any questions you may have on how the companies in our universe can decarbonise the planet.</h6>
                            </div>
                        <?php endif; ?>

                        <input type="hidden" name="action" value="sign-up">
                        <div class="col-md-12">
                            <input type="submit" value="Sign up" class="btn-sign-in">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<?php if ( is_array( $response ) && isset( $response['status'] )  && $response['status'] == true ): ?>
    <script type="text/javascript">
        (function($) {
            $(':input', 'form')
              .not(':button, :submit, :reset, :hidden')
              .val('')
              .removeAttr('checked')
              .removeAttr('selected');    
        })(jQuery);
    </script>
<?php endif ?>

<script type="text/javascript">
    (function($) {
        $('#forgot_pwd_btn, #login_btn').on('click', function() {
            console.log('here');
            $('#login-form').toggleClass('show');
            $('#reset-pwd-form').toggleClass('show');
        });
    })(jQuery);
</script>