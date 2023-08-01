<body>
    <div class="main">
        <div class="shop_header">
            <div class="asside1">
                <div class="box_orange text-center "><p>Experience satisfaction</p></div>
                <div class="box_green text-center text-white"><p>Welcome to GearX</p></div>
              </div>
              
              <?php include'includes/navbar.php' ?>

          <div class="cc">
            <h1 class="H">STORE</h1>
            <div class="store_box text-black bg-warning" id="shop_rec">
                <p>You are here: <span class="text-white">HOME</span> / SHOP</p>
            </div>
          </div>
            </div>
<div class="shop_content1">
                <div class="row">
                    <div class="col-lg-3 p-5" id="sec_1">
                        <div class="search-wrapper">
                          <form action="search.php" method="POST">
                          <label for="search">Search Products</label>
                          <input type="search" name="search" placeholder="Search products..." id="search">
                          <button type="submit" class="submit" name="submit_search">Search</button>
                          </form>
                          
                          <h4>FILTER BY PRICE</h4>
                          <div class="row">
                            <div class="col-lg-6">
                              <p id="price_filter">Price</p>
                            </div>
                            <div class="col-lg-6">
                              <button class="px-4 py-2 rounded-2 text-white border-warning bg-warning" type="" id="filter">Filter</button>
                            </div>
                          </div>
                          <hr>
                          <h4>CATEGORIES</h4>
                          <hr>
                            <li>Clothing</li>
                            <li>Hoodle</li>
                            <li>Posters</li>
                            <li>T-shirts</li>
                            <h4>FEATERED PRODUCTS</h4>
                            <hr>
                            <div class="row">
                            
                              <div class="col-lg-6">
                                <li>Cordless Drill</li>
                                <p class="price">$345.32</p>
                              </div>
                              <div class="col-lg-6">
                                <div class="IMG_productsC mb-4">
                                  <img class="img1_products" src="images/Cordless Drill.jpg" alt="">
                              </div>
                              </div>
                              <div class="col-lg-6">
                                <li>Drill</li>
                                <p class="price">$320.13</p>
                              </div>
                              <div class="col-lg-6">
                                <div class="IMG_productsC mb-4">
                                  <img class="img1_products" src="images/Drill.jpg" alt="">
                              </div>
                              </div>
                              <div class="col-lg-6">
                                <li>nails</li>
                                <p class="price">$170.87</p>
                              </div>
                              <div class="col-lg-6">
                                <div class="IMG_productsC mb-4">
                                  <img class="img1_products" src="images/Nails.jpg" alt="">
                              </div>
                              </div>
                              <div class="col-lg-6">
                                <li>Tape</li>
                                <p class="price">$203.21</p>
                              </div>
                              <div class="col-lg-6">
                                <div class="IMG_productsC mb-4">
                                  <img class="img1_products" src="images/Tape.jpg" alt="">
                              </div>
                              </div>
                            
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 p-5">
                      <div class="row">
                        <div class="col-lg-4 text-left my-4">
                          <p>showing 1-9 of 10 results</p>
                        </div>
                        <div class="col-lg-4 text-left">
                        </div>
                        <div class="col-lg-4">
                          <button class="btn btn-secondary px-4 py-2">Default sorting</button>
                        </div>
                        <?php
                        if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result))
                        {?>
                        <div class="col-lg-4" >
                        <div class="IMG_productsB mb-4">
                         <img class="img1_products" src="data:image/jpg;chartset=utf8;base64, <?php echo base64_encode($row['img']); ?>" alt="">
                      </div>
                      <h4><?= $row['product_name']?></h4>
                      <p><?= $row['price']?></p>
                      </div>
                        
                     
                <?php  }} ?>
                    
                      