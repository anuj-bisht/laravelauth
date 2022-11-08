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
    <link href="{{asset('css/loginregistration.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
          <div class="front">
            <!--<img src="images/frontImg.jpg" alt="">-->
            <div class="text">
              <span class="text-1">Every new friend is a <br> new adventure</span>
              <span class="text-2">Let's get connected</span>
            </div>
          </div>
          <div class="back">
            <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
            <div class="text">
              <span class="text-1">Complete miles of journey <br> with one step</span>
              <span class="text-2">Let's get started</span>
            </div>
          </div>
        </div>
        <div class="forms">
            <div class="form-content">
              <div class="login-form">
                <div class="title">Login</div>
              <form action="#">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Enter your password" required>
                </div>
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit">
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
              </div>
          </form>
        </div>
          <div class="signup-form">
            <div class="title">Signup</div>
          <form action="#">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Enter your password" required>
                </div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit">
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
              </div>
        </form>
      </div>
      </div>
      </div>
    </div>
</body>
</html>
