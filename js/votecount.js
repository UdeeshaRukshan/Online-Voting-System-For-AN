var movie1=2;
var movie2=2;
var movie3=2;
var movie4=3;
var movie5=2;
var mresult=0;

localStorage.setItem('mresult',mresult);


var tvseries1=1;
var tvseries2=1;
var tvseries3=1;
var tvseries4=2;
var tvseries5=1;
var tresult=0
localStorage.setItem('tresult',tresult);

var music1=1;
var music2=1;
var music3=1;
var music4=2;
var music5=1;
var muresult=0;

localStorage.setItem('muresult',muresult);

var creator1=1;
var creator2=1;
var creator3=1;
var creator4=2;
var creator5=1;
var ccResult=0;

localStorage.setItem('ccResult',ccResult);




function movies(whichone){
    if(whichone=='mm1'){
    if(movie1==2){
        document.getElementById("btnOne-1").disabled = true;
        document.getElementById("btnTwo-2").disabled = true;
        document.getElementById("btnThree-3").disabled = true;
        document.getElementById("btnFour-4").disabled = true;
        document.getElementById("btnFive-5").disabled = true;
        alert("Movie Vote exceed!");
        
    }
    
    ++movie1;
}
    else if(whichone=='mm2'){
        if(movie2==2){
            document.getElementById("btnOne-1").disabled = true;
            document.getElementById("btnTwo-2").disabled = true;
            document.getElementById("btnThree-3").disabled = true;
            document.getElementById("btnFour-4").disabled = true;
            document.getElementById("btnFive-5").disabled = true;
            alert("Movie Vote exceed!");
        }
        ++movie2;
       

    }
    else if(whichone=='mm3'){
        if(movie3==2){
            document.getElementById("btnOne-1").disabled = true;
            document.getElementById("btnTwo-2").disabled = true;
            document.getElementById("btnThree-3").disabled = true;
            document.getElementById("btnFour-4").disabled = true;
            document.getElementById("btnFive-5").disabled = true;
            alert("Movie Vote exceed!");
        }
        ++movie3;

    }
    else if(whichone=='mm4'){
        if(movie4==2){
            document.getElementById("btnOne-1").disabled = true;
            document.getElementById("btnTwo-2").disabled = true;
            document.getElementById("btnThree-3").disabled = true;
            document.getElementById("btnFour-4").disabled = true;
            document.getElementById("btnFive-5").disabled = true;
            alert("Movie Vote exceed!");
           
        }
        ++movie4;

    }
    else if(whichone=='mm5'){
        if(movie5==2){
            document.getElementById("btnOne-1").disabled = true;
            document.getElementById("btnTwo-2").disabled = true;
            document.getElementById("btnThree-3").disabled = true;
            document.getElementById("btnFour-4").disabled = true;
            document.getElementById("btnFive-5").disabled = true;
            alert("Movie Vote exceed!");
        }
       ++movie5;

    }
   
    

};

function creator(whichone){
    if(whichone=='c1'){
        if(creator1==2){
            document.getElementById("cc-btnOne").disabled = true;
            document.getElementById("cc-btnTwo").disabled = true;
            document.getElementById("cc-btnThree").disabled = true;
            document.getElementById("cc-btnFour").disabled = true;
            document.getElementById("cc-btnFive").disabled = true;
            alert("Content creator's Vote exceed!");
           
        }
        ++creator1;
    }
    

    else if(whichone=='c2'){
        if(creator2==2){
            document.getElementById("cc-btnOne").disabled = true;
            document.getElementById("cc-btnTwo").disabled = true;
            document.getElementById("cc-btnThree").disabled = true;
            document.getElementById("cc-btnFour").disabled = true;
            document.getElementById("cc-btnFive").disabled = true;
            alert("Content creator's Vote exceed!");
           
        }
        ++creator2;

    }
    else if(whichone=='c3'){
        if(creator3==2){
            document.getElementById("cc-btnOne").disabled = true;
            document.getElementById("cc-btnTwo").disabled = true;
            document.getElementById("cc-btnThree").disabled = true;
            document.getElementById("cc-btnFour").disabled = true;
            document.getElementById("cc-btnFive").disabled = true;
            alert("Content creator's Vote exceed!");
           
        }
        ++creator3;

    }
    else if(whichone=='c4'){
        if(creator4==2){
            document.getElementById("cc-btnOne").disabled = true;
            document.getElementById("cc-btnTwo").disabled = true;
            document.getElementById("cc-btnThree").disabled = true;
            document.getElementById("cc-btnFour").disabled = true;
            document.getElementById("cc-btnFive").disabled = true;
            alert("Content creator's Vote exceed!");
           
        }
        ++creator4;

    }
    else if(whichone=='c5'){
        if(creator5==2){
            document.getElementById("cc-btnOne").disabled = true;
            document.getElementById("cc-btnTwo").disabled = true;
            document.getElementById("cc-btnThree").disabled = true;
            document.getElementById("cc-btnFour").disabled = true;
            document.getElementById("cc-btnFive").disabled = true;
            alert("Content creator's Vote exceed!");
           
        }
        ++creator5;

    }
};

