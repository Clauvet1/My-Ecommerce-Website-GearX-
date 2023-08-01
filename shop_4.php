<?php include'includes/header.php' ?>
<?php
if(!isset($_SESSION['userName'])){
  header("Location: signIn.php?You most logIn before accessing the site");
}else{
  $num = 1;
  $sql = 'SELECT * FROM products WHERE id BETWEEN 19 AND 24;';
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  ?>
            <?php 
            include'includes/shop_content.php';
            ?>
            <div class="col-lg-2">
                        <div class="indentation">
                          <div>
                          <a href="shop_2.php"><button class="btn btn-warning">2</button></a>
                          </div>
                          <div>
                          <a href="shop_3.php"><button class="btn btn-secondary">3</button></a>
                          </div>
                          <div>
                          <a href="shop_5.php"> <button class="btn btn-secondary"><img src="images/right-arrow.png" alt=""></button></a>
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