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
    <link href="{{asset('css/card3.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    <div class="container">
        <div class="box one">
          <div class="details">
            <div class="topic">Description</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque consequatur corporis vitae nobis, ut veniam earum expedita eaque at placeat perferendis unde voluptates explicabo rerum distinctio quis, illo, porro et?</p>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
              <div class="price-box">
                <div class="discount">$1800.00</div>
                <div class="price">$1500.00</div>
              </div>
          </div>
          <div class="button1">
            <button>Add To Cart</button>
          </div>
        </div>
        <div class="box two">
          <div class="image-box">
            <div class="image">
              <img src="{{asset('images/road.jpg')}}" alt="">
            </div>
            <div class="info">
              <div class="brand">SONY</div>
              <div class="name">SONY ALPHA A7 KIT</div>
              <div class="shipping">FREE SHIPPING</div>
              <div class="button2">
                <button>Login For More</button>
              </div>
            </div>
          </div>
        </div>

        
      </div>
</body>
</html>

  <script>
   let circle = document.querySelector(".color-option");

   circle.addEventListener("click", (e)=>{
     let target = e.target;
     if(target.classList.contains("circle")){
       circle.querySelector(".active").classList.remove("active");
       target.classList.add("active");
       document.querySelector(".main-images .active").classList.remove("active");
       document.querySelector(`.main-images .${target.id}`).classList.add("active");
     }
   });
  </script>
