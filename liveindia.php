<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
    <?php include 'link/links.php';?>
    <?php include 'css/style.php';?>
</head>
<body onload="fetch()">

<nav class="navbar navbar navbar-light navbar-expand-lg nav_style  p-3"style="color: border: 1px solid green";>
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
        <a class="nav-link" href="aboutme.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">INDIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldlive.php">WORLD</a>
      </li>
      
     
    
    </ul>
   

  </div>
</nav>


<!****************corona latest update************-->




<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase covupdate text-center ">COVID-19 INDIA LIVE UPDATE</h3>
</div>
 <div class="table-responsive">
  <table class="table table-bordered table-striped text-center" id="tbval">
    <tr>
      
      <th>STATE</th>
      <th>TOTAL CASES</th>
      <th>TOTAL RECOVERED</th>
      <th>TOTAL DEATHS</th>
       <th>ACTIVE CASES</th>
      <th>UPDATED DATE & TIME</th>
      
    </tr>


    <?php


    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive=json_decode($data,true);
    $statescount=count($coronalive['statewise']);
    $i=1;
  while ($i < $statescount) {


  	?>


  	<tr>
  		<td style="background-color:#C59CDB;color:#fff;">
  			<?php echo $coronalive['statewise'][$i]['state']?>
  		</td>

  		<td>
  			<?php echo $coronalive['statewise'][$i]['confirmed']?>
  		</td>


  		<td>
  			<?php echo $coronalive['statewise'][$i]['recovered']?>
  		</td>


  		<td style="color: #E82424 ">
  			<?php echo $coronalive['statewise'][$i]['deaths']?>
  		</td>


  		<td>
  			<?php echo $coronalive['statewise'][$i]['active']?>
  		</td>

  		<td>
  			<?php echo $coronalive['statewise'][$i]['lastupdatedtime']?>
  		</td>
  	</tr>
<?php
  	$i++;
  }
?>

  </table>
   
 </div>
</section>

<a href="#" class="button my-4 "style="width:200px;height: 50px; margin: 0 40% 0 40%">Swip Up</a>




<div class="banner">
<a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu" ><img src="image/banner4.jpg" height="200" width="100%"></a>
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