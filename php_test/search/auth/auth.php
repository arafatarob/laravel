<?php
session_start();
include('../db.php') ?>

<?php

  if (isset($_POST['sendForm'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $insert = $conn->query("INSERT INTO users(name,email,password,role) values('$name', '$email', '$password', 'user')");

    if ($insert) {
      echo "Account Created Successfully";
      header("Location: auth.php?status=success");
      exit();
    }else{
      echo "Account Created not Successfully";
    }
  }

?>

<?php
  if (isset($_POST['loginSubmit'])) {
    $email = $_POST['l-email'];
    $password = $_POST['l-password'];


    $select = $conn->query("SELECT * FROM users WHERE email='$email'");

    $user = $select->fetch_assoc();

    if ($password == $user['password']) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['name'];
      $_SESSION['user_email'] = $user['email'];
      $_SESSION['user_role'] = $user['role'];
      echo "<script>alert('Logged In Successfully')</script>";
      header("Location: ../index.php");
      exit();
    }else{
      echo "Invalid Password And User";
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>authentication page</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="auth-wrap">
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

    <div class="left-content">
      <h1 class="left-headline">Your world,<br><span>reimagined</span><br>beautifully.</h1>
      <p class="left-sub">Join thousands of creators and professionals who trust Lumina for a smarter, more connected experience every day.</p>
      <div class="features">
        <div class="feature-item">
          <div class="feat-dot purple"><i class="ti ti-shield-check" aria-hidden="true" style="font-size:14px; color:#a78bfa;"></i></div>
          <span class="feat-label">End-to-end encrypted & secure</span>
        </div>
        <div class="feature-item">
          <div class="feat-dot blue"><i class="ti ti-bolt" aria-hidden="true" style="font-size:14px; color:#60a5fa;"></i></div>
          <span class="feat-label">Lightning fast performance</span>
        </div>
        <div class="feature-item">
          <div class="feat-dot pink"><i class="ti ti-heart" aria-hidden="true" style="font-size:14px; color:#f472b6;"></i></div>
          <span class="feat-label">Loved by 50,000+ users globally</span>
        </div>
      </div>
    </div>

    <div class="left-bottom">© 2026 Lumina. All rights reserved.</div>
  </div>

  <div class="right-panel">
    <div class="tabs">
      <button class="tab active" onclick="switchTab('login')" id="tab-login">Sign In</button>
      <button class="tab" onclick="switchTab('signup')" id="tab-signup">Create Account</button>
    </div>

    <form class="" method="post">
      <div class="form-section visible" id="form-login">
        <h2 class="form-title">Welcome back</h2>
        <p class="form-sub">Sign in to continue your journey</p>

        <div class="field-group">
          <label class="field-label">Email address</label>
          <input class="field-input" name="l-email" type="email" placeholder="you@example.com" />
        </div>

        <div class="field-group">
          <label class="field-label">Password</label>
          <input class="field-input" name="l-password" type="password" placeholder="••••••••" />
        </div>

        <div class="box">
          <label for="remember_me" class="forgot">
              <input type="checkbox" name="remember_me" value="" id="remember_me"> Remember Me
          </label>
            <a href="forgot.php" class="forgot">Forgot password?</a>
        </div>

        <button class="submit-btn" type="submit" name="loginSubmit">Sign In →</button>
    </form>

      <div class="divider">
        <div class="div-line"></div>
        <span class="div-text">or continue with</span>
        <div class="div-line"></div>
      </div>

      <div class="social-row">
        <button class="social-btn">
          <span class="social-icon">G</span> Google
        </button>
        <button class="social-btn">
          <i class="ti ti-brand-github social-icon" aria-hidden="true"></i> GitHub
        </button>
        <button class="social-btn">
          <i class="ti ti-brand-apple social-icon" aria-hidden="true"></i> Apple
        </button>
      </div>

      <p class="agree-text">Don't have an account? <a onclick="switchTab('signup')">Create one free →</a></p>
    </div>

    <div class="form-section" id="form-signup">
      <h2 class="form-title">Create account</h2>
      <p class="form-sub">Start your free journey today — no credit card needed</p>

      <form method="post">
        <div class="field-row" style="width: 100%">
          <div class="field-group" style="margin-bottom:0;width:100%;">
            <label class="field-label">First name</label>
            <input class="field-input" name="name" type="text" placeholder="Rafi" />
          </div>
        </div>

        <div class="field-group" style="margin-top:14px">
          <label class="field-label">Email address</label>
          <input class="field-input" type="email" name="email" placeholder="you@example.com" />
        </div>

        <div class="field-group">
          <label class="field-label">Password</label>
          <input class="field-input" type="password" name="password" placeholder="Min. 8 characters" />
        </div>

        <div class="check-row">
          <input type="checkbox" id="agree" />
          <label class="check-label" for="agree">I agree to the <a>Terms of Service</a> and <a>Privacy Policy</a></label>
        </div>

        <button class="submit-btn" type="submit" name="sendForm">Create Account →</button>
      </form>

      <div class="divider">
        <div class="div-line"></div>
        <span class="div-text">or sign up with</span>
        <div class="div-line"></div>
      </div>

      <div class="social-row">
        <button class="social-btn">
          <span class="social-icon">G</span> Google
        </button>
        <button class="social-btn">
          <i class="ti ti-brand-github social-icon" aria-hidden="true"></i> GitHub
        </button>
        <button class="social-btn">
          <i class="ti ti-brand-apple social-icon" aria-hidden="true"></i> Apple
        </button>
      </div>

      <p class="agree-text">Already have an account? <a onclick="switchTab('login')">Sign in →</a></p>
    </div>
  </div>
</div>

<script>
function switchTab(tab) {
  document.getElementById('form-login').classList.remove('visible');
  document.getElementById('form-signup').classList.remove('visible');
  document.getElementById('tab-login').classList.remove('active');
  document.getElementById('tab-signup').classList.remove('active');

  document.getElementById('form-' + tab).classList.add('visible');
  document.getElementById('tab-' + tab).classList.add('active');
}
window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
        switchTab('login'); // আপনার তৈরি করা ফাংশনটি কল হবে
        alert("Account Created! Please Login.");
    }
}
</script>
  </body>
</html>
