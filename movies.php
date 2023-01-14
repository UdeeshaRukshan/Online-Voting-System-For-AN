<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="/OVAN/css/movies.css">
    <script src="/OVAN/js/votecount.js"></script>

    <title>Movies</title>
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
       
        <div>
            <ul class="menu" type="circle">
                <li class="menu"><a href="/OVAN/movies.php">MOVIES</a></li>
                <li class="menu"><a href="/OVAN/tvSeries.php">TV SERIES</a></li>
                <li class="menu"><a href="/OVAN/music.php">MUSIC</a></li>
                <li class="menu"><a href="/OVAN/contentCreators.php">CONTENT CREATORS</a></li>
            </ul>
        </div>

        <h1>MOVIES</h1>

        <div class="row">
        
            <div class="column">
                <img id="image1" src="/OVAN/images/imagesH/inception.jpg" width="100%;">
                <div id="container">
                <button id="btnOne-1" onclick="movies('mm1')">VOTE</button>
                </div>
            </div>
           
            
            <div class="column">
                    <img id="image2" src="/OVAN/images/imagesH/avengers.jpg" width="100%;">
                    <div id="container2">
                        <button id="btnTwo-2" onclick="movies('mm2')">VOTE</button>
                    </div>
            </div>

            <div class="column">
                <img id="image3" src="/OVAN/images/imagesH/john wick.jpg" width="100%;">
                <div id="container3">
                <button id="btnThree-3" onclick="movies('mm3')">VOTE</button>
                </div>
            </div>

            <div class="column">
                <img id="image4" src="/OVAN/images/imagesH/spiderman.jpg" width="100%;">
                <div id="container4">
                <button id="btnFour-4" onclick="movies('mm4')">VOTE</button>
                </div>
            </div>

            <div class="column">
                <img id="image5" src="/OVAN/images/imagesH/fast 6.jpg" width="100%;">
                <div id="container5">
                <button id="btnFive-5" onclick="movies('mm5')">VOTE</button>
                </div>
            </div>

        </div>
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
      <img src="/images/cmawards.png" class="footer-img">
    </div>
    
  </footer>
  <div class="copyright-sec">
    © Copyright @Colombiana Awards (PVT) Ltd. All Right Reserved.
  </div>
  

        
    </body>
</html>