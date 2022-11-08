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
    <link href="{{asset('css/form2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    <div class="cont">
   <div class="container">
       <div class="title">Registration</div>

           <form method="" action="#">
               <div class="user-details">
               <div class="input-box">
                   <span class="details">Fullname</span>
                   <input type="text" name="fullname" autocomplete="off" required placeholder="Enter Your Name">
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" autocomplete="off" required placeholder="Enter Your Username">
                 </div>
                 <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" autocomplete="off" required placeholder="Enter Your Email">
                 </div>
                 <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="phonenumber" autocomplete="off" required placeholder="Enter Your Phone number">
                 </div>
                 <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" name="password" autocomplete="off" required placeholder="Enter Your password">
                 </div>
                 <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" name="confirm password" autocomplete="off" required placeholder="Confirm Password">
                 </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>

           </form>

    </div>
</div>
</body>
</html>
