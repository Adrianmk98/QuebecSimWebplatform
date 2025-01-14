<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))
{
    //header("Location: login.html");
   // die();
}else
{
    include '/home1/murvetop/includes/sqlcall.php';
    include '/home1/murvetop/includes/topbar.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}
?>

<HTML>
    <title>Player Positions
</title>
    <head>
        <script data-ad-client="ca-pub-1808295948776802" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <div style="padding-left:16px">
</div>
   <body>
<div class="card">
  <img src="https://i.imgur.com/<?php echo $cpic; ?>" max-width="200" height="150">
  <h1>
      <?php echo $cname; ?>
  </h1>
  <p class="title">
      <?php
      $posid = "SELECT positionid FROM user  WHERE ID='$uid'";
$result = $db_link->query($posid)or die($db_link->error);
$position = $result->fetch_assoc();
$position = $position['positionid'];
   if($position==1)
   {
       echo "Governor of ";
             echo $statename;
   }
   else if($position==2 || $position==3)
   {
       echo "Senator of ";
      echo $statename;
   }
   else if($position==4)
   {
       echo "Congress Person from ";
             echo $statename;
   }
   else if($position==5)
   {
       echo "President";
   }
   else
   {
       echo "Politician from ";
       echo $statename;
   }
    ?>  
  </p>
  <b>
 </b> <br>
   <Center>
    <table class="blueTable">
       <tbody><tr>
           
           <td>Law</td>
           <td>Position</td>
           <td>Compare to Party</td>
           <td>Compare to Other</td>
           </tr><tr>
               <td>
                   Government should be...
               </td>
               <td>
                   <?php
                   $auth = "SELECT auth FROM user  WHERE ID='$uid'";
$result = $db_link->query($auth)or die($db_link->error);
$position = $result->fetch_assoc();
$position = $position['auth'];

if($position == 0)
{
    echo "Smaller";
}
if($position == 1)
{
    echo "Stay the Same";
}
if($position == 2)
{
    echo "Bigger";
}
$parid = "SELECT partyid FROM user WHERE ID='$uid'";
$result = $db_link->query($parid)or die($db_link->error);
$paid = $result->fetch_assoc();
$paid = $paid['partyid'];

$auth0 = "SELECT COUNT(auth) FROM user WHERE partyid='$paid' and auth=0";
$result = $db_link->query($auth0)or die($db_link->error);
$authp0 = $result->fetch_assoc();
$authp0 = $authp0['COUNT(auth)'];
$auth1 = "SELECT COUNT(auth) FROM user WHERE partyid='$paid' and auth=1";
$result = $db_link->query($auth1)or die($db_link->error);
$authp1 = $result->fetch_assoc();
$authp1 = $authp1['COUNT(auth)'];
$auth2 = "SELECT COUNT(auth) FROM user WHERE partyid='$paid' and auth=2";
$result = $db_link->query($auth2)or die($db_link->error);
$authp2 = $result->fetch_assoc();
$authp2 = $authp2['COUNT(auth)'];

$auth0 = "SELECT COUNT(auth) FROM user WHERE auth=0";
$result = $db_link->query($auth0)or die($db_link->error);
$authg0 = $result->fetch_assoc();
$authg0 = $authg0['COUNT(auth)'];
$auth1 = "SELECT COUNT(auth) FROM user WHERE auth=1";
$result = $db_link->query($auth1)or die($db_link->error);
$authg1 = $result->fetch_assoc();
$authg1 = $authg1['COUNT(auth)'];
$auth2 = "SELECT COUNT(auth) FROM user WHERE auth=2";
$result = $db_link->query($auth2)or die($db_link->error);
$authg2 = $result->fetch_assoc();
$authg2 = $authg2['COUNT(auth)'];

$econ0 = "SELECT COUNT(econ) FROM user WHERE partyid='$paid' and econ=0";
$result = $db_link->query($econ0)or die($db_link->error);
$econp0 = $result->fetch_assoc();
$econp0 = $econp0['COUNT(econ)'];

$econ1 = "SELECT COUNT(econ) FROM user WHERE partyid='$paid' and econ=1";
$result = $db_link->query($econ1)or die($db_link->error);
$econp1 = $result->fetch_assoc();
$econp1 = $econp1['COUNT(econ)'];

$econ2 = "SELECT COUNT(econ) FROM user WHERE partyid='$paid' and econ=2";
$result = $db_link->query($econ2)or die($db_link->error);
$econp2 = $result->fetch_assoc();
$econp2 = $authp2['COUNT(econ)'];

$econ0 = "SELECT COUNT(econ) FROM user WHERE econ=0";
$result = $db_link->query($econ0)or die($db_link->error);
$econg0 = $result->fetch_assoc();
$econg0 = $econg0['COUNT(econ)'];
$econ1 = "SELECT COUNT(econ) FROM user WHERE econ=1";
$result = $db_link->query($econ1)or die($db_link->error);
$econg1 = $result->fetch_assoc();
$econg1 = $econg1['COUNT(econ)'];
$econ2 = "SELECT COUNT(econ) FROM user WHERE econ=2";
$result = $db_link->query($econ2)or die($db_link->error);
$econg2 = $result->fetch_assoc();
$econg2 = $econg2['COUNT(econ)'];

$gun0 = "SELECT COUNT(gunp) FROM user WHERE partyid='$paid' and gunp=0";
$result = $db_link->query($gun0)or die($db_link->error);
$gunp0 = $result->fetch_assoc();
$gunp0 = $gunp0['COUNT(gunp)'];

$gun1 = "SELECT COUNT(gunp) FROM user WHERE partyid='$paid' and gunp=1";
$result = $db_link->query($gun1)or die($db_link->error);
$gunp1 = $result->fetch_assoc();
$gunp1 = $gunp1['COUNT(gunp)'];

$gun2 = "SELECT COUNT(gunp) FROM user WHERE partyid='$paid' and gunp=2";
$result = $db_link->query($gun2)or die($db_link->error);
$gunp2 = $result->fetch_assoc();
$gunp2 = $gunp2['COUNT(gunp)'];

$gun0 = "SELECT COUNT(gunp) FROM user WHERE gunp=0";
$result = $db_link->query($gun0)or die($db_link->error);
$gung0 = $result->fetch_assoc();
$gung0 = $gung0['COUNT(gunp)'];

$gun1 = "SELECT COUNT(gunp) FROM user WHERE gunp=1";
$result = $db_link->query($gun1)or die($db_link->error);
$gung1 = $result->fetch_assoc();
$gung1 = $gung1['COUNT(gunp)'];

$gun2 = "SELECT COUNT(gunp) FROM user WHERE gunp=2";
$result = $db_link->query($gun2)or die($db_link->error);
$gung2 = $result->fetch_assoc();
$gung2 = $gung2['COUNT(gunp)'];

                   ?>
               </td>
               <td>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Position', 'Number who believe in it'],
          ['Less',     <?php echo $authp0 ?>],
          ['Stay the Same',      <?php echo $authp1 ?>],
          ['More',  <?php echo $authp2 ?>]
        ]);

        var options = {
          legend: 'none',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('policy1p'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="policy1p" style="width: 150px; height: 100px;"></div>
  </body>
               </td>
               <td>
                   <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Position', 'Number who believe in it'],
          ['Smaller',     <?php echo $authg0 ?>],
          ['Stay the Same',      <?php echo $authg1 ?>],
          ['Bigger',  <?php echo $authg2 ?>]
        ]);

        var options = {
          legend: 'none',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('policy1g'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="policy1g" style="width: 150px; height: 100px;"></div>
  </body>
               </td>
               <tr>
               <td>
                   Welfare should be ... 
               </td>
               <td>
                  <?php
                   $econ = "SELECT econ FROM user  WHERE ID='$uid'";
$result = $db_link->query($econ)or die($db_link->error);
$eposition = $result->fetch_assoc();
$eposition = $eposition['econ'];

if($eposition == 0)
{
    echo "Less";
}
if($eposition == 1)
{
    echo "Stay the Same";
}
if($eposition == 2)
{
    echo "More";
}
                   ?>
               </td>
               <td>
                   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Position', 'Number who believe in it'],
          ['Smaller',     <?php echo $econp0 ?>],
          ['Stay the Same',      <?php echo $econp1 ?>],
          ['Bigger',  <?php echo $econp2 ?>]
        ]);

        var options = {
          legend: 'none',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('policy2p'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="policy2p" style="width: 150px; height: 100px;"></div>
  </body>
               </td>
               <td>
                   <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Position', 'Number who believe in it'],
          ['Less',     <?php echo $econg0 ?>],
          ['Stay the Same',      <?php echo $econg1 ?>],
          ['More',  <?php echo $econg2 ?>]
        ]);

        var options = {
          legend: 'none',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('policy2g'));

        chart.draw(data, options);
      }
    </script>
    <div id="policy2g" style="width: 150px; height: 100px;"></div>
               </td>
               
           </tr>
           <tr>
               <td>
                   Gun Rights
               </td>
               <td>
                   <?php
                   $gunr = "SELECT gunp FROM user  WHERE ID='$uid'";
