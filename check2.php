<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
    <?php include 'link/links.php';?>
    <?php include 'css/style.php';?>
</head>
<body onload="fetch()">

<nav class="navbar  navbar-light navbar-expand-lg nav_style  p-3">
  <a class="navbar-brand pl-5" href="index.php" style="color:white">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav pr-5 ml-auto text-capitalize " >
    	<li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php#contactid">COVID-HELP<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">SYMPTOMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">PREVENTION</a>
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
      
      
      <th>TOTAL CASES</th>
      <th>TOTAL RECOVERED</th>
      <th>TOTAL DEATHS</th>
       <th>NEW CASES</th>
       <th>NEW RECOVERED</th>
      <th>NEW DEATHS</th>
      <th>UPDATED DATE</th>
  
      
    </tr>


    <?php


    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive=json_decode($data,true);
    $statescount=count($coronalive['cases_time_series']);
    $i=93;
  while ($i < $statescount) {


  	?>


  	<tr>
  		<td>
  			<?php echo $coronalive['cases_time_series'][$i]['totalconfirmed']?>
  		</td>

  		<td>
  			<?php echo $coronalive['cases_time_series'][$i]['totalrecovered']?>
  		</td>


  		<td>
  			<?php echo $coronalive['cases_time_series'][$i]['totaldeceased']?>
  		</td>


  		<td>
  			<?php echo $coronalive['cases_time_series'][$i]['dailyconfirmed']?>
  		</td>


  		<td>
  			<?php echo $coronalive['cases_time_series'][$i]['dailyrecovered']?>
  		</td>

  		<td>
  			<?php echo $coronalive['cases_time_series'][$i]['dailydeceased']?>
  		</td>

      <td>
        <?php echo $coronalive['cases_time_series'][$i]['date']?>
      </td>
  	</tr>
<?php
  	$i++;
  }
?>

  </table>
   
 </div>
</section>





<footer class="mt-1 ">
  <div class="footer_style text-white text-center container-fluid ">
    <p> Copyright© By ASHISH KUMAR
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
</body>
</html>