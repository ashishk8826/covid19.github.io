<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID-LIVE</title>
    <?php include 'link/links.php';?>
    <?php include 'css/style.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="fetch()">

<nav class="navbar navbar navbar-light navbar-expand-lg nav_style  p-3"style="color: border: 1px solid green";><img src="image/logo8.png" style="height: 50px; width: 50px">
  <a class="navbar-brand ml- py-2 px-2" href="index.php" style="color:white;">COVID-19</a>
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









<div class="slideshow-container mt-2">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
   <a href="https://www.pmcares.gov.in" ><img src="image/pmcare.jpg" style="width:100%; height:400px"></a>
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
 <a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu" ><img src="image/arogya4.png" style="width:100%; height:400px"></a>
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
   <a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu" ><img src="image/wariors.jpeg" style="width:100%; height:400px"></a>
  
</div>






</div>
<br>

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








<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-1">
            <div class="leftside w-100 h-100 d-flex   justify-content-center
            align-items-center">
                <img src="image/logo6.png" width="250" height="250">
             </div>
          </div>
   
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-2">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1 style="color:#BD3E85;">Stay Home, Stay safe & Fight togather Against Corona <span class="corona_rot"><img src="image/corona8.png" width="50" height="50"></span> Virus</h1>
          </div>
        </div>
    </div>
</div>


<!****************corona latest update************-->




<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase covupdate text-center ">COVID-19 WORLD UPDATE</h3>
</div>
 <div class="table-responsive">
  <table class="table table-bordered table-striped text-center" id="tbval">
    <tr style="background-color: #3498DB";>
      
     
      <th>TOTAL CONFIRMED </th>
      <th>NEW CASES</th> 
      <th>TOTAL DEATHS</th>
      <th>NEW DEATHS</th>
      <th>TOTAL RECOVERED</th>
      <th>NEW RECOVERED</th>
      
            
    </tr>
  </table>
   
 </div>
</section>




<section class="corona_update container-fluid" >
  <div class="mt-5 mb-2 ">
    <h3 class="text-uppercase covupdate text-center ">COVID-19 IN INDIA</h3>
