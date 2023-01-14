
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Admin New</title>
    <script src=/OVAN/js/votecount.js></script>
    <style>

        *{
            margin:0;
            padding:0;
        }
        header{
  display:flex;
  background-color: #000000;

 
 }
  #header{
      width:100%;
      height:15vh;
      justify-content: space-between;
     
      
  }
  ul{
  
  list-style: none;
  background: #000000;
  align-items: center;
  border-radius: 10px;
  margin-top: 3.5vh;
  
  
  }
  ul li {
  display: inline-block;
  position: relative;

  }
  #logo {
    padding-left: 10px;
    text-decoration: none;
    text-align: center;
   
    }
    #profile-img{
      color: #FFF;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
  
      }

      .logo-img{
        height: 12vh;
        width: 12vh;
        background-color: #000000;
      }
  
  

  ul li a  {
  display: block;
  padding: 20px 30px;
  margin-left:10px;
  color: #FFF;
  text-decoration: none;
  text-align: center;
  font-size: 18px;
  }
  
  ul li ul.dropdown li {
  display: block;
  
  }
  ul li ul.dropdown {
  width: 30vh;
  
  margin-left:10px;
  color:goldenrod;
  background: #171515;
  position: absolute;
  z-index:999;
  display: none;
  border-radius: 8px;
  }
  ul li a:hover {
  background: #1a1a1a;
  color:goldenrod;
  border-radius: 8px;
  }
  ul li:hover ul.dropdown {
    margin-top:-0.5vh;
  display: block;
  
  }
  #logo1{
    font-size: 18px;
    margin-top: 2.5vh;
    margin-right: 2vh;
    float:right;
    text-decoration: none;
    color: #FFF;
  }
  
  
 body{
   background-color:gold
 }   
 .details{
    display: flex;
    justify-content: space-between;
    font-family: cursive;
    text-align: center;
    color: gold;
    margin:0;
    padding: 20px;
    
    
}
.adminD{
    width:30%;
    height:130vh;
    border: 5px solid red;
    background-color: black;

}
.feedback{
    width:40%;
    height:130vh;
    border: 5px solid red;
    background-color: black;
}
.VotingResult{

    width:40%;
    height:130vh;
    border: 5px solid red;
    background-color: black;
    justify-content: center;

}
.adminpic{
    border-radius: 50%;
    border: 6px solid gold;
}
.VR{
    width: 40px;
    padding: 65px 230px;
    border: 5px solid red;
    font-size: 20px;
}
.viewButton{
    color: ;
}
    footer{
        background-color: rgb(0, 0, 0);
        color:rgb(255, 255, 255);
        width: 100%;
        height:35vh;
        display:flex;
        justify-content: space-between;
        
      }
      .information{
        width: 35vh;
        height:25vh;
        font-size: 17px;
        list-style-type:square ;
        margin: 2vh;
        color: #FFF;
      }
      div ul li{
        display:flex;
        margin:2vh;
        color: #FFF;
        list-style-type:disc;
        

      }
      .let_us{
        width: 35vh;
        height:25vh;
        font-size: 17px;
        list-style-type:square ;
        margin: 2vh;
        color: #FFF;
        border-top:none;

      }
      .copyright-sec{
        width:100%;
        height:3vh;
        background-color: white;
      }

     .visit_us{
      width: 35vh;
        height:25vh;
      
     }
     .visit-p{
      font-size: 17px;
      margin-top: 2vh;
     }
      .fb-img,.yt-img,.twitter-img{
        margin-top: 6vh;
        width: 5vh;
        height: 5vh;
        border-radius: 40px;
        padding-left: 5px;
    }
      .footer-img{
        width: 20vh;
        height: 20vh;
        float:inline-end;
      margin-top: 6vh;
      margin-right: 4vh;
      }

      
      .copyright-sec{
        text-align: center;
        font-style:italic;
        font-weight: bold;
      }





    </style>
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

    <div class="details">
        <div class="adminD">
            <h1>Hellow admin</h1>
            <h1>Admin Details</h1>
            <img src="/OVAN/images/images1/adminpage/admin_new.jpg" class="adminpic">
            <h2>JOHN MARKWOOD</h2>
            <h3>Web Developer At Colombiana Award</h3>
            <a href="/OVAN/index.php">Logout</a>

        </div>
        <div class="feedback">
            <h1>Feedback</h1>
           <a href="/OVAN/form1.php"> <button type="button" class="viewButton">View Feedback</button></a>


        </div>
        <div class="VotingResult">
            <h1>Voting Result</h1>
            

            <div class="VR" id="r1">
            <button id=viewR1 onclick="movieResult()">view movie</button>

                 Best Movie:

            </div>
            <div class="VR" id="r2">
            <button id=viewR2 onclick="musicResult()">view music</button>
                Best Music:

            </div>
            <div class="VR" id="r3">
            <button id=viewR3 onclick="tvseriesresult()">view tvseries</button>
                 Best Tv-serise:

            </div>
            <div class="VR" id="r4">
            <button id=viewR4 onclick="contentCreResult()">view content</button>
                Best Content Creators:

            </div>

        </div>

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
      <li>Recover account</li>
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
  <div class="footer_logo">logo</div>
  
</footer>
<div class="copyright-sec">
  © Copyright @Colombiana Awards (PVT) Ltd. All Right Reserved.
</div>



    
</body>
</html>