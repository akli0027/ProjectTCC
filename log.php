<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Toko Sperpart Laptop</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#product">StartShop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Product</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="kategori_Monitor.php">Monitor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="kategori_Speaker.php">Speaker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="kategori_Mouse.php">Mouse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="kategori_keyboard.php">Keyboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="kategori_Ram.php">Ram</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="log.php">Log</a>
          </li>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="proses_logout.php">Logout</a>
          </li>
      </div>
    </div>
  </nav>

  <!-- Home Section -->
  <section class="page-section bg-secondary" id="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
         
  <h2 class="text-white mt-0">
BEFORE !! MOVE CATEGORY ADD CART FIRST</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Section -->
  
  <section id="product">
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Ip User</th>
      <th scope="col">Aktifitas</th>
      <th scope="col">Waktu</th>
    </tr>
    <?php
     include 'koneksi.php';
    $i=1;
    $j=0;
    $link = mysqli_query($connect,"select *from log");
    while ($tampung=mysqli_fetch_object($link)){
      ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?=$i++;?>.</th>
      <td><?=$tampung->ip_user?></td>
      <td><?=$tampung->activity?></td>
      <td><?=$tampung->date?></td>
      <td>
      		<a href="hapus_log.php?id=<?=$tampung->id?>" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
  </form>
 </section>


 



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
