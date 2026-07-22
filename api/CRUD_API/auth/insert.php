<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert students</title>
    <style media="screen">
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body{
      background: #0b0423;
      position: relative;
      height: 100vh;
    }
    form{
      width: 90%;
      max-width: 700px;
      border: 1px solid rgba(255, 255, 255, 0.6);
      border-radius: 6px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 15px 30px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    }
    .form-group{
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      font-size: 25px;
      text-transform: uppercase;
      margin-bottom: 10px;
      color: #fff;
    }
    .form-group input {
    border: 1px solid rgba(255, 255, 255, 0.6);
    padding: 6px 15px;
    border-radius: 5px;
    outline: none;
    background: transparent;
    margin-bottom: 10px;
    transition: all 0.6s ease;
    color: #b96b63;
}

.form-group input:focus{
  border: 1px solid #b96b63;
}

::placeholder{
  color: #b96b63;
}

.button{
  display: flex;
  justify-content: center;
  align-items: center;
}

button{
  padding: 10px 30px;
  background: rgba(255, 255, 255, 0.6);
  border-radius: 6px;
  outline: none;
  border: none;
  text-transform: uppercase;
  font-weight: 700;
  cursor: pointer;
}
    </style>
  </head>
  <body>
      <form class="" action="./action/create.php" method="post">
        <div class="form-group">
          <label for="name">name : </label>
          <input type="text" name="name" value="" placeholder="enter your name">
        </div>
        <div class="form-group">
          <label for="name">age : </label>
          <input type="text" name="age" value="" placeholder="enter your age">
        </div>
        <div class="form-group">
          <label for="name">subject : </label>
          <input type="text" name="subject" value="" placeholder="enter your subject">
        </div>
        <div class="button">
          <button type="submit" name="button">send</button>
        </div>
      </form>
  </body>
</html>
