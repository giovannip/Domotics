<?php echo $this->Session->flash('auth'); ?>
<div id="login-page" class="users form">
    <div class="container">
        <?php echo $this->Form->create('User', array('class' => "form-login")); ?>
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
            <fieldset>
                <input class="form-control" placeholder="User ID" autofocus name="data[User][username]" maxlength="50" type="text" id="UserUsername" required="required">
                <br>
                <input class="form-control" placeholder="Password" name="data[User][password]" type="password" id="UserPassword" required="required">
                <label class="checkbox">
                </label>

                <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
            </fieldset>
        </div>
        </form>
    </div>
</div>