$result = $db_link->query($gunr)or die($db_link->error);
$gposition = $result->fetch_assoc();
$gposition = $eposition['econ'];

if($gposition == 0)
{
    echo "Less";
}
if($gposition == 1)
{
    echo "Stay the Same";
}
if($gposition == 2)
{
    echo "More";
}
                   ?>
               </td>
               <td>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Position', 'Number who believe in it'],
          ['Smaller',     <?php echo $gunp0 ?>],
          ['Stay the Same',      <?php echo $gunp1 ?>],
          ['Bigger',  <?php echo $gunp2 ?>]
        ]);

        var options = {
          legend: 'none',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('policy3p'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="policy3p" style="width: 150px; height: 100px;"></div>
  </body>
               </td>
               <td>
                   <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Position', 'Number who believe in it'],
          ['Less',     <?php echo $gung0 ?>],
          ['Stay the Same',      <?php echo $gung1 ?>],
          ['More',  <?php echo $gung2 ?>]
        ]);

        var options = {
          legend: 'none',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('policy3g'));

        chart.draw(data, options);
      }
    </script>
    <div id="policy3g" style="width: 150px; height: 100px;"></div>
               </td>
           </tr>
           <tr>
               <td>
                   Policing
               </td>
               <td>
                   Position Here
               </td>
               <td>
                   
               </td>
               <td>
                   
               </td>
           </tr>
           </tbody>
           </table>
</Center>


    


    </head>
</HTML>