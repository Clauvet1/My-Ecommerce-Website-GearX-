<?php include'includes/header.php' ?>
<?php
$_SESSION['username'] = "john";
if(!isset($_SESSION['username'])){
  echo "You are not loggedIn";
}else{ 
  $num = 1;
  $sql = 'SELECT * FROM products WHERE id BETWEEN 13 AND 18;';
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  ?>
            <?php 
            include'includes/shop_content.php';
            ?>
            <div class="col-lg-2">
                        <div class="indentation">
                          <div>
                          <a href="shop_1.php"><button class="btn btn-warning">1</button></a>
                          </div>
                          <div>
                          <a href="shop_2.php"><button class="btn btn-secondary">2</button></a>
                          </div>
                          <div>
                          <a href="shop_4.php"> <button class="btn btn-secondary"><img src="images/right-arrow.png" alt=""></button></a>
                          </div>
                        </div>
                      </div>
                      </div>
                     
                        
                    </div>
                </div>
            </div>
            <?php include'includes/footer.php' ?>
            
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>