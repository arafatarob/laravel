<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/style.css">
    <style media="screen">

    .left-panel {
  width: 100%;
  background: linear-gradient(135deg, #1a0533 0%, #0d1a3a 50%, #001a2e 100%);
  padding: 48px 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
  overflow: hidden;
  height: 100%;
}
div#form-login {
    width: 500px;
    padding: 20px 45px;
    border-radius: 10px;
    background: #0a0a0f;
    margin: 300px auto;
}
    </style>
  </head>
  <body>
    <div class="left-panel">
      <div class="orb1"></div>
      <div class="orb2"></div>
      <div class="orb3"></div>

      <div class="brand">
        <div class="logo">
          <div class="logo-icon">✦</div>
          <span class="logo-text">Arafat</span>
        </div>
      </div>

    <form class="" method="post">
      <div class="form-section visible" id="form-login">
        <h2 class="form-title">Welcome back</h2>
        <p class="form-sub">Reset Your Password to continue your journey</p>

        <div class="field-group">
          <label class="field-label">Email address</label>
          <input class="field-input" name="R-email" type="email" placeholder="you@example.com" />
        </div>

        <button class="submit-btn" type="submit" name="loginSubmit">Reset Your Password</button>
    </form>

    </div>
  </body>
</html>
