<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tv serise main</main></title>

    

    <script src="/js/myscript1.js"></script>

    <style>
        body{
    background-color: black;
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
    

.container{
    width:90%;
    padding:20px;
    margin: 100px auto;
    display:flex;
    flex-direction: row;
    justify-content: center;
    border-color: blue;
}

.box{
    width:250px;
    margin:0 10px ;
    box-shadow: 0 0 20px 2px gold;
    transform: 1s;
}

.box img{
    display: block;
    width: 100%;
    border-radius: 5px;
}

.box:hover{
    transform: scale(1.3);
    z-index: 2;

}
#btn{
font-size: 20px;
font-weight: bold;
border:2px solid gold;
border-radius: 25px;
color: black;


}
#btn:hover{

border: 2px solid black;
} 
.music_m{
    color: gold;
    font-weight: 300;
    font-family: cursive;
    font-size: 50px;
    justify-content: center;
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
                <li><a href=/OVAN/music.php">Music</a></li>
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
   <div class="music_m">
    <h1>TV SERISE</h1>
   </div>
    <div class="container">
        
        <div class="box">
            <img src="/OVAN/images/images1/TV_Serise/braking_bad_main.jpg" width="300px" height="400px">
            <br>
            <a href="Tvserise1.php">
                <button id="btn" type="button" style="background:gold" >MORE INFO</button>
            </a>
            
        </div>
        <div class="box">
            <img src="/OVAN/images/images1/TV_Serise/viking_main.jpg" width="300px" height="400px">
            <br>
            <a href="/OVAN/Tvserise2.php">
                <button id="btn" type="button" style="background:gold" >MORE INFO</button>
            </a>
        </div>
        <div class="box">
            <img src="/OVAN/images/images1/TV_Serise/GOT_main.jpg" width="300px" height="400px">
            <br>
            <a href="/OVAN/Tvserise3.php">
                <button id="btn" type="button" style="background:gold" >MORE INFO</button>
            </a>
        </div>
        <div class="box">
            <img src="/OVAN/images/images1/TV_Serise/prison_break_main.jpg" width="300px" height="400px">
            <br>
            <a href="/OVAN/Tvserise4.php">
                <button id="btn" type="button" style="background:gold" >MORE INFO</button>
            </a>
        </div>
        <div class="box">
            <img src="/OVAN/images/images1/TV_Serise/SG_main.jpg" width="300px" height="400px">
            <br>
            <a href="/OVAN/Tvserise5.php">
                <button id="btn" type="button" style="background:gold" >MORE INFO</button>
            </a>
        </div>
    </div>
 
</body>
</html>