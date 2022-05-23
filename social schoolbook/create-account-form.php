<?php include('create-account.php') ?>
<div>
    <h2>sign up</h2>
</div>
<form method="post" action="create-account.php">
-    <div>
        <label>Username</label><br>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div>
        <label>Email</label><br>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div>
        <label>Password</label><br>
        <input type="password" name="password_1">
    </div>
    <div>
        <label>Confirm password</label><br>
        <input type="password" name="password_2">
    </div>
    <div><br>
        <button type="submit" class="btn" name="register_btn">verstuur</button>
    </div>
    <p>
        Already a member? <a href="login-account-form-user.php">Sign in</a>
    </p>