</div>
 <div class="table-responsive" >
  <table class="table table-bordered table-striped text-center" id="tbval">
    <tr style="background-color: #3498DB";>
      
      
      <th>TOTAL CONFIRMED</th>
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
    $i=$statescount-1;
  while($i < $statescount) {



    ?>



    <tr>
      <td style=" border: 2px solid black;
 ">
        <?php echo $coronalive['cases_time_series'][$i]['totalconfirmed']?>
      </td>

      <td style="color: #17A589;; border: 2px solid black">
        <?php echo $coronalive['cases_time_series'][$i]['totalrecovered']?>
      </td>


      <td style="color: #E82424;; border: 2px solid black">
        <?php echo $coronalive['cases_time_series'][$i]['totaldeceased']?>
      </td>


      <td style="border: 2px solid black;">
        <?php echo $coronalive['cases_time_series'][$i]['dailyconfirmed']?>
      </td>


      <td style="border: 2px solid black;">
        <?php echo $coronalive['cases_time_series'][$i]['dailyrecovered']?>
      </td>

      <td style="border: 2px solid black;">
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





 <div class="mt-5 mb-2 ">
    <h3 class="text-uppercase covupdate text-center ">Click on the button below to see the  update</h3>
</div>

<div style="margin:0px 10px 10px 10px">

  <a href="worldlive.php" class="button"> COUNTRY WISE</a>
  

    <a href="liveindia.php" class="button">INDIAN STATE WISE</a>


  
    <a href="dailyindia.php" class="button">DAILY CASES IN INDIA</a>
  
</div>






















<!/////////////ABOUT CORONA///////-->

  
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-1">
  <h1>ABOUT COVID-19</h1>
</div> 
<div class="row pt-5">
  <div class="col-lg-5 col-md-6 col-12 my-0 px-0">
   <video width ="300px" height="auto" controls>
  <source src="image/coronavideo.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>
  </div>
  
  <div class="  col-lg-6 col-md-6 col-12" style="color:white;">
   <b>
    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
<p>
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
</b>
  </div>
  </div>
</div>
<!/////////////corona symptoms///////-->
<div class="container-fluid symptoms pt-5 pb-5" id="sympid">
<div class="section_header text-center mb-5 mt-4" >
  <h1>CORONA VIRUS SYMPTOMS</h1>
</div>
  <div class="container" >
   <b> <div class="row">
      <div class="col-lg-4 col-md-4 mt-5 col-12 ">
        <figure class="text-center">
         <img src="image/breath1.jpg" class="img-fluid" width="120" height="120">
         <figcaption style="color:orange;">DIFFICULTY BREATHING</figcaption>
         </figure>
    </div>

    <div class="col-lg-4 col-md-4 mt-5 col-12 ">
        <figure class="text-center">
         <img src="image/fever.png" class="img-fluid" width="120" height="120">
         <figcaption style="color:orange;">FEVER</figcaption>
         </figure>
    </div>

    <div class="col-lg-4 col-md-4 mt-5 col-12 ">
        <figure class="text-center">
         <img src="image/tiredness.jpg" class="img-fluid" width="120" height="120">
         <figcaption style="color:orange;">TIREDNESS</figcaption>
         </figure>
    </div>

    <div class="col-lg-4 col-md-4 mt-5 col-12 ">
        <figure class="text-center">
         <img src="image/nose2.jpg" class="img-fluid" width="110" height="120">
         <figcaption style="color:orange;">RUNNY NOSE</figcaption>
         </figure>
    </div>
    <div class="col-lg-4 col-md-4 mt-5 col-12 ">
        <figure class="text-center">
         <img src="image/cough.png" class="img-fluid" width="120" height="120">
         <figcaption style="color:orange;">COLD</figcaption>
         </figure>
    </div>

    <div class="col-lg-4 col-md-4 mt-5 col-12 ">
        <figure class="text-center">
         <img src="image/cold.png" class="img-fluid" width="120" height="120">
         <figcaption style="color:orange; ">DRY COUGH</figcaption>
         </figure>
    </div>
  </div>
</b>
    
  </div>
</div>

<!/////////////prevention angainst corona virus///////-->
<div class=" container-fluid sub_section pt-5 pb-5" id="preventid">
<div class="section_header text-center mb-5 mt-4">
  <h1>PREVENTION AGAINST CORONA VIRUS</h1>
</div><b>
    <div class="container">
      <div class="row">
        <div class="coi-lg-4 col-md-4 col-12 mt-0">
          <figure class="text-center">
         <img src="image/facemask.jpg" class="img-fluid" width="90" height="90">
         </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12" style="color:white;">
          <p>Cover your mouth and nose when coughing or sneezing.</p>
         
        </div>
      </div>
      
    </div>


    <div class="container">
      <div class="row">
        <div class="coi-lg-4 col-md-4 col-12 mt-2">
          <figure class="text-center">
         <img src="image/handwash.jpg" class="img-fluid" width="90" height="90">
         </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12" style="color:white;">
          <p>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</p>
         
        </div>
      </div>
      
    </div>


    <div class="container">
      <div class="row">
        <div class="coi-lg-4 col-md-4 col-12 mt-2 ">
          <figure class="text-center">
         <img src="image/precautions1.jpg" class="img-fluid" width="90" height="90">
         </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12" style="color:white;">
          <p>Maintain at least 6 feet distance between you and people coughing or sneezing.</p>
         
        </div>
      </div>
      
    </div>


    <div class="container">
      <div class="row">
        <div class="coi-lg-4 col-md-4 col-12 mt-2 ">
          <figure class="text-center">
         <img src="image/face_touch.jpg" class="img-fluid" width="90" height="90">
         </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12" style="color:white;">
          <p>Avoid touching your face.</p>
         
        </div>
      </div>
      
    </div>



    <div class="container">
      <div class="row">
        <div class="coi-lg-4 col-md-4 col-12 mt-2 ">
          <figure class="text-center">
         <img src="image/socialdist.jpg" class="img-fluid" width="90" height="90">
         </figure>
        </div>
        <div class="col-lg-8 col-md-8 col-12" style="color:white;">
          <p>Avoid unnecessary travel and staying away from large groups of people.</p>
         
        </div>
      </div>
      
    </div>
    </b>

  </div>


<!//////////////contact us///////////-->
<div class="container-fluid  pt-5 pb-0 px-0" id="contactid">
<div class="section_header text-center mb-5 mt-4">
  <h1>CONTACT US</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">








      <form action="" method="POST">
  <div class="form-group">
    <label >NAME</label>
    <input type="text" class="form-control"  
    name="username" placeholder="name" autocomplete="off" required>
  </div>
  

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off">
  </div>

  <div class="form-group">
    <label >MOBILE</label>
    <input type="number" class="form-control"  
    name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>



  
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input class="custom-control-input" type="checkbox" id="customcheckbox1"name="coronasym[]" value="breath">
  <label class="custom-control-label" for="customcheckbox1">Deficulty in breath</label>
</div>

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input class="custom-control-input" type="checkbox" id="customcheckbox2"name="coronasym[]" value="fever">
  <label class="custom-control-label" for="customcheckbox2">fever</label>
</div>


 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input class="custom-control-input" type="checkbox" id="customcheckbox3"name="coronasym[]" value="cold">
  <label class="custom-control-label" for="customcheckbox3">cold</label>
</div>

 

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input class="custom-control-input" type="checkbox" id="customcheckbox4"name="coronasym[]" value="tired">
  <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
</div>
<br>
<div class="form-group">
    <label for="exampleFormControlTextarea1">ADDRESS</label>
    <textarea class="form-control" name="addr"id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">COMMENT</label>
    <textarea class="form-control" name="msg"id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" name="submit" class="btns btn-primary my-1 mx-1 py-1 px-1" >Submit</button>
</form>
    </div>
  </div>
</div>

</div>

<div>
<a href="#" class="button my-4 mx-5"style="width:200px;height: 50px; margin: auto;">SWIPE UP</a>

</div>





<div class="banner">
<a href="https://www.nhp.gov.in"><img src="image/safety2.jpg" height="200" width="100%"></a>
</div>


 



<!-////////////////////////fotter/////////-->
<footer class=" mb-0 ">
  <div class="footer_style text-white text-center container-fluid py-4 " width>
    <p> © Copyright 2020 the ❤️ Activitizila
       </p>
      
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
       {
      var x=tbval.insertRow();
          x.insertCell(0);
          tbval.rows[1].cells[0].innerHTML=data['Global']['TotalConfirmed'];
          tbval.rows[1].cells[0].style.border='2px solid black';
          tbval.rows[1].cells[0];


           x.insertCell(1);
          tbval.rows[1].cells[1].innerHTML=data['Global']['NewConfirmed'];
          tbval.rows[1].cells[1].style.border='2px solid black';
          tbval.rows[1].cells[1];



           x.insertCell(2);
          tbval.rows[1].cells[2].innerHTML=data['Global']['TotalDeaths'];
          tbval.rows[1].cells[2].style.border='2px solid black';
          tbval.rows[1].cells[2].style.color='#E82424';



           x.insertCell(3);
          tbval.rows[1].cells[3].innerHTML=data['Global']['NewDeaths'];
          tbval.rows[1].cells[3].style.border='2px solid black';
          tbval.rows[1].cells[3];


           x.insertCell(4);
          tbval.rows[1].cells[4].innerHTML=data['Global']['TotalRecovered'];
          tbval.rows[1].cells[4].style.border='2px solid black';
          tbval.rows[1].cells[4].style.color='#55D9C0';


           x.insertCell(5);
          tbval.rows[1].cells[5].innerHTML=data['Global']['NewRecovered'];
          tbval.rows[1].cells[5].style.border='2px solid black';
          tbval.rows[1].cells[5];


        }
      }

      );

  }


</script>
</body>
</html>







