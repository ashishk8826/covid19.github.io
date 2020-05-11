<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAILY INDIA </title>
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
        <a class="nav-link" href="worldlive.php">WORLD</a>
      </li>
      
     
    
    </ul>
   

  </div>
</nav>


<!****************corona latest update************-->
<div class="mt-5">
    <h3 class="text-uppercase covupdate text-center ">DONATE NOW IN PM-CARES FUND!!</h3>
</div>


<div class="slideshow-container mt-2" style="text-align:center;">

<div class="mySlides fade">
   <a href="https://www.pmcares.gov.in" ><img src="image/pmcare1.jpg" style="width:100%; height:300px"></a>
 
</div>

<div class="mySlides fade">
 
 <a href="https://www.pmcares.gov.in" ><img src="image/banner1.jpg" style="width:100%; height:300px"></a>
 
</div>

<div class="mySlides fade">
 
   <a href="https://www.pmcares.gov.in" ><img src="image/pmcare2.jpg" style="width:100%; height:300px"></a>
  
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











<section class="corona_update table-responsive container-fluid" >
  <div class="mt-5 mb-2 ">
    <h3 class="text-uppercase covupdate text-center ">DAILY CASES IN INDIA</h3>
</div>
 <div class="table-responsive " >
  <table class="table table-bordered table-hover table-striped text-center" id="tbval">
    <tr>
      
      
      <th>UPDATED DATE</th>
      <th>TOTAL CONFORMED</th>
      <th>TOTAL RECOVERED</th>
       <th>TOTAL DEATHS</th>
       <th>NEW CASES</th>
      <th>NEW RECOVERED</th>
      <th>NEW DEATHS</th>
  
      
    </tr>

    <?php


    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive=json_decode($data,true);
    $statescount=count($coronalive['cases_time_series']);
    $i=0;
  while($i < $statescount) {



    ?>

    <tr>
      <td style="background-color:#9600FE;color:#fff; border: 2px solid black;
 ">
        <?php echo $coronalive['cases_time_series'][$i]['date']?>
      </td>

      <td style="color: #E82424; border: 2px solid black">
        <?php echo $coronalive['cases_time_series'][$i]['totalconfirmed']?>
      </td>


      <td style="color: #17A589; border: 2px solid black">
        <?php echo $coronalive['cases_time_series'][$i]['totalrecovered']?>
      </td>


      <td style="border: 2px solid black;;color: #E82424;">
        <?php echo $coronalive['cases_time_series'][$i]['totaldeceased']?>
      </td>


      <td style="border: 2px solid black;">
        <?php echo $coronalive['cases_time_series'][$i]['dailyconfirmed']?>
      </td>

      <td style="border: 2px solid black;color: #17A589;">
        <?php echo $coronalive['cases_time_series'][$i]['dailyrecovered']?>
      </td>

      <td style="border: 2px solid black;color: #E82424;">
        <?php echo $coronalive['cases_time_series'][$i]['dailydeceased']?>
      </td>
    </tr>
<?php
    $i++;
  }
?>

  </table>
   
 </div>
</section>

<div>
<a href="#" class="button my-4 mx-5"style="width:200px;height: 50px; margin: auto;">SWIPE UP</a>

</div>

<div style="margin:0px 10px 10px 10px">

  <a href="worldlive.php" class="button"> COUNTRY WISE</a>
  

    <a href="liveindia.php" class="button">INDIAN STATE WISE</a>
  
   
</div>





<div class="banner">
<a href="https://www.nhp.gov.in"><img src="image/safety3.jpg" height="200" width="100%"></a>
</div>








<!-////////////////////////fotter/////////-->
<footer class=" mb-0 ">
  <div class="footer_style text-white text-center container-fluid py-3 ">
   <p> ©Copyright:2020 ASHISH KUMAR
       </p>
      <p>Email <a href="https://www.gmail.com">👉ashishkumarjashwal@gmail.com</a></p>
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
</body>
</html>
