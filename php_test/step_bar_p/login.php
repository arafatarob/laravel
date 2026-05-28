<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="./css/style.css">
    <style media="screen">
    .container {
  width: 20%;
}
    </style>
  </head>
  <body>
    <div class="container">
      <h3>login form</h3>
      <div class="form_container">
        <form method="post" action="./config/login_submit.php">
          <div class="form_step">
            <input type="email" name="email" class="email" value="" required placeholder="Enter your Email">
          </div>

          <div class="form_step">
            <input type="password" name="password" value="" required placeholder="Enter your password">
          </div>
          <div class="button_box">
            <button type="button" class="previousBtn visibility_hidden" name="button">previous</button>
            <button type="submit" class="nextBtn" name="login">login</button>
          </div>
        </form>
      </div>

    </div>
  </body>
</html>
