<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Simple Dropdown Menu Using HTML and CSS</title>
  <link rel="stylesheet" href="/OVAN/css/style.css">
  <link rel="stylesheet" href="/OVAN/css/imageslider.css">
  <script src="/OVAN/js/imageslider.js"></script>
  <script src="/OVAN/js/content.js"></script>

</head>
<body>
  <header>
  <a href="/OVAN/index.php" id="logo"><img src="/OVAN/images/cmawards.png" class="logo-img"></a> 
  <ul id="header">
   
     <li><a href="/OVAN/index.php" id="home">Home</a></li>
     <li>
       <a href="#">Awards ▾</a>

       <ul class="dropdown">
        <li><a href="/OVAN/musicd.php">Music</a></li>
        <li><a href="/OVAN/movie.php">Movie</a></li>
        <li><a href="/OVAN/Tvserise.php">Tv series</a></li>
        <li><a href="/OVAN/content_c.php">Content creators</a></li>
       </ul>
       </li>

     <li><a href="#">Vote now ▾</a>

        <ul class="dropdown">
          <li><a href="/OVAN/music.php">Music</a></li>
          <li><a href="/OVAN/movies.php">Movie</a></li>
          <li><a href="/OVAN/tvSeries.php">Tv series</a></li>
          <li><a href="/OVAN/contentCreators.php">Content creators</a></li>
        </ul>
      </li>
      <li><a href="/OVAN/contact_us.php">Contact Us</a></li>
     <li><a href="/OVAN/about.php">About Us</a> 
      <li>
      
      </div>

  </div>
      </li>
     
    </li>
     
     <a href="/OVAN/login.php" id="logo1">
      Login/sign up
     </a>
  </ul>
</header>
  <div class="slider">
    <div class="slides">
      <!--radio buttons start-->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!--radio buttons end-->
      
      <!--slide images start-->
      <div class="slide first">
      <a href=""> <img src="/OVAN/images/johnwick-2.jpg" alt="image1"></a>
      </div>
      <div class="slide">
      <a href=""> <img src="/OVAN/images/avengers-1.jpeg" alt="image2"></a>
      </div>
      <div class="slide">
      <a href=""> <img src="/OVAN/images/mj_beatit.jpg"   alt="image3"></a>
      </div>
      <div class="slide">
       <a href=""> <img src="/OVAN/images/inception.jpg" alt="image4"></a>
      </div>
      <!--slide images end-->

      <!--automatic navigation start-->
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
  </div>
  <!--image slider end-->
  
  <!--Section start-->
  <section> 
    <div class="header-p">NEWS</div>
    <div class="content-header">
    <div class="news" onclick="news()"><</div>
    <div class="galary" onclick="galary()">●</div>
    <div class="more" onclick="news2()">></div>
    </div>
    <script src="content.js"></script>
    <div class="content-0" >

      <div class="content-1"  >
              <img src="/OVAN/images/taylor_swift.webp" class="taylor-img" id="para" >
              <p class="taylor-topic" id="topic-para"><br>5 Takeaways From Taylor Swift's New Album 'Midnights</p>
              <p class="taylor-details" id="t1-p">
              <br>Taylor Swift performs at the NSAI 2022 Nashville Songwriter Awards at Ryman Auditorium on Sept. 20, 2022.
              <br><br>Taylor Swift is dressing for revenge. Back when August was slipping away, the singer stepped onto the MTV Video Music 
              Awards red carpet in a silver crystal dress dripping with 
              reputation nostalgia.
              </p></div>

      <div class="content-2">
              <img src="/OVAN/images/the_weekend.jpg" class="taylor-img" id="para-1" >
              <br><br>
              <p class="weekend-topic" id="topic2-para" >THE WEEKND TO EMBARK ON FIRST EVER GLOBAL STADIUM TOUR
              </p>
              <br><br>
              <p class="weekend-details"  id="t2-p">ANNOUNCES LEG 1 OF AFTER HOURS TIL DAWN TOUR WITH SPECIAL GUEST DOJA CAT
                TOUR TO SHOWCASE THE MUSICAL EXPERIENCE OF THE PAST TWO ALBUMS FOR THE FIRST TIME LIVE           
                LAUNCHES XO HUMANITARIAN FUND WITH...</p>
            </div>
    </div>
    

   
  </section>
 
  <div class="sponsors">
    <img class="cocacola" src="/OVAN/images/cocacola.png">
    <img class="google" src="/OVAN/images/google1.png">
    <img class="hayleys" src="/OVAN/images/hayleys.png">
    <img class="berkishhathway" src="/OVAN/images/berkishhathaway.webp">
    <img class="redbull" src="/OVAN/images/redbull.png">
  </div>
   <!--Section end-->
<!--footer start-->
<footer>

  <div class="information">
    <fieldset><legend>Information</legend>
      <ul class="information-list" type="square">
        <li>Terms & conditions</li>
        <li>Privacy policy</li>
        <li>More</li>
      </ul></fieldset>
    
  </div>
  <div class="let_us">
    <fieldset>
    <legend>Let us help you</legend>
    <ul class="information-list" type="square">
    <a href="/OVAN/indexN.php"> <li>Recover account</li></a>
      <li>How to vote</li>
      <li>Our services</li>
    </ul>
  </fieldset>
    
  </div>
  <div class="visit_us"><p class="visit-p">visit us</p><br>
    <a href="facebook.com"><img src="/OVAN/images/fb-img.png" class="fb-img"></a>
    <a href="youtube.com"><img src="/OVAN/images/yt-img.jpg" class="yt-img"></a>
    <a href="twitter.com"><img src="/OVAN/images/twitter-img.jpg" class="twitter-img"></a>
  </div>
  <div class="footer_logo">
    <img src="/OVAN/images/cmawards.png" class="footer-img">
  </div>
  
</footer>
<div class="copyright-sec">
  © Copyright @Colombiana Awards (PVT) Ltd. All Right Reserved.
</div>


  

  
</body>
</html>