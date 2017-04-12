<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css"
  href="<?php echo base_url('assets/css/bootstrap.css');?>">

  <link rel="stylesheet" type="text/css"
  href="<?php echo base_url('assets/css/login.css');?>">
</head>
<body>
<div class="container">

      <form class="form-signin" action="<?php echo base_url('user/login'); ?>" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label>Email</label>

        <input type="text" name="email" class="form-control" placeholder="Email address" required autofocus>

        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <br>
        <?php echo $error; ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
</body>
</html>