function music(whichone){
    if(whichone=='m1'){
        if(music1==2){
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnTwo").disabled = true;
            document.getElementById("m-btnThree").disabled = true;
            document.getElementById("m-btnFour").disabled = true;
            document.getElementById("m-btnFive").disabled = true;
            alert("Music Vote exceed!");
           
        }
        ++music1;
    }
    else if(whichone=='m2'){
        if(music2==2){
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnTwo").disabled = true;
            document.getElementById("m-btnThree").disabled = true;
            document.getElementById("m-btnFour").disabled = true;
            document.getElementById("m-btnFive").disabled = true;
            alert("Music Vote exceed!");
           
        }
        ++music2;

    }
    else if(whichone=='m3'){
        if(music3==2){
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnTwo").disabled = true;
            document.getElementById("m-btnThree").disabled = true;
            document.getElementById("m-btnFour").disabled = true;
            document.getElementById("m-btnFive").disabled = true;
            alert("Music Vote exceed!");
           
        }
        ++music3;

    }
    else if(whichone=='m4'){
        if(music4==2){
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnTwo").disabled = true;
            document.getElementById("m-btnThree").disabled = true;
            document.getElementById("m-btnFour").disabled = true;
            document.getElementById("m-btnFive").disabled = true;
            alert("Music Vote exceed!");
           
        }
        ++music4;

    }
    else if(whichone=='m5'){
        if(music5==2){
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnOne").disabled = true;
            document.getElementById("m-btnTwo").disabled = true;
            document.getElementById("m-btnThree").disabled = true;
            document.getElementById("m-btnFour").disabled = true;
            document.getElementById("m-btnFive").disabled = true;
            alert("Music Vote exceed!");
           
        }
        ++music5;

    }
   
};


function tvseries(whichone){
    if(whichone=='v1'){
        if(tvseries1==2)
        {
            
            document.getElementById("tv-btnOne").disabled = true;
            document.getElementById("tv-btnTwo").disabled = true;
            document.getElementById("tv-btnThree").disabled = true;
            document.getElementById("tv-btnFour").disabled = true;
            document.getElementById("tv-btnFive").disabled = true;
            alert("Tvseries Vote exceed!");
           
        }
        ++tvseries1;
    }
    else if(whichone=='v2'){
        if(tvseries2==2){
            document.getElementById("tv-btnOne").disabled = true;
            document.getElementById("tv-btnTwo").disabled = true;
            document.getElementById("tv-btnThree").disabled = true;
            document.getElementById("tv-btnFour").disabled = true;
            document.getElementById("tv-btnFive").disabled = true;
            alert("Tvseries Vote exceed!");
        }
        ++tvseries2;
    }
    else if(whichone=='v3'){
        if(tvseries3==2){
            document.getElementById("tv-btnOne").disabled = true;
            document.getElementById("tv-btnTwo").disabled = true;
            document.getElementById("tv-btnThree").disabled = true;
            document.getElementById("tv-btnFour").disabled = true;
            document.getElementById("tv-btnFive").disabled = true;
            alert("Tvseries Vote exceed!");
        }
        ++tvseries3;

    }
    else if(whichone=='v4'){
        if(tvseries4==2){
            document.getElementById("tv-btnOne").disabled = true;
            document.getElementById("tv-btnTwo").disabled = true;
            document.getElementById("tv-btnThree").disabled = true;
            document.getElementById("tv-btnFour").disabled = true;
            document.getElementById("tv-btnFive").disabled = true;
            alert("Tvseries Vote exceed!");
        }
        ++tvseries4;

    }

    else if(whichone=='v5'){
        if(tvseries5==2){
            document.getElementById("tv-btnOne").disabled = true;
            document.getElementById("tv-btnTwo").disabled = true;
            document.getElementById("tv-btnThree").disabled = true;
            document.getElementById("tv-btnFour").disabled = true;
            document.getElementById("tv-btnFive").disabled = true;
            alert("Tvseries Vote exceed!");
            

        }
        ++tvseries5;
       
    }
    
    
};

