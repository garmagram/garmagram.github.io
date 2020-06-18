<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<?php include 'menu.php' ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ind.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div class="py-5">  
        <h2 class="text-center">About us</h2>
    </div>
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
               <img src="images/index.jpg" class="aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
               <h2 class="display-4">i am website designer.</h2>
               <p class="py-3">sdghjkk grtytiu gddjkkkh fdedfghh hhgfdhnnnnnn
                   cvbnmnmmm
                   hhggfdddsdertyy6678kmmn
                   jjkkkkiujuyhgt
               </p>
               <a href="about.php" class="btn btn-success">check more</a>
          </div>
       </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">  
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                   <img class="card-img-top" src="images/img.jpg" alt="Card image">
                   <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                   <img class="card-img-top" src="images/img.jpg" alt="Card image">
                   <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                   <img class="card-img-top" src="images/img.jpg" alt="Card image">
                   <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                 </div>
            </div>


        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">  
        <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/pic.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/picture.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/images.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/ind.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/index.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/pic.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/pic.jpg" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">  
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
           <div class="form-group">
               <label>username</label>
               <input type="text" name="user" autocomplete="off" class="form-control">
           </div>

           <div class="form-group">
               <label>Email id</label>
               <input type="text" name="email" autocomplete="off" class="form-control">
           </div>

           <div class="form-group">
               <label>mobile no</label>
               <input type="text" name="mobile" autocomplete="off" class="form-control">
           </div>

           <div class="form-group">
               <label>Comment</label>
               <textarea class="form-control"></textarea name="comment"></textarea>
           </div>
           <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@websiteproduction</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>