
 
    <!-- Main Content -->
    <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Login</h2>
          <?php echo validation_errors(); ?>
          <?php echo form_open('verifylogin'); ?>
                <input type="text" placeholder="Username" autocomplete="off" name="username">
                <input type="password" placeholder="Password" autocomplete="off" name="password">
              <button class="btn primary" type="submit">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div
