<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Step Bar</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

    <div class="container">
      <h3>Booking form</h3>
      <div class="step_container">
        <div class="steps active">
          <span>1</span>
          <span>first step</span>
          <span></span>
        </div>
        <div class="steps">
          <span>2</span>
          <span>second step</span>
          <span></span>
        </div>
        <div class="steps">
          <span>3</span>
          <span>third step</span>
          <span></span>
        </div>
      </div>
      <div class="form_container">
        <form method="post" action="./config/form_submit.php">
          <div class="form_step" id="name">
            <input type="text" name="fname" class="fName" value="" placeholder="First name" required>
            <input type="text" name="lname" class="lName" value="" placeholder="Last name" required>

          </div>

          <div class="form_step d_none">
            <input type="number" name="number" class="number" value="" required placeholder="Enter your Number">
            <input type="email" name="email" class="email" value="" required placeholder="Enter your Email">
          </div>

          <div class="form_step d_none">
            <input type="text" name="address" value="" required placeholder="Enter your Address">
            <textarea name="textarea" required placeholder="Message"></textarea>
            <input type="password" name="password" value="" required placeholder="Enter your password">
            <input type="password" name="con_password" value="" required placeholder="Enter your confirm password">
          </div>
          <div class="button_box">
            <button type="button" class="previousBtn" name="button">previous</button>
            <button type="button" class="nextBtn" name="send">next</button>
          </div>
        </form>
      </div>

    </div>

    <script src="./js/script.js" charset="utf-8"></script>
  </body>
</html>
