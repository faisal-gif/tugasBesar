<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginCss.css">
</head>
<body>

  <div id="card">
    <img src="img\tut.png" id="cv">
    <div id="card-content">
      <div id="card-title">
        
        
      </div>

      <form method="post" class="form" action="prosesLogin.php"> 

        <label for="user-email" style="padding-top:13px">&nbsp;Username</label>
        <input id="user-email" class="form-content" type="text" name="username" required />

        <div class="form-border"></div><label for="user-password" style="padding-top:22px">&nbsp;Password</label>
        <input id="user-password" class="form-content" type="password" name="password" required />

        <div class="form-border"></div>

        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
      </form>
    </div>
  </div>
</body>
</html>