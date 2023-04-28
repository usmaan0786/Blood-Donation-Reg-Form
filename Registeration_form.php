<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Modern Flat Design Login Form Example</title>
  <link rel="stylesheet" href="./styles.css">

</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="./Connect.php" method="POST">
    <h1>Blood Donation Camp</h1>
      <input type="text" placeholder="Username" name = "username"/>
      <input type="email" placeholder="Email" name = "email"/>
      <input type="text" placeholder="Phone" name = "phone"/>
      <input type="text" placeholder="Blood Group" name = "blood_group"/>
      <input type="submit" name = "submit" id = "submit"/>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
