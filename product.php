<?php include'includes/header.php' ?>
<?php
$_SESSION['username'] = "john";
if(!isset($_SESSION['username'])){
  echo "You are not loggedIn";
}else{ ?>


<body>
    <div class="main">
        <div class="shop_header">
            <div class="asside1">
                <div class="box_orange text-center "><p>Experience satisfaction</p></div>
                <div class="box_green text-center text-white"><p>Welcome to GearX</p></div>
              </div>

              <?php include'includes/navbar.php' ?>
              
          <div class="cc">
            <h1 class="H">PRODUCTS</h1>
          <p class="text-white mx-5 " id="cc">HOME<img class="mx-3"  src="images/right-arrow.png" alt=""> <span class="text-danger mx-1">PRODUCTS</span></p>
        
          </div>
            </div>
           <div class="product_content">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    
                <?php
                $sql = 'SELECT * FROM products WHERE product_name = "Hammer Drill";';
                $result = mysqli_query($conn, $sql);
                $ResultCheck = mysqli_num_rows($result);

                if($ResultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){ ?>
                    <div class="IMG_products">
                    <img class="img1_products" src="data:image/jpg;chartset=utf8;base64, <?php echo base64_encode($row['img']); ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <h1><?= $row['product_name']?></h1>
                    <h5><del>$650.45</del><?= $row['price']?></h5>
                    <p><?= $row['description']?><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam cumque quam tempore omnis tenetur sit consequuntur officia eligendi, voluptatem provident est eos sunt eaque, dolore autem in minus iure ex?</p>
                
                <button class="bg-black text-white p-2 rounded-1 px-4">ADD TO CART</button>
                </div>
                <?php    }
                }
                ?>
            </div>

            <div id="dynamic_tap">
                <ul class="nav nav-tabs w-25" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                       <span class="fs-1">L</span>orem, ipsum dolor sit amet consectetur adipisicing elit. Libero rem eligendi consequuntur aliquid pariatur, magni in ratione eveniet officia saepe tempora nihil alias temporibus nostrum delectus error beatae minus quam?
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       1 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sit obcaecati reiciendis doloribus! Nulla iusto, natus quod iste nemo, autem inventore quae doloribus optio nesciunt, cum aliquid repellat error sunt?
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>
            </div>
           
            <div class="related_products mt-5">
                <h3>RELATED PRODUCTS</h3>
                <div class="row mt-5">
                <?php
                $sql = 'SELECT * FROM products;';
                $result = mysqli_query($conn, $sql);
                $ResultCheck = mysqli_num_rows($result);

                if($ResultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){ ?>

                    <div class="col-lg-3">
                        <div class="IMG_productsB mb-4">
                        <img class="img1_products" src="data:image/jpg;chartset=utf8;base64, <?php echo base64_encode($row['img']); ?>" alt="">
                     </div>
                        <h4><?= $row['product_name']?></h4>
                        <p><?= $row['price']?></p>
                    </div>
                 <?php   }
                }?>
                
                </div>
            </div>
           </div> 

           <?php include'includes/footer.php' ?>
           
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>