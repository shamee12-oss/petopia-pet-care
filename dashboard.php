<?php
session_start();
require_once 'includes/functions.php';
requireLogin();
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="images\icon.jpeg" type="image/x-icon">
</head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>we care - petopia</title>
<body>
<h2 style="font-size: 2rem; color:rgb(206, 22, 22); text-align: center; margin-bottom: 0.5rem;">Welcome, <?= htmlspecialchars($_SESSION['name']) ?>!</h1>
  <p style="font-size: 1.2rem; color:rgb(215, 14, 24); text-align: center;">You are now in petopia </p>
  
<section id="Home">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            🐶 petopia
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">options</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 smooth-scroll" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 smooth-scroll" href="#services">services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2 smooth-scroll" href="#pricing">pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2 smooth-scroll" href="#gallery">gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2 smooth-scroll" href="#blogs">blogs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2 smooth-scroll" href="#contact-us">contact-us</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <section id="Home">
        <div class="container">
          <div class="row">
            <div class="home-text">
              <h1>we provide the best care for your pets</h1> 
              <p>"We provide the best care for your pets by combining expertise, compassion, and dedication to their well-being. Our team of professionals is committed to treating your furry friends as part of our own family, offering a safe and nurturing environment where they feel loved and cared for. Trust us to deliver exceptional care, tailored to meet your pet’s unique needs, so they can thrive and enjoy a happy, healthy life by your side."
              </p>
              <a href="#contact-us" class="btn">contact us</a>
          </div>
          <div class="home-img">
            <div class="fancy-br-box">
              <img src="images/catty.jpg" alt="img"> 
              <div class="icon-box">
             <img src="images/walking.png" alt="icon">
             </div>
             </div>
          </div>
        </div>
      </section>
      <section id="About">
        <div class="container">
          <div class="section-title">
            <h2 class="title">about us</h2>
            <p class="sub-title">Why We Are The Best</p>
          </div>
          <div class="=row">
  
            <div class="about-img">
              <div class="fancy-br-box">
                <img src="images/download (4).jpg" alt="collage">

                <div class="icon-box">
                  <img src="images/cat.png" alt="icon">
                  </div>
              </div>
              <div class="text">
                <p>"At Petcare, we provide exceptional care for your pets through healthy nutrition, regular exercise, and a loving environment. Our dedicated team ensures your furry friends are happy, healthy, and cared for, making us the best choice for pet care."</p>
                <h3>We Provide Services Like:</h3>
                <ul>
                    <li>◾Grooming</li>
                    <li>◾Walking</li>
                    <li>◾Training</li>
                    <li>◾Pet Sitting</li>
                    <li>◾Overnight Care</li>
                    <li>◾Health Care</li>
                </ul>
            </div>
          </div>
            </div>
          </div>
          </div>
          </section>
          <section id="services">
            <div class="container">
              <div class="section-title">
                <h2 class="title">
                  services
                </h2>
                <p class="sub-title">what we provide</p>
              </div>
              <div class="row">
                <div class="services-item">
                  <div class="img-box">
                    <img src="images/download.jpeg" alt="img">
                                    </div>
                  <div class="textt">
                    <h3>◾pet walking</h3>
                    <p>Regular walking services provide pets with the exercise and mental stimulation they need to stay healthy and happy. Whether it’s a quick stroll or a long adventure, walks help pets burn energy, maintain fitness, and enjoy the outdoors</p>
                  </div>
                </div>

                <div class="services-item">
                  <div class="img-box">
                    <img src="images/download.png" alt="img">
                                    </div>
                  <div class="textt">
                    <h3>◾grooming</h3>
                    <p>Grooming services include bathing, brushing, nail trimming, ear cleaning, and coat care to keep pets looking and feeling their best. Professional grooming not only enhances appearance but also supports overall hygiene and prevents common health issues</p>
                  </div>
                </div>

                <div class="services-item">
                  <div class="img-box">
                    <img src="images/download (3).jpeg" alt="img">
                                    </div>
                  <div class="textt">
                    <h3>◾Training</h3>
                    <p>Professional training services focus on teaching basic commands, correcting behavior, and fostering a positive relationship between pets and their owners. Tailored programs help improve obedience and ensure a well-mannered pet.</p>
                  </div>
                </div>

                <div class="services-item">
                  <div class="img-box">
                    <img src="images/getimg_ai_img-78Jsrjapn3BHHh6Ir5ByN.jpeg" alt="img">
                                    </div>
                  <div class="textt">
                    <h3>◾pet sitting</h3>
                    <p>Pet sitting ensures your pets are well cared for in your absence. From feeding and cleaning to playtime and companionship, this service provides comfort and routine for pets while giving you peace of mind.</p>
                  </div>
                </div>

                <div class="services-item">
                  <div class="img-box">
                    <img src="images/getimg_ai_img-F79J0o0zNaQKI5ythpfmG.jpeg" alt="img">
                     </div>               
                  <div class="textt">
                    <h3>◾Overnight Care</h3>
                    <p>Overnight care offers a safe and comfortable environment for pets when you’re away overnight. This service ensures pets receive proper attention, feeding, and love throughout the night, keeping them stress-free.</p>
              
                  </div>
                </div>

                <div class="services-item">
                  <div class="img-box">
                    <img src="images/getimg_ai_img-zsvVz7s4HNXvJDycI35T3.jpeg" alt="img">
                                    </div>
                  <div class="textt">
                    <h3>◾Health Care</h3>
                    <p>Pet healthcare services cover routine checkups, vaccinations, dental care, and treatments for illnesses or injuries. Comprehensive care ensures your pet stays healthy, active, and free from preventable health issues.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="fun-fact">
            <div class="container">
              <div class="row">
                <div class="fun-fact-item">
                  <div class="box">
                    <h2>500</h2>
                    <p>happy clients</p>
                  </div>
                </div>
                <div class="fun-fact-item">
                  <div class="box">
                    <h2>88</h2>
                    <p>Adopted pets</p>
                  </div>
                </div>
                <div class="fun-fact-item">
                  <div class="box">
                    <h2>10</h2>
                    <p>Awards</p>
                  </div>
                </div>
                <div class="fun-fact-item">
                  <div class="box">
                    <h2>1000</h2>
                    <p>clients</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="pricing">
            <div class="container">
              <div class="section-title">
                <h2 class="title">
                  pricing
                </h2>
                <p class="sub-title">best pricing plan</p>
              </div>
              <div class="cont">
              <div class="pricing-item pricing-1">
                <div class="pricing-header">
                  <h3 data-text="basic"><span>Basic plane</span></h3>
                  <div class="price">$50 <span>/ month</span></div>
                </div>
                  <div class="pricing body">
                    <ul>
                      <li>
                        <i class="far fa-check-circle">Regular Grooming</i>
                      </li>
                      <li>
                        <i class="far fa-check-circle">pet walking</i>
                      </li>
                       <li>
                        <i class="far fa-check-circle">Nail Clipping</i>
                       </li>
                       <li>
                        <i class="far fa-times-circle">Bathing</i>
                       </li>
                       <li>
                        <i class="far fa-check-circle">Nail Clipping</i>
                       </li>
                       <li>
                        <i class="far fa-check-circle">Feeding</i>
                       </li>
                       <li>
                        <i class="far fa-check-circle">24/7 Support</i>
                       </li>
                    </ul>
                    </div>
                    <div class="pricing-footer">
                      <a href="#" class="btn" id="bookNowBtn">Book Now</a>
                    </div>
                    <div id="confirmationMessage" style="display: none;">
                      <p>Thank you for your booking! please provide your details in contact-us page, we will contact you soon!</p>
                    </div>
                    </div>
                    <div class="pricing-item pricing-2">
                      <div class="pricing-header">
                        <h3 data-text="basic"><span>standard plane</span></h3>
                        <div class="price">$100 <span>/ month</span></div>
                      </div>
                        <div class="pricing body">
                          <ul>
                            <li>
                              <i class="far fa-check-circle">All Basic Plan Features</i>
                            </li>
                            <li>
                              <i class="far fa-check-circle">Pet Training</i>
                            </li>
                             <li>
                              <i class="far fa-check-circle">Veterinary Check-ups</i>
                             </li>
                             <li>
                              <i class="far fa-times-circle">Pet Sitting (1 Day)</i>
                             </li>
                             <li>
                              <i class="far fa-check-circle">Transportation Services
                              </i>
                             </li>
                             <li>
                              <i class="far fa-check-circle">walking</i>
                             </li>
                             <li>
                              <i class="far fa-check-circle">24/7 Support</i>
                             </li>
                          </ul>
                          </div>
                          <div class="pricing-footer">
                            <div class="pricing-footer">
                              <a href="#" class="btn" id="bookNowBtn1">Book Now</a>
                            </div>
                            
                            <div id="confirmationMessage1" style="display: none;">
                              <p>Thank you for your booking! please provide your details in contact-us page, we will contact you soon!</p>
                            </div>
                            
                          </div>
                          
                          </div>
                          <div class="pricing-item pricing-3">
                            <div class="pricing-header">
                              <h3 data-text="premium"><span>premium plane</span></h3>
                              <div class="price">$500 <span>/ month</span></div>
                            </div>
                              <div class="pricing body">
                                <ul>
                                  <li>
                                    <i class="far fa-check-circle">health Care</i>
                                  </li>
                                  <li>
                                    <i class="far fa-check-circle">overnight Care</i>
                                  </li>
                                   <li>
                                    <i class="far fa-check-circle">All Premium Plan Features</i>
                                   </li>
                                   <li>
                                    <i class="far fa-times-circle">Emergency Veterinary Care
                                    </i>
                                   </li>
                                   <li>
                                    <i class="far fa-check-circle">Pet Boarding (Up to 7 Days)</i>
                                   </li>
                                   <li>
                                    <i class="far fa-check-circle">Personalized Care</i>
                                   </li>
                                   <li>
                                    <i class="far fa-check-circle">24/7 Support</i>
                                   </li>
                                </ul>
                                </div>
                                <div class="pricing-footer">
                                  <div class="pricing-footer">
                                    <a href="#" class="btn" id="bookNowBtn2">Book Now</a>
                                  </div>
                                  
                                  <div id="confirmationMessage2" style="display: none;">
                                    <p>Thank you for your booking! please provide your details in contact-us page, we will contact you soon!</p>
                                  </div>
                                  
                                </div>
                                </div>
                  </div>
                  
            </div>
          </section>
          <section id="gallery">
            <h1 class="gallery-title">Our petopia gallery</h1>
            <p class="gallery-description">"Welcome to the PetCare Gallery! Explore heartwarming moments and adorable snapshots of pets from our community"</p>
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="images/getimg_ai_img-Iy0B1i31JgbVCqrw6SdFq.jpeg" alt="Pet Grooming">
                    <div class="overlay">
                        <h3>Pet Grooming</h3>
                  
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/getimg_ai_img-skwrdR3YWpfebFCJeZduy.jpeg" alt="Pet Training">
                    <div class="overlay">
                        <h3>Pet Training</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/deepimg-1737747885137.png" alt="Veterinary Care">
                    <div class="overlay">
                        <h3>Veterinary Care</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/268e9806-11508d94.png" alt="Pet Boarding">
                    <div class="overlay">
                        <h3>Pet Boarding</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/img-4JLcS0n0Kk3wgB3W4rNCT.jpeg" alt="Pet Walking">
                    <div class="overlay">
                        <h3>Pet Walking</h3>
                      
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/download (1).jpeg" alt="Pet Spa">
                    <div class="overlay">
                        <h3>Pet Spa</h3>
                        >
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/getimg_ai_img-c5OmEUJcOu7zda0FZtGcB.jpeg" alt="Pet Nutrition">
                    <div class="overlay">
                        <h3>Pet Nutrition</h3>
                    
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/download (2).jpeg" alt="Pet Photography">
                    <div class="overlay">
                        <h3>Pet Photography</h3>
                        
                    </div>
                </div>
                
            </div>
        </section>
        <section id="blogs">
          <div class="container">
          <div>
            <h2>Our Latest Blogs</h2>
            <p>Discover valuable insights, expert tips, and inspiring stories to keep your pet happy and healthy.</p>
            <div class="blogs-grid">
              <div class="blog-card">
                <img src="images/dog-grooming-BillHolden-Cultura-getty173806966-56a26af83df78cf772756546.jpg" alt="Blog 1">
                <div class="content">
                  <h3>Top 10 Dog Care Tips</h3>
                  <p>Learn the best ways to care for your dog and ensure they stay happy and healthy every day.</p>
                  <a href="#">Read More &rarr;</a>
                </div>
              </div>
              <div class="blog-card">
                <img src="images/cat.jpg" alt="Blog 2">
                <div class="content">
                  <h3>Understanding Your Cat's Behavior</h3>
                  <p>Decode your feline friend's behavior to build a deeper bond and care for them better.</p>
                  <a href="#">Read More &rarr;</a>
                </div>
              </div>
              <div class="blog-card">
                <img src="images/nutrition.jpg" alt="Blog 3">
                <div class="content">
                  <h3>Pet Nutrition Guide</h3>
                  <p>A complete guide to choosing the right food and ensuring balanced nutrition for your pets.</p>
                  <a href="#">Read More &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </section>
    
          <section id="contact-us">
            
            <div class="contact-container">
              <div class="contact-info">
                  <h1>Contact Us</h1>
                  <p>We’d love to hear from you! Feel free to reach out for inquiries or support.</p>
                  <ul>
                      <li><i class="fas fa-map-marker-alt"></i> 34 Glassmorphism Street, Display Flex City, New Delhi</li>
                      <li><i class="fas fa-envelope"></i> info@gmail.com</li>
                      <li><i class="fas fa-phone"></i> +91 9654 111 000</li>
                  </ul>
                  <div class="social-icons">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
              <div class="contact-form">
                  <form action="contact.php" method="POST">
                      <input type="text" name="name" placeholder="Name" required>
                      <input type="email" name="email" placeholder="Email" required>
                      <input type="text" name="subject" placeholder="Subject" required>
                      <textarea name="message" placeholder="Message" required></textarea>
                      <button class="btn" type="submit">Send Message</button>
                  </form>

                  

  <a href="auth/logout.php" class="btn1">Logout</a>

              </div>
              <div class="icon-box">
                <img src="images/icons8-running-rabbit-80.png" alt="icon">
                </div>
          </div>
          
          </section>
         


          <script src="js/script.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>