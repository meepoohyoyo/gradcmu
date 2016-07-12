
<div class="container">

        <div class="row">
            <div class="box">
              <div class="login-form">
                <h2>Login</h2>
                <?php echo validation_errors(); ?>
                <?php echo form_open('verifylogin'); ?>
                <input type="text" placeholder="Username" autocomplete="off" name="username">
                <br><input type="password" placeholder="Password" autocomplete="off" name="password"></br>
                <br><button class="btn primary" type="submit">Sign in</button></br>
              </div>
            </div>
       </div>
</div>
