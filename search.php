<?php include'includes/header.php';
if(!isset($_SESSION['userName'])){
  header("Location: signIn.php?You most logIn befor accessing the site");
}else{

if(isset($_POST['submit_search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$search%' OR price LIKE '%$search%'
                OR quantity LIKE '%$search%' OR description LIKE '%$search%';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        
        include'includes/shop_content.php';
        ?>

        
                      </div>
                     
                        
                    </div>
                </div>
            </div>
           
            <?php include'includes/footer.php' ?>
            
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } }?>