<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="{{asset('css/form3.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    <div class="cont">
   <div class="container">




<div class="wrapper">
    <div class="title-text">
       <div class="title login">
          Login Form
       </div>
       <div class="title signup">
          Signup Form
       </div>
    </div>
    <div class="form-container">
       <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
       </div>
       <div class="form-inner">
          <form action="#" class="login">
             <div class="field">
                <input type="text" placeholder="Email Address" required>
             </div>
             <div class="field">
                <input type="password" placeholder="Password" required>
             </div>
             <div class="pass-link">
                <a href="#">Forgot password?</a>
             </div>
             <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Login">
             </div>
             <div class="signup-link">
                Not a member? <a href="">Signup now</a>
             </div>
          </form>
          <form action="#" class="signup">
             <div class="field">
                <input type="text" placeholder="Email Address" required>
             </div>
             <div class="field">
                <input type="password" placeholder="Password" required>
             </div>
             <div class="field">
                <input type="password" placeholder="Confirm password" required>
             </div>
             <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Signup">
             </div>
          </form>
       </div>
    </div>
 </div>
</div>
</div>
 <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (()=>{
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
      signupBtn.click();
      return false;
    });
 </script>
</body>
</html>