function movieResult(){

    if(movie1>movie2){
        mresult=movie1++;
        localStorage.setItem('mresult','Inception ');
    }
    
    else if(movie2>movie3){
        mresult=movie2++;
        localStorage.setItem('mresult','Avengers ');
    }
    else if(movie3>movie4){
        mresult=movie3++;
        localStorage.setItem('mresult','John wick ');
    }
    else if(movie4>movie5){
        
        mresult=movie4++;
        localStorage.setItem('mresult','F9 ');
        
    }
    else if(movie5>mresult){
        mresult=movie5++;
        localStorage.setItem('mresult','Spiderman ');
    }
    document.getElementById('r1').innerHTML=localStorage.getItem('mresult');
}
function musicResult(){
    if(music1>music2){
        muresult=music1;
        localStorage.setItem('muresult','One dance ');
    }
    
    else if(music2>music3){
        muresult=music1;
        localStorage.setItem('muresult','Rockstar');
        
    }
    else if(music3>music4){
        muresult=music1;
        localStorage.setItem('muresult','shape of you ');
    }
    else if(music4>music5){
        
        muresult=music1;
        localStorage.setItem('muresult','Baby ');
        
    }
    else if(music5>muresult){
        muresult=music1;
        localStorage.setItem('muresult','Starboy');
    }
    document.getElementById('r2').innerHTML=localStorage.getItem('muresult');

}

function tvseriesresult(){
    if(tvseries1>tvseries2){
        tresult=tvseries1;
        localStorage.setItem('tresult','Breaking bad');
    }
    
    else if(tvseries2>tvseries3){
        tresult=tvseries2;
        localStorage.setItem('tresult','Vikings');
        
    }
    else if(tvseries3>tvseries4){
        tresult=tvseries3;
        localStorage.setItem('tresult','Game of thrones');
    }
    else if(tvseries4>tvseries5){
        
        tresult=tvseries4;
        localStorage.setItem('tresult','Prison break');
        
    }
    else if(tvseries5>tresult){
        tresult=tvseries5;
        localStorage.setItem('tresult','Squid game');
    }
    document.getElementById('r3').innerHTML=localStorage.getItem('tresult');
}


function contentCreResult(){
    if(creator1>creator2){
        ccResult=creator1;
        localStorage.setItem('ccResult','MR Beast');
    }
    
    else if(creator2>creator3){
        ccResult=creator1;
        localStorage.setItem('ccResult','Logan Paul');
        
    }
    else if(creator3>creator4){
        ccResult=creator1;
        localStorage.setItem('ccResult','Pewdiepie');
    }
    else if(creator4>creator5){
        
        ccResult=creator1;
        localStorage.setItem('ccResult','Dude Perfect');
        
    }
    else if(creator5>ccResult){
        ccResult=creator1;
        localStorage.setItem('ccResult','Zach King');
    }
    document.getElementById('r4').innerHTML=localStorage.getItem('ccResult');
}



