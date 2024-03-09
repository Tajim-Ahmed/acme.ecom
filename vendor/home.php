
<?php
session_start();
if(!isset($_SESSION['login_status'])){

    echo "illigal attempt login bypass";
    die;

}
if(($_SESSION['login_status']==false)){

    echo "unauthorized acess, 403: forbiden";
    die;

}
if(($_SESSION['usertype']!='vendor')){
    echo "permission denied";
    die;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<style>

body{
  background-color: black;
}
 .vb{
  padding:10px;   
  width:30vw;
  display:inline-block; 
  background: aqua;
  border-radius: 30px;
  /* text-align:center; */
}
.vi{
   
  border-radius:10px;
  
  padding:  5% 5%;
 }
 .vp,.vc,.vt{
 padding: 5px;
 display: inline-block;
 }
 

    .addb{
      /* background-color: rgb(255, 255, 255); */
      width: 100%;
      height: 80vh;
      display: flex;
      justify-content: center;
      position: relative;
      top: auto;
      
    }
    .addp{
        background-color: rgb(226, 133, 133);
      width: 60%;
      height: 70vh;
      text-align: center;
      position: relative;
      top: 5vh;
      border-radius: 30px;
 }
  .text{
    text-shadow: 2px 2px 3px aqua;
}

.input{
    border-radius: 10px; 
    background-color: black;
     color: aqua;
     height: 45px;
     border: 1px solid aqua;
     width: 250px;
}
.input::placeholder{
  color: aqua;
}
.dis,.img{
    border-radius: 15px; 
    background-color: black;
     color: aqua;
     /* height: 35px; */
     /* width: 250px; */
     border: 1px solid aqua;
}
.dis::placeholder{
  color: aqua;

}

</style>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid text-white">
    <a class="navbar-brand  text-white" href="#">Welcome Seller</a>
    <button class="navbar-toggler text-white" style="border: 2px solid white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="../shared/logout.php" >LOGOUT</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


  <div class="addb">
    <div class="addp">
        <h1 class="text ">ADD PRODUCTS</h1>
        <form enctype="multipart/form-data" method="post"  action="upload.php" >
            <div><input class="m-2 input" type="text" name="category" placeholder="category">
            <input class="m-2 input" type="text" name="title" placeholder="title">
            <input class="m-2 input" type="number" name="price" placeholder="price"></div>
            <div><textarea class="m-2 dis" style="width: 50%;" name="discription" placeholder="discription" cols="5" rows="5"></textarea></div>
           <input type="file" class="m-2  w-50 img" name="image" accept=".jpg,.png">
              <button  class="btn btn-primary m-3">add product</button>
        </form>
    </div>
  </div>
  <div class="view">
<?php
include "view.php";
?>
  </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

