<!DOCTYPE html>
<html lang="en">
<head>
  <title>WORLD LIVE</title>
    <?php include 'link/links.php';?>
    <?php include 'css/style.php';?>
</head>
<body onload="fetch()">

<nav class="navbar navbar navbar-light navbar-expand-lg nav_style  p-3"style="color: border: 1px solid green";><img src="image/logo8.png" style="height: 50px; width: 50px">
  <a class="navbar-brand ml-5 py-2 px-2" href="index.php" style="color:white;">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav pr-5 ml-auto text-capitalize " >
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#contactid">COVID-HELP<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">ABOUT COVID</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="liveindia.php">INDIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">WORLD</a>
      </li>
      
     
    
    </ul>
   

  </div>
</nav>








<div class="mt-5">
    <h3 class="text-uppercase covupdate text-center ">RESPECT CORONA WARRIORS!!</h3>
</div>


<div class="slideshow-container mt-2" style="text-align:center;">

<div class="mySlides fade">
   <a href="https://www.nhp.gov.in" ><img src="image/wariors2.jpg"
 style="width:100%; height:350px"></a>
 
</div>

<div class="mySlides fade">
   <a href="https://www.nhp.gov.in" ><img src="image/wariors1.jpg"
 style="width:100%; height:350px"></a>
 
</div>

<div class="mySlides fade">
   <a href="https://www.nhp.gov.in" ><img src="image/wariors3.jpeg"
 style="width:100%; height:350px"></a>
 
</div>






</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>






<section class="corona_update container-fluid">
  <div class="mb-3 mt-5">
    <h3 class="text-uppercase covupdate text-center ">covid-19 World updates</h3>
</div>
 <div class="table-responsive table-hover">
  <table class="table table-bordered table-striped text-center table-hover" id="tbval";style="  display:block;height:600px;overflow-y:scroll;">
    <tr>
     
      <th >COUNTRY NAME</th>
      <th>TOTAL CONFORMED</th>
      <th>TOTAL RECOVERED</th>
      <th>TOTAL DEATHS</th>
       <th>NEW CASES</th>
      <th>NEW RECOVERED</th>
      <th>NEW DEATHS</th>
      <th>UPDATE DATE & TIME</th>
      
    </tr>
  </table>
   
 </div>
</section>

<div>
<a href="#" class="button my-4 mx-5"style="width:200px;height: 50px; margin: auto;">SWIPE UP</a>

</div>

<div style="margin:0px 10px 10px 10px">

 
  

    <a href="liveindia.php" class="button">INDIAN STATE WISE</a>


  
    <a href="dailyindia.php" class="button">DAILY CASES IN INDIA</a>
  
</div>



<div class="banner">
<a href="https://www.who.int"><img src="image/banner-covid.jpg" height="200" width="100%"></a>
</div>










<!-////////////////////////fotter/////////-->
<footer class=" mb-0 ">
  <div class="footer_style text-white text-center container-fluid py-3 ">
    <p> Copyright By ASHISH KUMAR
       </p>
      <p>Email <a href="https://www.gmail.com/ashishkumarjashwal@gmail.com">👉ashishkumarjashwal@gmail.com</a></p>
  </div>

  
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/ waypoints/4.0.1/jquery.waypoints.min.js" integrity="
 sha256-jDnOKIOq2KNSQZTCBTEnsp76FnfMEttF6AV2DF2FFNE="crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"integrity="sha256-JtQPj3xubSoapVMalijPNOMODHOAtgh/gwFYuN5rik="crossorigin="anonymous">
    
  </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/ popper.min.js"></script> 

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">


</script>

















<script>


  function fetch(){
    $.get("https://api.covid19api.com/summary",

      function(data){
        var tbval=document.getElementById('tbval');
        for(var i=1; i<(data['Countries'].length);
          i++){
          var x=tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background='#9600FE';
          tbval.rows[i].cells[0].style.color='#fff';
           


           x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.border='2px solid black';
          tbval.rows[i].cells[1];



           x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.border='2px solid black';
          tbval.rows[i].cells[2].style.color=' #17A589';



           x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.border='2px solid black';
          tbval.rows[i].cells[3].style.color='#E82424';


           x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.border='2px solid black';
          tbval.rows[i].cells[4];


           x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
          tbval.rows[i].cells[5].style.border='2px solid black';
          tbval.rows[i].cells[5].style.color='#17A589';



           x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[6].style.border='2px solid black';
          tbval.rows[i].cells[6].style.color='#E82424';


          x.insertCell(7);
          tbval.rows[i].cells[7].innerHTML=data['Countries'][i-1]['Date'];
          tbval.rows[i].cells[7].style.border='2px solid black';
          tbval.rows[i].cells[7];
        }
      }

      );

  }
</script>
</body>
</html>

