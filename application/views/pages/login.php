<div class="login-background">
    <div class="sidenav">
        <div class="login-main-text">
            <div class="logo-login"><img src="<?php echo base_url() ?>assets/img/logo-damri.png" alt="logo-damri"></div>
            <h1>Content Management System</h1>
            <p>Login here to access content management system.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="<?php echo base_url('login/actionLogin'); ?>" method="post">
                    <div class="form-group">
                        <label for="form-username">Username</label>
                        <input type="text" name="username" class="form-control" id="form-username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="form-password">Password</label>
                        <input type="password" name="password" class="form-control" id="form-password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-black">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>