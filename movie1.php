<!DOCTYPE html>
<html lang="en">
<head>
  
   <title>INCEPTION DETAILS</title>
   
   <link rel="stylesheet" href="/style/style.css">

   <style>
      
   *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
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
    


.banner{
    width: 100%;
    height: 140vh;
    position: relative;
    overflow: hidden;
}
.slider{
    width:100%;
    height: 140vh;
    position: absolute;
    top: 0;

}
#slideImg{
    width: 100%;
    height: 100%;
    animation: zoom 3s linear infinite ;

}
@keyframes zoom{

   0%{
      transform: scale(1.3);
   }
   15%{
      transform: scale(1);
   }
   85%{
      transform: scale(1);
   }
   100%{
      transform: scale(1.3);
   }

}


.overlay{
   width: 100%;
   height: 140vh;
   background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
   position: absolute;
   top: 0;

}
.content{
   width: 60%;
   margin: 160px auto 0;
   text-align: center;
   color:gold;

}
.content h1{
   font-size: 60px;
   font-family: cursive;
}
.content h3{
   width: 80%;
   margin: 20px auto 100px;
   font-weight: 100;
   line-height: 25px;
   font-family: cursive;
}
button{
   width: 200px;
   padding: 15px 0;
   text-align: center;
   margin: 0 10px;
   border-radius: 25px;
   font-weight: bold;
   border: 2px solid white;
   background: black;
   color: #fff;
   cursor: pointer;
   transition: background 0.5s;
   font-family: cursive;

}
button:hover{
   background: transparent;
   border: 2px solid gold;

}

.clickChange{
   width:50%;
   height: 20%;
   margin: 20px auto 100px;
   background-color: gold;
   text-align: center;
   display: block;
   border: 2px solid gold;
   border-radius:25px ;

}
.clickChange h1{
   font-size: 30px;

}
#paraOV{
   font-weight: bold;
}

.castDetails{
   display:inline-flex;
   width:50%;
   height:30%;
   background-color: black;
   justify-content: space-around;
   margin-left:25%;
   border-radius:25px;
    
}
.castImg img{
   border-radius: 50%;
   width: 10vh;
   height: 20vh;
   

}
hr{
   border: 2px solid black;
}
.castN{
   color: #fff;
   text-align: center;
   font-weight: bold;
   font-family: cursive;
}










   </style>

</head>

</style>

<body onload="slider()" >  
   <header>
      <a href="/OVAN/index.php" id="logo"><img src="/images/cmawards.png" class="logo-img"></a> 
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
   <div class="banner">
      <div class="slider">
      <img src="/OVAN/images/images1/inception/inception_0.jpg" id="slideImg">
   </div>
   <div class="overlay">
      <div class="content">
         <h1>INCEPTION</h1>
         <h3> FURTHER DETAILS CAN BE OBTAINED BY CLICKING THE BUTTON BELOW</h3>

           

            <div>
               <button type="button" onclick="Overview()">OVERVIEW</button>
               <button type="button"  onclick="Rating()" >RATING</button>

               
            </div>

            


      </div>
   
<br>
<br>
<br>
      <div class="clickChange" id="changeOnclick">
         <h1>OVERVIEW</h1>
         <br>
         <p id="paraOV">
            Inception is a 2010 science fiction action film written and directed by Christopher Nolan, who also produced the film with Emma Thomas, his wife. The film stars Leonardo DiCaprio <br>
            as a professional thief who steals information by infiltrating the subconscious of his targets. He is offered a chance to have his criminal history erased as payment for the<br>
            implantation of another person's idea into a target's subconscious.
            The ensemble cast includes Ken Watanabe, Joseph Gordon-Levitt, Marion Cotillard, Elliot Page,Tom Hardy, Dileep Rao, Cillian Murphy, Tom Berenger, and Michael Caine.<br>
             
            

         </p>
      </div>
      
         <div class="castDetails" >
            <div class="castImg">
               <img src="/OVAN/images/images1/inception/castimg_1.jpg">
               <p class="castN">MAIN ACTOR</p>
               <p class="castN">Leonardo DiCaprio</p>
            </div>
            <div class="castImg">
               <img src="/OVAN/images/images1/inception/castimg_3.jpg">
               <p class="castN">MAIN ACTRESS</p>
               <p class="castN">Marion Cotillard</p>
            </div>
            <div class="castImg">
               <img src="/OVAN/images/images1/inception/castimg_2.jpg">
               <P class="castN">DIRECTOR</P>
               <P class="castN">Christopher Nolan</P>
            </div>
            <div class="castImg">
               <img src="/OVAN/images/images1/inception/castimg_4.jpg">
              <p class="castN">PRODUCER</p>
              <p class="castN">Emma Thomas</p>
            </div>
         </div>
         

      
   </div>  
   
  
   
   <script>
      var slideImg =document.getElementById("slideImg");

      var images = new Array(
        "/OVAN/images/images1/inception/inception_0.jpg",
        "/OVAN/images/images1/inception/inception_2.jpg",
        "/OVAN/images/images1/inception/inception_3.jpg"
        
      );

      var len = images.length;
      var i=0;

      function slider(){
         if(i > len-1){
            i=0;
         }
         slideImg.src = images[i];
         i++;

         setTimeout('slider()',3000);
      }

      function Rating(){
         document.getElementById('changeOnclick').innerHTML="<h1> RATING <h1> <br> <h2> The film holds an approval rating of 87% based on 361 reviews, with an average rating of 8.10/10.<h2>";
            
      
      };

      function Overview(){
         document.getElementById('changeOnclick').innerHTML="<h1>OVERVIEW</h1> <br> <b>Inception is a 2010 science fiction action film written and directed by Christopher Nolan, who also produced the film  Emma Thomas, his wife. The film stars Leonardo DiCaprio as a professional thief who steals information by infiltrating the subconscious of his targets. He is offered a chance to have his criminal history erased  payment for theimplantation of another person's idea into a target's subconscious.The ensemble cast includes Ken Watanabe, Joseph Gordon-Levitt, Marion Cotillard, Elliot Page,Tom Hardy, Dileep Rao, Cillian Murphy, Tom Berenger, and Michael Caine<b>";
      };
    




   </script>
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
   <div class="footer_logo">
     <img src="/OVAN/images/cmawards.png" class="footer-img">
   </div>
   
 </footer>
 <div class="copyright-sec">
   © Copyright @Colombiana Awards (PVT) Ltd. All Right Reserved.
 </div>
 
 
   
 
   
 </body>
 </html>
</body>
</html>