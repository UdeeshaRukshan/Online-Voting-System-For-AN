
<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/OVAN/js/myscript.js"></script>
    <title>Contact us page</title>
    <link rel="stylesheet" href="/OVAN/css/contact_us.css">
    
    
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
    <div class="form-area">
    <form action="/OVAN/form.php" method="POST">
     
<h2>Contact Us</h2>
       Your name: <br> <input type="text" name="username" class="input-1" required><br>
       
       
       Mobile Number: <br>
       <input type="phone" name="mobile"  pattern="[0-9]{10}" placeholder="1234567890" class="input-3" required> <br/>
       E-mail:<br/>
            <input type="email" name="email" placeholder="abc@gmail.com"  class="input-4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br/>
       Gender:<br/><br>
            <input type="radio" value="Male" name="gender" checked> Male 
            <input type="radio"  value="Female" name="gender">Female <br/><br/>     
       <p>Put your feedback here</p><br>
        <textarea name="feedback" id="text-area" cols="30" rows="10" required></textarea><br>

        <br><input type="checkbox" class="inputStyle" id="checkBox"  onclick="enableButton()"> Accept privacy policy and terms.<br/><br/>

        <input type="submit" name="submit" class="input-5" id="submit-btn">
        
        
    </form>
    
</div>
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