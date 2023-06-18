<?php 
session_start();

	include 'connection.php';
	include 'functions.php';

	$user = 

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <body>
    <!---  JUDUL INDEX DAN OBJEK --->
    <div class="container">
        
      <!-- <div class="welcome">WELCOME TO MY LIBRARY</div>
      <div class="cta">
        <model-viewer src="assets/scene.gltf" camera-controls
          camera-orbit="45deg 50deg" disable-zoom auto-rotate
          shadow-intensity="1"></model-viewer>
      </div> -->
<!-- LIST ITEM PRODUK -->
      <div class="newBox" id="newBox">
        <div class="productBox" id="productBox1">
          <img src="assets/nike1.png" alt=""/>
          <div class="titleBox">TESTING BOX 1</div>
          <div class="descriptionBox">DESKRIPSI BOX 1</div>
        </div>
        <div class="productBox" id="productBox2">
          <img src="assets/nike2.png" alt=""/>
          <div class="titleBox">TESTING BOX 2</div>
          <div class="descriptionBox">DESKRIPSI BOX 2</div>
        </div>
      </div>

      <div class="wrapper" id="wrapper">
        <div class="card">
          <div class="product" id="product1" onclick="getDetail(1)">
            <img src="assets/nike1.png" alt=""/>
          </div>
          <div class="detail">
            <div class="title">Nike Sport One</div>
            <div class="description">Best Shoes Ever</div>
          </div>
        </div>
        <div class="card">
          <div class="product" id="product2" onclick="getDetail(2)">
            <img src="assets/nike2.png" alt=""/>
          </div>
          <div class="detail">
            <div class="title">Nike Vulgar Two</div>
            <div class="description">Comfort is in you</div>
          </div>
        </div>
        <div class="card">
          <div class="product" id="product3" onclick="getDetail(3)">
            <img src="assets/nike3.png" alt=""/>
          </div>
          <div class="detail">
            <div class="title">Nike GoodToGo</div>
            <div class="description">Running Faster</div>
          </div>
        </div>
        <div class="card">
          <div class="product" id="product4" onclick="getDetail(4)">
            <img src="assets/nike4.png" alt=""/>
          </div>
          <div class="detail">
            <div class="title">Nike Suede Sport</div>
            <div class="description">Better then anything</div>
          </div>
        </div>
        <div class="card">
          <div class="product" id="product5" onclick="getDetail(5)">
            <img src="assets/nike5.png" alt=""/>
          </div>
          <div class="detail">
            <div class="title">Nike Goals</div>
            <div class="description">Shoot Anyone</div>
          </div>
        </div>
        <div class="card">
          <div class="product" id="product6" onclick="getDetail(6)">
            <img src="assets/nike6.png" alt=""/>
          </div>
          <div class="detail">
            <div class="title">Nike Fredom</div>
            <div class="description">Free to run</div>
          </div>
        </div>
      </div>
    </div>

    <div class="top-item">
      <div class="top-item-wrapper">
        <div class="top-item-row">
          <img src="assets/nike5.png" alt="">
          <div class="top-item-detail">
            <h3>Nike Sport One</h3>
            <p>Best Shoes Ever that was used by Cristiano Ronaldo and Lionel
              Messi</p>
          </div>
        </div>
      </div>
    </div>

    <script type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script src="tweak.js"></script>
  

	<!-- <br> -->
	<?php //echo $user_data['user_name']; ?>
	</body>
</html>