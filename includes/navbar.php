
<div class="bar">
            <div class="row">
              <div class="company_name col-lg-2 col-md-2 text-center col-sm-2 col-xs-2"><h1 class="pt-2">GearX</h1></div>
                <nav class="navbar n_bar my-1 col-lg-7 col-md-9 col-sm-9 col-xs-1 navbar-expand-md navbar-dark" aria-label="Fourth navbar example">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img style="width: 25px; margin-left: 9px;" src="images/home.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
              
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item mx-3" >
                          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="product.php">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="shop_1.php">SHOP</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="aboutUs.php">ABOUT US</a>
                        </li>
                        <?php

                        if(isset($_SESSION['userName'])){?>
                        <li class="nav-item">
                          <form action="includes/logOut.php" method="POST">
                          <button class="btn btn-warning rounded-5" type="submit" name="submit">SignOut</button>
                          </form>
                        </li>
                        <?php }
                        else{ ?>
                         <li class="nav-item">
                          <a class="btn btn-warning rounded-5" href="signIn.php" id="SignIn">SignIn</a>
                        </li>
                      <?php  }?>

                      </ul>
                      
                    </div>
                  </div>
                </nav>
             
            
            </div>
          </div>