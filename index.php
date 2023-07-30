<?php include'includes/header.php' ?>
<?php
$_SESSION['username'] = "john";
if(!isset($_SESSION['username'])){
  echo "You are not loggedIn";
}else{ ?>
<body>
    
        <div class="bg_top" id="Home">
          <div class="asside1">
            <div class="box_orange text-center "><p>Experience satisfaction</p></div>
            <div class="box_green text-center text-white"><p>Welcome to GearX</p></div>
          </div>
          
          <?php include'includes/navbar.php' ?>
                
                  <div class="jumbutron h-100 p-5 rounded-3 text-center text-white">
                    <h2>NO JOB <span>IS</span>  TOO <br> BIG <span>OR</span> TOO SMALL <br > <Span class="text-warning fs-5">OPEN ALL YEAR ROUND</Span>  </h2>
                    <button class="btnG" type="button">Get Started</button>
                  </div>
              
                  <div class="blog col-lg-6 col-md-8 col-sm-8 col-xs-">
                  <div class=" row">
                        <div class=" col-lg-3 col-md-5 col-sm-5 col-xs-4">
                            <img class="imgA" src="images/profileB.jpg" alt="">
                        </div>
                        <div class=" col-lg-8 col-md-7 col-sm-7 col-xs-8">
                            <blockquote class="blockquote p-2">
                                <h2 class="text-warning">Why Woody</h2>
                              <p>placeat ipsam sint adipisci voluptatum blanditiis numquam? Nam repudiandae velit molestiae excepturi est necessitatibus?</p> 
                                <footer>Quote by <cite title="John Doe">John Doe</cite></footer>
                            </blockquote>
                        </div>
                      </div>
                  </div>
                    
                      <div class="bg_blue"></div>
                       <div class="bg_yellow"></div>
                     </div>


                     <div class="carossel">
                      <div class="services text-center" id="services">
                        <h1>SERVICES</h1>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores adipisci nisi assumenda dolore! In eius laboriosam autem non voluptas, quos tenetur perferendis accusantium placeat cumque hic, harum doloribus quas dolor!
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis sed, natus nisi maiores eius praesentium voluptates assumenda dolor velit nam deleniti error et numq</p>
                      </div>
                      <div id="myCarousel" class="carousel slide mb-6 col-lg-9 col-md-9 col-sm-11 col-xs-11" data-bs-ride="carousel" data-bs-theme="light">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner ">
                          <div class="carousel-item  active">
                           
                            <div class="container ">
                              <div class="row ">
                                <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                    <img class="IMG_slideB mx-5" src="images/profileA.jpg" alt="Avatar" class="w-100 mb-4">
                                   <div class="txt">
                                    <h2>Mr. Charles</h2>
                                    <p class="text-secondary">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                    real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                 island estate all your own.</p>
                            
                                   </div>
                                    </div>
                            <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                <img class="IMG_slideB mx-5" src="images/profileC.jpg" class="w-100 mb-4" alt="">
                                <div class="txt">
                                  <h2>MR. Peter</h2>
                                  <p class="text-secondary"> If you like the outdoors,
                                      find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                      Paris or any of the great cities around the world. Whatever lifestyle you are seeking, we can find the right home for you.</p>
                              
                                </div>
                                </div>
                             <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                              <img class="IMG_slideB mx-5" src="images/profileB.jpg" class="w-100 mb-4" alt="">
                             <div class="txt">
                              <h2>Mr. John</h2>
                              <p class="text-secondary"> If you like the outdoors,
                                  find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                 you are seeking,nie to gohn team nni ftftv nnmennnbdb  jbsjjjdfb  zala talk fast zam we can find the right home for you.</p>
                           
                             </div>
                              </div>
                            </div>
                            
                          </div>
                          </div>
                          <div class="carousel-item">
                         
                            <div class="container ">
                              <div class="row ">
                                <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                    <img class="IMG_slideB mx-5" src="images/profileA.jpg" alt="Avatar" class="w-100 mb-4">
                                   <div class="txt">
                                    <h2>Mr. Kelvin</h2>
                                    <p class="text-secondary">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                    real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                 island estate all your own.</p>
                            
                                   </div>
                                    </div>
                            <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                <img class="IMG_slideB mx-5" src="images/profileC.jpg" class="w-100 mb-4" alt="">
                                <div class="txt">
                                  <h2>Mr. Daniel</h2>
                                  <p class="text-secondary"> If you like the outdoors,
                                      find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                      Paris or any of the great cities around the world. Whatever lifestyle you are seeking, we can find the right home for you.</p>
                              
                                </div>
                                </div>
                             <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                              <img class="IMG_slideB mx-5" src="images/profileB.jpg" class="w-100 mb-4" alt="">
                             <div class="txt">
                              <h2>Mr. Ryan</h2>
                              <p class="text-secondary"> If you like the outdoors,
                                  find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                 you are seeking, we can find the right home for you are seeking,nie to gohn team nni ftftv nnmennnbdb  jbsjjjdfb you.</p>
                           
                             </div>
                              </div>
                            </div>
                            
                          </div>
                          </div>
                          <div class="carousel-item">
                           
                            <div class="container ">
                              <div class="row ">
                                <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                    <img class="IMG_slideB mx-5" src="images/profileA.jpg" alt="Avatar" class="w-100 mb-4">
                                   <div class="txt">
                                    <h2>Mr. Levis</h2>
                                    <p class="text-secondary">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                    real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                 island estate all your own.</p>
                            
                                   </div>
                                    </div>
                            <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                <img class="IMG_slideB mx-5" src="images/profileC.jpg" class="w-100 mb-4" alt="">
                                <div class="txt">
                                  <h2>Mr. Briand</h2>
                                  <p class="text-secondary"> If you like the outdoors,
                                      find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                      Paris or any of the great cities around the world. Whatever lifestyle you are seeking, we can find the right home for you.</p>
                              
                                </div>
                                </div>
                             <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                              <img class="IMG_slideB mx-5" src="images/profileB.jpg" class="w-100 mb-4" alt="">
                             <div class="txt">
                              <h2>Mr. Paul</h2>
                              <p class="text-secondary"> If you like the outdoors,
                                  find a ski, mountain or golf home, or even an equestrian home.you are seeking,nie to gohn team nni ftftv nnmennnbdb  jbsjjjdfb Like the city? Find a townhome or condo in New York, London,
                                 you are seeking, we can find the right home for you.</p>
                           
                             </div>
                              </div>
                            </div>
                            
                          </div>
                          </div>
                        </div>
                        
                      </div>
                 </div>

              <div class="bg_middle">
                <div class="bg_middle_green"></div>
                <div class="blog2">
                  <div class="row">
                    <div class="IMG2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="imgB" src="images/elec_pole copy.png" alt="">
                    </div>
                    <div class="quotesB col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <blockquote class="blockquoteB p-2">
                            <h2>Mr. Joseph</h2>
                          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officia a fugit accusantium quas architecto magni, placeat ipsam sint adipisci voluptatum blanditiis numquam? Nam repudiandae velit molestiae excepturi est necessitatibus?</p> 
                            <footer>Quote by <cite title="John Doe">John Doe</cite></footer>
                        </blockquote>
                    </div>
                  </div>
                </div>
                <div class="carosselB">
                  <h1 class="text-center team" id="team">OUR TEAM</h1>
                    <div id="myCarousel" class="carousel slide mb-6 col-lg-9 col-md-9 col-sm-11 col-xs-11" data-bs-ride="carousel" data-bs-theme="light">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner ">
                          <div class="carousel-item  active">
                           
                            <div class="container ">
                              <div class="row ">
                                <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                    <img class="IMG_slideB mx-5" src="images/profileA.jpg" alt="Avatar" class="w-100 mb-4">
                                   <div class="txt">
                                    <h2>Mr. Charles</h2>
                                    <p class="text-secondary">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                    real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                 island estate all your own.</p>
                            
                                   </div>
                                    </div>
                            <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                <img class="IMG_slideB mx-5" src="images/profileC.jpg" class="w-100 mb-4" alt="">
                                <div class="txt">
                                  <h2>MR. Peter</h2>
                                  <p class="text-secondary"> If you like the outdoors,
                                      find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                      Paris or any of the great cities around the world. Whatever lifestyle you are seeking, we can find the right home for you.</p>
                              
                                </div>
                                </div>
                             <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                              <img class="IMG_slideB mx-5" src="images/profileB.jpg" class="w-100 mb-4" alt="">
                             <div class="txt">
                              <h2>Mr. John</h2>
                              <p class="text-secondary"> If you like the outdoors,
                                  find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                 you are seeking,nie to gohn team nni ftftv nnmennnbdb  jbsjjjdfb  zala talk fast zam we can find the right home for you.</p>
                           
                             </div>
                              </div>
                            </div>
                            
                          </div>
                          </div>
                          <div class="carousel-item">
                         
                            <div class="container ">
                              <div class="row ">
                                <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                    <img class="IMG_slideB mx-5" src="images/profileA.jpg" alt="Avatar" class="w-100 mb-4">
                                   <div class="txt">
                                    <h2>Mr. Kelvin</h2>
                                    <p class="text-secondary">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                    real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                 island estate all your own.</p>
                            
                                   </div>
                                    </div>
                            <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                <img class="IMG_slideB mx-5" src="images/profileC.jpg" class="w-100 mb-4" alt="">
                                <div class="txt">
                                  <h2>Mr. Daniel</h2>
                                  <p class="text-secondary"> If you like the outdoors,
                                      find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                      Paris or any of the great cities around the world. Whatever lifestyle you are seeking, we can find the right home for you.</p>
                              
                                </div>
                                </div>
                             <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                              <img class="IMG_slideB mx-5" src="images/profileB.jpg" class="w-100 mb-4" alt="">
                             <div class="txt">
                              <h2>Mr. Ryan</h2>
                              <p class="text-secondary"> If you like the outdoors,
                                  find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                 you are seeking, we can find the right home for you are seeking,nie to gohn team nni ftftv nnmennnbdb  jbsjjjdfb you.</p>
                           
                             </div>
                              </div>
                            </div>
                            
                          </div>
                          </div>
                          <div class="carousel-item">
                           
                            <div class="container ">
                              <div class="row ">
                                <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                    <img class="IMG_slideB mx-5" src="images/profileA.jpg" alt="Avatar" class="w-100 mb-4">
                                   <div class="txt">
                                    <h2>Mr. Levis</h2>
                                    <p class="text-secondary">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                    real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                 island estate all your own.</p>
                            
                                   </div>
                                    </div>
                            <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                                <img class="IMG_slideB mx-5" src="images/profileC.jpg" class="w-100 mb-4" alt="">
                                <div class="txt">
                                  <h2>Mr. Briand</h2>
                                  <p class="text-secondary"> If you like the outdoors,
                                      find a ski, mountain or golf home, or even an equestrian home. Like the city? Find a townhome or condo in New York, London,
                                      Paris or any of the great cities around the world. Whatever lifestyle you are seeking, we can find the right home for you.</p>
                              
                                </div>
                                </div>
                             <div class=" col-md-12 col-lg-4 col-sm-12 col-12 mt-4 text-center">
                              <img class="IMG_slideB mx-5" src="images/profileB.jpg" class="w-100 mb-4" alt="">
                             <div class="txt">
                              <h2>Mr. Paul</h2>
                              <p class="text-secondary"> If you like the outdoors,
                                  find a ski, mountain or golf home, or even an equestrian home.you are seeking,nie to gohn team nni ftftv nnmennnbdb  jbsjjjdfb Like the city? Find a townhome or condo in New York, London,
                                 you are seeking, we can find the right home for you.</p>
                           
                             </div>
                              </div>
                            </div>
                            
                          </div>
                          </div>
                        </div>
                        
                      </div>
                 </div>
                
                <div class="bg_middle_orange">

                </div>
              </div>

              <div class="gallery" id="gallery">
                <div id="xCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-theme="light">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner ">
                    <div class="carousel-item  active">
                     
                      <div class="container ">
                        <div class="row ">
                          <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                              <img class="IMG_slideC" src="images/profileB.jpg" alt="Avatar" class="w-100 mb-4">
                             
                              </div>
                      <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                          <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                          
                          </div>
                       <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                        <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                       
                        </div>
                        <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                          <img class="IMG_slideC" src="images/profileB.jpg" alt="Avatar" class="w-100">
                         
                          </div>
                  <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                      <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                      
                      </div>
                   <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                    <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                   
                    </div>
                    
                      </div>
                      
                    </div>
                    </div>
                    <div class="carousel-item">
                   
                      <div class="container ">
                        <div class="row ">
                          <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                              <img class="IMG_slideC" src="images/profileB.jpg" alt="Avatar" class="w-100 mb-4">
                             
                              </div>
                      <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                          <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                          
                          </div>
                       <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                        <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                       
                        </div>
                        <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                          <img class="IMG_slideC" src="images/profileB.jpg" alt="Avatar" class="w-100">
                         
                          </div>
                  <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                      <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                      
                      </div>
                   <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                    <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                   
                    </div>
                    
                      </div>
                      
                    </div>
                    </div>
                    <div class="carousel-item">
                     
                      <div class="container ">
                        <div class="row ">
                          <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                              <img class="IMG_slideC" src="images/profileB.jpg" alt="Avatar" class="w-100 mb-4">
                             
                              </div>
                      <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                          <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                          
                          </div>
                       <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                        <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                       
                        </div>
                        <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                          <img class="IMG_slideC" src="images/profileB.jpg" alt="Avatar" class="w-100">
                         
                          </div>
                  <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                      <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                      
                      </div>
                   <div class=" col-md-2 col-lg-2 col-sm-12 col-12 text-center">
                    <img class="IMG_slideC" src="images/profileB.jpg" class="w-100" alt="">
                   
                    </div>
                    
                      </div>
                      
                    </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="bb">
                <h2>TESTIMONIALS</h2>
                <div class="blogC col-lg-4 col-md-8 col-sm-8 col-xs-8 shadow-lg">
                  <div id="Carousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item q active">
                       
                        <div class="container">
                          <div class="row">
                            <div class="q">
                              
                                <h2>Financial Manager</h2>
                                <p class="">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                waterfront, find a home on an ocean beach or a lake shore, or even a private island estate all your own.</p>
                        </div>
                      
                        </div>
                        
                      </div>
                      </div>
                      <div class="carousel-item">
                     
                        <div class="container">
                          <div class="row">
                            <div class=" q">
                                
                                <h2>Mr. Rema</h2>
                                <p class="">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                waterfront, find a home on an ocean beach or a lake shore, or even a private island estate all your own.</p>
                        </div>
                        
                        </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                       
                        <div class="container">
                          <div class="row">
                            <div class=" q">
                                <h2>Mr. Abel</h2>
                                <p class="">The perfect home to fit your lifestyle, anywhere in the world. At Clauvet’s Home Industries, we specialize in luxury 
                                real estate properties for discerning individuals who are seeking a home that creates a unique lifestyle experience. If you like 
                                waterfront, find a home on an ocean beach or a lake shore, or even a private island estate all your own.</p>
                        </div>
                      
                        </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="contact shadow-lg col-lg-6 col-md-11 col-sm-10 col-xs-11">
                <div class="row">
                  <div class="contact_input px-3 col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <h1>CONTACT</h1>
                    <h3>Pls input you contact info </h3>
                    <br>
                    <form action="includes/contactForm.php" method="POST">
                      <div>
                        <input class="name" type="name" name="name" placeholder="Full name">
                      </div>
                      <div class="en">
                        <input class="email" type="email" name="email" placeholder="email">
                        <input class="number" type="number" name="number" placeholder="number">
                      </div>
                      <div>
                        <textarea class="descr" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                      </div>
                      <div>
                        <button class="submit" name="submit" type="submit">Submit</button>
                      </div>
                      
                    </form>
                  </div>
                  <div class="contactIMG col-lg-5 col-md-6 col-sm-0 col-xs-0">
                  </div>
                </div>
                
              </div>
              
              <div class="contact col-lg-6 col-md-12 col-sm-12 col-xs-12 m-2">
                <h2>Welcome <?= $_POST['username']?></h2>
                <form class="form-control border-5 rounded-4  p-4 shadow-lg" action="includes/add_products.php" method="POST">
                  <input type="text" name="product_name" placeholder="Enter product name">
                  <input type="text" name="price" placeholder="Enter price eg..$97.21">
                  <input type="number" name="quantity" placeholder="Enter the quantity">
                  <textarea name="descr" placeholder="Enter detailed Description about the product" cols="30" rows="10"></textarea>
                  <input type="file" name="file">
                  <br><br>
                  <button class="submit" name="submit" type="submit">SAVE</button>
                </form>
              </div>
             
            
              <?php include'includes/footer.php' ?>
              
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php } ?>