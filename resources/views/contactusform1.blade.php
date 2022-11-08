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
    <link href="{{asset('css/contactusform1.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>


<div class="container">
    <div class="content">
      <div class="image-box">
       <img src="{{asset('images/road.jpg')}}" alt="">
      </div>
    <form action="#">
      <div class="topic">Send us a message</div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="message-box">
          <textarea></textarea>
        <label>Enter your message</label>
      </div>
      <div class="input-box">
        <input type="submit" value="Send Message">
      </div>
    </form>
  </div>
  </div>





</body>
</html>


