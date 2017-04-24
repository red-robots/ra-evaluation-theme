<?php
/**
 * Template Name: Login
 */

get_header("blank"); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="login-form">
                <?php if(isset($_GET['login'])&&$_GET['login']==="failed"):?>
                    <div class="messages">
                        <p>We're sorry that combination isn't valid!</p>
                    </div>
                <?php endif;?>
                <h1>Login</h1>
                <?php RAPostType::wp_login_form( array('redirect' => home_url()) ); ?>
                <h2 class="center">Lost Password</h2>
                <?php if(isset($_GET['login'])&&$_GET['login']==="email"):?>
                    <div class="messages">
                        <p>We just sent you an email that will allow you to reset your password!</p>
                    </div>
                <?php endif;?>
                <form id="forgotform" method="post" action="<?php bloginfo( 'wpurl' ); ?>/wp-login.php?action=lostpassword">
                    <p>
                        <label>Username or E-mail: </label><input type="text" style="margin:10px 0;" size="20" name="user_login"/><br/>
                        <input type="submit" value="Submit" name="Submit"/>
                        <input type="hidden" value="<?php echo home_url('/login/').'?login=email';?>" name="redirect_to"/>
                    </p>
                </form>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
