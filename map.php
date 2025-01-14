<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
{
    header("Location: login.html");
   die();
}else
{
   include '/home1/murvetop/includes/sqlcall.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}?>
<?php

if($mapid==1)
{

    
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='AK'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$akr = $result->fetch_assoc();
$aak = $akr['partycolour'];


$query1 = "SELECT cname FROM user WHERE positionid=1 and state='AK'";
$result = $db_link->query($query1)or die($db_link->error);
$akgov = $result->fetch_assoc();
$akgov = $akgov['cname'];
$displayak=$akgov;
?>
    <?php

    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='HI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ahi = $result->fetch_assoc();
$ahi = $ahi['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='HI'";
$result = $db_link->query($query1)or die($db_link->error);
$higov = $result->fetch_assoc();
$higov = $higov['cname'];
$displayhi=$higov;
?>
<?php
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='AL'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aal = $result->fetch_assoc();
$aal = $aal['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='AL'";
$result = $db_link->query($query1)or die($db_link->error);
$algov = $result->fetch_assoc();
$algov = $algov['cname'];
$displayal=$algov;
?>
<?php
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='AR'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aar = $result->fetch_assoc();
$aar = $aar['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='AR'";
$result = $db_link->query($query1)or die($db_link->error);
$argov = $result->fetch_assoc();
$argov = $argov['cname'];
$displayar=$argov;
?>
<?php
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='AZ'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aaz = $result->fetch_assoc();
$aaz = $aaz['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='AZ'";
$result = $db_link->query($query1)or die($db_link->error);
$azgov = $result->fetch_assoc();
$azgov = $azgov['cname'];
$displayaz=$azgov;
?>
<?php
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='CA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aca = $result->fetch_assoc();
$aca = $aca['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='CA'";
$result = $db_link->query($query1)or die($db_link->error);
$cagov = $result->fetch_assoc();
$cagov = $cagov['cname'];
$displayca=$cagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='CO'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aco = $result->fetch_assoc();
$aco = $aco['partycolour'];
$query1 = "SELECT cname FROM user WHERE positionid=1 and state='CO'";
$result = $db_link->query($query1)or die($db_link->error);
$cogov = $result->fetch_assoc();
$cogov = $cogov['cname'];
$displayco=$cogov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='CT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$act = $result->fetch_assoc();
$act = $act['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='CT'";
$result = $db_link->query($query1)or die($db_link->error);
$ctgov = $result->fetch_assoc();
$ctgov = $ctgov['cname'];
$displayct=$ctgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='DE'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ade = $result->fetch_assoc();
$ade = $ade['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='DE'";
$result = $db_link->query($query1)or die($db_link->error);
$degov = $result->fetch_assoc();
$degov = $degov['cname'];
$displayde=$degov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='FL'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$afl = $result->fetch_assoc();
$afl = $afl['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='FL'";
$result = $db_link->query($query1)or die($db_link->error);
$flgov = $result->fetch_assoc();
$flgov = $flgov['cname'];
$displayfl=$flgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='GA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aga = $result->fetch_assoc();
$aga = $aga['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='GA'";
$result = $db_link->query($query1)or die($db_link->error);
$gagov = $result->fetch_assoc();
$gagov = $gagov['cname'];
$displayga=$gagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='IA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aia = $result->fetch_assoc();
$aia = $aia['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='IA'";
$result = $db_link->query($query1)or die($db_link->error);
$iagov = $result->fetch_assoc();
$iagov = $iagov['cname'];
$displayia=$iagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='ID'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aid = $result->fetch_assoc();
$aid = $aid['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='ID'";
$result = $db_link->query($query1)or die($db_link->error);
$idgov = $result->fetch_assoc();
$idgov = $idgov['cname'];
$displayid=$idgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='IL'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ail = $result->fetch_assoc();
$ail = $ail['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='IL'";
$result = $db_link->query($query1)or die($db_link->error);
$ilgov = $result->fetch_assoc();
$ilgov = $ilgov['cname'];
$displayil=$ilgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='IN'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ain = $result->fetch_assoc();
$ain = $ain['partycolour'];
$query1 = "SELECT cname FROM user WHERE positionid=1 and state='IN'";
$result = $db_link->query($query1)or die($db_link->error);
$ingov = $result->fetch_assoc();
$ingov = $ingov['cname'];
$displayin=$ingov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='KS'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aks = $result->fetch_assoc();
$aks = $aks['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='KS'";
$result = $db_link->query($query1)or die($db_link->error);
$ksgov = $result->fetch_assoc();
$ksgov = $ksgov['cname'];
$displayks=$ksgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='KY'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aky = $result->fetch_assoc();
$aky = $aky['partycolour'];
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='LA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ala = $result->fetch_assoc();
$ala = $ala['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='LA'";
$result = $db_link->query($query1)or die($db_link->error);
$lagov = $result->fetch_assoc();
$lagov = $lagov['cname'];
$displayla=$lagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ama = $result->fetch_assoc();
$ama = $ama['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MA'";
$result = $db_link->query($query1)or die($db_link->error);
$magov = $result->fetch_assoc();
$magov = $magov['cname'];
$displayma=$magov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MD'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amd = $result->fetch_assoc();
$amd = $amd['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MD'";
$result = $db_link->query($query1)or die($db_link->error);
$mdgov = $result->fetch_assoc();
$mdgov = $mdgov['cname'];
$displaymd=$mdgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='ME'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ame = $result->fetch_assoc();
$ame = $ame['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='ME'";
$result = $db_link->query($query1)or die($db_link->error);
$megov = $result->fetch_assoc();
$megov = $megov['cname'];
$displayme=$megov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ami = $result->fetch_assoc();
$ami = $ami['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MI'";
$result = $db_link->query($query1)or die($db_link->error);
$migov = $result->fetch_assoc();
$migov = $migov['cname'];
$displaymi=$migov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MN'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amn = $result->fetch_assoc();
$amn = $amn['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MN'";
$result = $db_link->query($query1)or die($db_link->error);
$mngov = $result->fetch_assoc();
$mngov = $mngov['cname'];
$displaymn=$mngov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MO'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amo = $result->fetch_assoc();
$amo = $amo['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MO'";
$result = $db_link->query($query1)or die($db_link->error);
$mogov = $result->fetch_assoc();
$mogov = $mogov['cname'];
$displaymo=$mogov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MS'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ams = $result->fetch_assoc();
$ams = $ams['partycolour'];
$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MS'";
$result = $db_link->query($query1)or die($db_link->error);
$msgov = $result->fetch_assoc();
$msgov = $msgov['cname'];
$displayms=$msgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='MT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amt = $result->fetch_assoc();
$amt = $amt['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='MT'";
$result = $db_link->query($query1)or die($db_link->error);
$mtgov = $result->fetch_assoc();
$mtgov = $mtgov['cname'];
$displaymt=$mtgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NC'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anc = $result->fetch_assoc();
$anc = $anc['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NC'";
$result = $db_link->query($query1)or die($db_link->error);
$ncgov = $result->fetch_assoc();
$ncgov = $ncgov['cname'];
$displaync=$ncgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='ND'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$and = $result->fetch_assoc();
$and = $and['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='ND'";
$result = $db_link->query($query1)or die($db_link->error);
$ndgov = $result->fetch_assoc();
$ndgov = $ndgov['cname'];
$displaynd=$ndgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NE'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ane = $result->fetch_assoc();
$ane = $ane['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NE'";
$result = $db_link->query($query1)or die($db_link->error);
$negov = $result->fetch_assoc();
$negov = $negov['cname'];
$displayne=$negov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NH'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anh = $result->fetch_assoc();
$anh = $anh['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NH'";
$result = $db_link->query($query1)or die($db_link->error);
$nhgov = $result->fetch_assoc();
$nhgov = $nhgov['cname'];
$displaynh=$nhgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NJ'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anj = $result->fetch_assoc();
$anj = $anj['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NJ'";
$result = $db_link->query($query1)or die($db_link->error);
$njgov = $result->fetch_assoc();
$njgov = $njgov['cname'];
$displaynj=$njgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NM'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anm = $result->fetch_assoc();
$anm = $anm['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NM'";
$result = $db_link->query($query1)or die($db_link->error);
$nmgov = $result->fetch_assoc();
$nmgov = $nmgov['cname'];
$displaynm=$nmgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NV'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anv = $result->fetch_assoc();
$anv = $anv['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NV'";
$result = $db_link->query($query1)or die($db_link->error);
$nvgov = $result->fetch_assoc();
$nvgov = $nvgov['cname'];
$displaynv=$nvgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='NY'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$any = $result->fetch_assoc();
$any = $any['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='NY'";
$result = $db_link->query($query1)or die($db_link->error);
$nygov = $result->fetch_assoc();
$nygov = $nygov['cname'];
$displayny=$nygov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='OH'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aoh = $result->fetch_assoc();
$aoh = $aoh['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='OH'";
$result = $db_link->query($query1)or die($db_link->error);
$ohgov = $result->fetch_assoc();
$ohgov = $ohgov['cname'];
$displayoh=$ohgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='OK'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aok = $result->fetch_assoc();
$aok = $aok['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='OK'";
$result = $db_link->query($query1)or die($db_link->error);
$okgov = $result->fetch_assoc();
$okgov = $okgov['cname'];
$displayok=$okgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='OR'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aor = $result->fetch_assoc();
$aor = $aor['partycolour'];
$query1 = "SELECT cname FROM user WHERE positionid=1 and state='OR'";
$result = $db_link->query($query1)or die($db_link->error);
$orgov = $result->fetch_assoc();
$orgov = $orgov['cname'];
$displayor=$orgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='PA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$apa = $result->fetch_assoc();
$apa = $apa['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='PA'";
$result = $db_link->query($query1)or die($db_link->error);
$pagov = $result->fetch_assoc();
$pagov = $pagov['cname'];
$displaypa=$pagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='RI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ari = $result->fetch_assoc();
$ari = $ari['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='RI'";
$result = $db_link->query($query1)or die($db_link->error);
$rigov = $result->fetch_assoc();
$rigov = $rigov['cname'];
$displayri=$rigov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='SC'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$asc = $result->fetch_assoc();
$asc = $asc['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='SC'";
$result = $db_link->query($query1)or die($db_link->error);
$scgov = $result->fetch_assoc();
$scgov = $scgov['cname'];
$displaysc=$scgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='SD'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$asd = $result->fetch_assoc();
$asd = $asd['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='SD'";
$result = $db_link->query($query1)or die($db_link->error);
$sdgov = $result->fetch_assoc();
$sdgov = $sdgov['cname'];
$displaysd=$sdgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='TN'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$atn = $result->fetch_assoc();
$atn = $atn['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='TN'";
$result = $db_link->query($query1)or die($db_link->error);
$tngov = $result->fetch_assoc();
$tngov = $tngov['cname'];
$displaytn=$tngov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='TX'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$atx = $result->fetch_assoc();
$atx = $atx['partycolour'];
$query1 = "SELECT cname FROM user WHERE positionid=1 and state='TX'";
$result = $db_link->query($query1)or die($db_link->error);
$txgov = $result->fetch_assoc();
$txgov = $txgov['cname'];
$displaytx=$txgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='UT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aut = $result->fetch_assoc();
$aut = $aut['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='UT'";
$result = $db_link->query($query1)or die($db_link->error);
$utgov = $result->fetch_assoc();
$utgov = $utgov['cname'];
$displayut=$utgov;
?>
    <?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='VA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ava = $result->fetch_assoc();
$ava = $ava['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='VA'";
$result = $db_link->query($query1)or die($db_link->error);
$vagov = $result->fetch_assoc();
$vagov = $vagov['cname'];
$displayva=$vagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='VT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$avt = $result->fetch_assoc();
$avt = $avt['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='VT'";
$result = $db_link->query($query1)or die($db_link->error);
$vtgov = $result->fetch_assoc();
$vtgov = $vtgov['cname'];
$displayvt=$vtgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='WA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awa = $result->fetch_assoc();
$awa = $awa['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='WA'";
$result = $db_link->query($query1)or die($db_link->error);
$wagov = $result->fetch_assoc();
$wagov = $wagov['cname'];
$displaywa=$wagov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='WI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awi = $result->fetch_assoc();
$awi = $awi['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='WI'";
$result = $db_link->query($query1)or die($db_link->error);
$wigov = $result->fetch_assoc();
$wigov = $wigov['cname'];
$displaywi=$wigov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='WV'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awv = $result->fetch_assoc();
$awv = $awv['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='WV'";
$result = $db_link->query($query1)or die($db_link->error);
$wvgov = $result->fetch_assoc();
$wvgov = $wvgov['cname'];
$displaywv=$wvgov;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=1 and state='WY'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awy = $result->fetch_assoc();
$awy = $awy['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=1 and state='WY'";
$result = $db_link->query($query1)or die($db_link->error);
$wygov = $result->fetch_assoc();
$wygov = $wygov['cname'];
$displaywy=$wygov;
?>
<?php
}
?>
<?php
if($mapid==2)
{

        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='AK'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$akr = $result->fetch_assoc();
$aak = $akr['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='AK'";
$result = $db_link->query($query1)or die($db_link->error);
$aksen1 = $result->fetch_assoc();
$aksen1 = $aksen1['cname'];
$displayak=$aksen1;
?>
    <?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='HI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ahi = $result->fetch_assoc();
$ahi = $ahi['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='HI'";
$result = $db_link->query($query1)or die($db_link->error);
$hisen1 = $result->fetch_assoc();
$hisen1 = $hisen1['cname'];
$displayhi=$hisen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='AL'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aal = $result->fetch_assoc();
$aal = $aal['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='AL'";
$result = $db_link->query($query1)or die($db_link->error);
$alsen1 = $result->fetch_assoc();
$alsen1 = $alsen1['cname'];
$displayal=$alsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='AR'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aar = $result->fetch_assoc();
$aar = $aar['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='AR'";
$result = $db_link->query($query1)or die($db_link->error);
$arsen1 = $result->fetch_assoc();
$arsen1 = $arsen1['cname'];
$displayar=$arsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='AZ'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aaz = $result->fetch_assoc();
$aaz = $aaz['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='AZ'";
$result = $db_link->query($query1)or die($db_link->error);
$azsen1 = $result->fetch_assoc();
$azsen1 = $azsen1['cname'];
$displayaz=$azsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='CA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aca = $result->fetch_assoc();
$aca = $aca['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='CA'";
$result = $db_link->query($query1)or die($db_link->error);
$casen1 = $result->fetch_assoc();
$casen1 = $casen1['cname'];
$displayca=$casen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='CO'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aco = $result->fetch_assoc();
$aco = $aco['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='CO'";
$result = $db_link->query($query1)or die($db_link->error);
$cosen1 = $result->fetch_assoc();
$cosen1 = $cosen1['cname'];
$displayco=$cosen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='CT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$act = $result->fetch_assoc();
$act = $act['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='CT'";
$result = $db_link->query($query1)or die($db_link->error);
$ctsen1 = $result->fetch_assoc();
$ctsen1 = $ctsen1['cname'];
$displayct=$ctsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='DE'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ade = $result->fetch_assoc();
$ade = $ade['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='DE'";
$result = $db_link->query($query1)or die($db_link->error);
$desen1 = $result->fetch_assoc();
$desen1 = $desen1['cname'];
$displayde=$desen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='FL'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$afl = $result->fetch_assoc();
$afl = $afl['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='FL'";
$result = $db_link->query($query1)or die($db_link->error);
$flsen1 = $result->fetch_assoc();
$flsen1 = $flsen1['cname'];
$displayfl=$flsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='GA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aga = $result->fetch_assoc();
$aga = $aga['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='GA'";
$result = $db_link->query($query1)or die($db_link->error);
$gasen1 = $result->fetch_assoc();
$gasen1 = $gasen1['cname'];
$displayga=$gasen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='IA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aia = $result->fetch_assoc();
$aia = $aia['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='IA'";
$result = $db_link->query($query1)or die($db_link->error);
$iasen1 = $result->fetch_assoc();
$iasen1 = $iasen1['cname'];
$displayia=$iasen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='ID'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aid = $result->fetch_assoc();
$aid = $aid['partycolour'];
$query1 = "SELECT cname FROM user WHERE positionid=2 and state='ID'";
$result = $db_link->query($query1)or die($db_link->error);
$idsen1 = $result->fetch_assoc();
$idsen1 = $idsen1['cname'];
$displayid=$idsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='IL'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ail = $result->fetch_assoc();
$ail = $ail['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='IL'";
$result = $db_link->query($query1)or die($db_link->error);
$ilsen1 = $result->fetch_assoc();
$ilsen1 = $ilsen1['cname'];
$displayil=$ilsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='IN'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ain = $result->fetch_assoc();
$ain = $ain['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='IN'";
$result = $db_link->query($query1)or die($db_link->error);
$insen1 = $result->fetch_assoc();
$insen1 = $insen1['cname'];
$displayin=$insen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='KS'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aks = $result->fetch_assoc();
$aks = $aks['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='KS'";
$result = $db_link->query($query1)or die($db_link->error);
$kssen1 = $result->fetch_assoc();
$kssen1 = $kssen1['cname'];
$displayks=$kssen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='KY'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aky = $result->fetch_assoc();
$aky = $aky['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='KY'";
$result = $db_link->query($query1)or die($db_link->error);
$kysen1 = $result->fetch_assoc();
$kysen1 = $kysen1['cname'];
$displayky=$kysen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='LA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ala = $result->fetch_assoc();
$ala = $ala['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='AR'";
$result = $db_link->query($query1)or die($db_link->error);
$arsen1 = $result->fetch_assoc();
$arsen1 = $arsen1['cname'];
$displayar=$arsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ama = $result->fetch_assoc();
$ama = $ama['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MA'";
$result = $db_link->query($query1)or die($db_link->error);
$masen1 = $result->fetch_assoc();
$masen1 = $masen1['cname'];
$displayma=$masen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MD'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amd = $result->fetch_assoc();
$amd = $amd['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MD'";
$result = $db_link->query($query1)or die($db_link->error);
$mdsen1 = $result->fetch_assoc();
$mdsen1 = $mdsen1['cname'];
$displaymd=$mdsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='ME'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ame = $result->fetch_assoc();
$ame = $ame['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='ME'";
$result = $db_link->query($query1)or die($db_link->error);
$mesen1 = $result->fetch_assoc();
$mesen1 = $mesen1['cname'];
$displayme=$mesen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ami = $result->fetch_assoc();
$ami = $ami['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MI'";
$result = $db_link->query($query1)or die($db_link->error);
$misen1 = $result->fetch_assoc();
$misen1 = $misen1['cname'];
$displaymi=$misen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MN'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amn = $result->fetch_assoc();
$amn = $amn['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MN'";
$result = $db_link->query($query1)or die($db_link->error);
$mnsen1 = $result->fetch_assoc();
$mnsen1 = $mnsen1['cname'];
$displaymn=$mnsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MO'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amo = $result->fetch_assoc();
$amo = $amo['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MO'";
$result = $db_link->query($query1)or die($db_link->error);
$mosen1 = $result->fetch_assoc();
$mosen1 = $mosen1['cname'];
$displaymo=$mosen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MS'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ams = $result->fetch_assoc();
$ams = $ams['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MS'";
$result = $db_link->query($query1)or die($db_link->error);
$mssen1 = $result->fetch_assoc();
$mssen1 = $mssen1['cname'];
$displayms=$mssen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='MT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$amt = $result->fetch_assoc();
$amt = $amt['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='MT'";
$result = $db_link->query($query1)or die($db_link->error);
$mtsen1 = $result->fetch_assoc();
$mtsen1 = $mtsen1['cname'];
$displaymt=$mtsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NC'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anc = $result->fetch_assoc();
$anc = $anc['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NC'";
$result = $db_link->query($query1)or die($db_link->error);
$ncsen1 = $result->fetch_assoc();
$ncsen1 = $ncsen1['cname'];
$displaync=$ncsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='ND'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$and = $result->fetch_assoc();
$and = $and['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='ND'";
$result = $db_link->query($query1)or die($db_link->error);
$ndsen1 = $result->fetch_assoc();
$ndsen1 = $ndsen1['cname'];
$displaynd=$ndsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NE'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ane = $result->fetch_assoc();
$ane = $ane['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NE'";
$result = $db_link->query($query1)or die($db_link->error);
$nesen1 = $result->fetch_assoc();
$nesen1 = $nesen1['cname'];
$displayne=$nesen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NH'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anh = $result->fetch_assoc();
$anh = $anh['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NH'";
$result = $db_link->query($query1)or die($db_link->error);
$nhsen1 = $result->fetch_assoc();
$nhsen1 = $nhsen1['cname'];
$displaynh=$nhsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NJ'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anj = $result->fetch_assoc();
$anj = $anj['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NJ'";
$result = $db_link->query($query1)or die($db_link->error);
$njsen1 = $result->fetch_assoc();
$njsen1 = $njsen1['cname'];
$displaynj=$njsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NM'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anm = $result->fetch_assoc();
$anm = $anm['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NM'";
$result = $db_link->query($query1)or die($db_link->error);
$nmsen1 = $result->fetch_assoc();
$nmsen1 = $nmsen1['cname'];
$displaynm=$nmsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NV'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$anv = $result->fetch_assoc();
$anv = $anv['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NV'";
$result = $db_link->query($query1)or die($db_link->error);
$nvsen1 = $result->fetch_assoc();
$nvsen1 = $nvsen1['cname'];
$displaynv=$nvsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='NY'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$any = $result->fetch_assoc();
$any = $any['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='NY'";
$result = $db_link->query($query1)or die($db_link->error);
$nysen1 = $result->fetch_assoc();
$nysen1 = $nysen1['cname'];
$displayny=$nysen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='OH'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aoh = $result->fetch_assoc();
$aoh = $aoh['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='OH'";
$result = $db_link->query($query1)or die($db_link->error);
$ohsen1 = $result->fetch_assoc();
$ohsen1 = $ohsen1['cname'];
$displayoh=$ohsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='OK'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aok = $result->fetch_assoc();
$aok = $aok['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='OK'";
$result = $db_link->query($query1)or die($db_link->error);
$oksen1 = $result->fetch_assoc();
$oksen1 = $oksen1['cname'];
$displayok=$oksen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='OR'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aor = $result->fetch_assoc();
$aor = $aor['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='OR'";
$result = $db_link->query($query1)or die($db_link->error);
$orsen1 = $result->fetch_assoc();
$orsen1 = $orsen1['cname'];
$displayor=$orsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='PA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$apa = $result->fetch_assoc();
$apa = $apa['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='PA'";
$result = $db_link->query($query1)or die($db_link->error);
$pasen1 = $result->fetch_assoc();
$pasen1 = $pasen1['cname'];
$displaypa=$pasen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='RI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ari = $result->fetch_assoc();
$ari = $ari['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='RI'";
$result = $db_link->query($query1)or die($db_link->error);
$risen1 = $result->fetch_assoc();
$risen1 = $risen1['cname'];
$displayri=$risen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='SC'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$asc = $result->fetch_assoc();
$asc = $asc['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='SC'";
$result = $db_link->query($query1)or die($db_link->error);
$scsen1 = $result->fetch_assoc();
$scsen1 = $scsen1['cname'];
$displaysc=$scsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='SD'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$asd = $result->fetch_assoc();
$asd = $asd['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='SD'";
$result = $db_link->query($query1)or die($db_link->error);
$sdsen1 = $result->fetch_assoc();
$sdsen1 = $sdsen1['cname'];
$displaysd=$sdsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='TN'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$atn = $result->fetch_assoc();
$atn = $atn['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='TN'";
$result = $db_link->query($query1)or die($db_link->error);
$tnsen1 = $result->fetch_assoc();
$tnsen1 = $tnsen1['cname'];
$displaytn=$tnsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='TX'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$atx = $result->fetch_assoc();
$atx = $atx['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='TX'";
$result = $db_link->query($query1)or die($db_link->error);
$txsen1 = $result->fetch_assoc();
$txsen1 = $txsen1['cname'];
$displaytx=$txsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='UT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$aut = $result->fetch_assoc();
$aut = $aut['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='UT'";
$result = $db_link->query($query1)or die($db_link->error);
$utsen1 = $result->fetch_assoc();
$utsen1 = $utsen1['cname'];
$displayut=$utsen1;
?>
    <?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='VA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$ava = $result->fetch_assoc();
$ava = $ava['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='VA'";
$result = $db_link->query($query1)or die($db_link->error);
$vasen1 = $result->fetch_assoc();
$vasen1 = $vasen1['cname'];
$displayva=$vasen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='VT'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$avt = $result->fetch_assoc();
$avt = $avt['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='VT'";
$result = $db_link->query($query1)or die($db_link->error);
$vtsen1 = $result->fetch_assoc();
$vtsen1 = $vtsen1['cname'];
$displayvt=$vtsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='WA'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awa = $result->fetch_assoc();
$awa = $awa['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='WA'";
$result = $db_link->query($query1)or die($db_link->error);
$wasen1 = $result->fetch_assoc();
$wasen1 = $wasen1['cname'];
$displaywa=$wasen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='WI'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awi = $result->fetch_assoc();
$awi = $awi['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='WI'";
$result = $db_link->query($query1)or die($db_link->error);
$wisen1 = $result->fetch_assoc();
$wisen1 = $wisen1['cname'];
$displaywi=$wisen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='WV'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awv = $result->fetch_assoc();
$awv = $awv['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='WV'";
$result = $db_link->query($query1)or die($db_link->error);
$wvsen1 = $result->fetch_assoc();
$wvsen1 = $wvsen1['cname'];
$displaywv=$wvsen1;
?>
<?php
        
 


   
      

      
    $query1 = "SELECT partyid FROM user WHERE positionid=2 and state='WY'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];
    $query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$awy = $result->fetch_assoc();
$awy = $awy['partycolour'];

$query1 = "SELECT cname FROM user WHERE positionid=2 and state='WY'";
$result = $db_link->query($query1)or die($db_link->error);
$wysen1 = $result->fetch_assoc();
$wysen1 = $wysen1['cname'];
$displaywy=$wysen1;
?>
<?php
}
?>
<?php
if($mapid==3)
{

        for($loop=1; $loop<51; $loop++)
        {
            $query1 = "SELECT state FROM statedemo WHERE stateid='$loop'";
$result = $db_link->query($query1)or die($db_link->error);
$sta = $result->fetch_assoc();
$sta = $sta['state'];

$query1 = "SELECT partyid FROM user WHERE positionid=3 and state='$sta'";
$result = $db_link->query($query1)or die($db_link->error);
$partyiden = $result->fetch_assoc();
$partyiden = $partyiden['partyid'];

$str = strtolower($sta);

$query2 = "SELECT partycolour FROM parties WHERE partyid='$partyiden'";
$result = $db_link->query($query2)or die($db_link->error);
$acol = $result->fetch_assoc();
$acol = $acol['partycolour'];
${'a'.$str}=$acol;

$query1 = "SELECT cname FROM user WHERE positionid=3 and state='$sta'";
$result = $db_link->query($query1)or die($db_link->error);
$stsen2 = $result->fetch_assoc();
$stsen2 = $stsen2['cname'];
$display=$stsen2;

${'display'.$str}=$display;
        }
 


   
  
?>
<?php
}
?>
<?php
if($mapid==0)
{

       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iak>0 ORDER BY iak DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$akr = $result->fetch_assoc();
$aak = $akr['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ihi>0 ORDER BY ihi DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ihi = $result->fetch_assoc();
$ahi = $ihi['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ial>0 ORDER BY ial DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ial = $result->fetch_assoc();
$aal = $ial['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iar>0 ORDER BY iar DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iar = $result->fetch_assoc();
$aar = $iar['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iaz>0 ORDER BY iaz DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iaz = $result->fetch_assoc();
$aaz = $iaz['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ica>0 ORDER BY ica DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ica = $result->fetch_assoc();
$aca = $ica['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ico>0 ORDER BY ico DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ico = $result->fetch_assoc();
$aco = $ico['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ict>0 ORDER BY ict DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ict = $result->fetch_assoc();
$act = $ict['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ide>0 ORDER BY ide DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ide = $result->fetch_assoc();
$ade = $ide['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ifl>0 ORDER BY ifl DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ifl = $result->fetch_assoc();
$afl = $ifl['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iga>0 ORDER BY iga DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iga = $result->fetch_assoc();
$aga = $iga['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iia>0 ORDER BY iia DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iia = $result->fetch_assoc();
$aia = $iia['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iid>0 ORDER BY iid DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iid = $result->fetch_assoc();
$aid = $iid['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iil>0 ORDER BY iil DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iil = $result->fetch_assoc();
$ail = $iil['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iin>0 ORDER BY iin DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iin = $result->fetch_assoc();
$ain = $iin['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iks>0 ORDER BY iks DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iks = $result->fetch_assoc();
$aks = $iks['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iky>0 ORDER BY iky DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iky = $result->fetch_assoc();
$aky = $iky['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ila>0 ORDER BY ila DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ila = $result->fetch_assoc();
$ala = $ila['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ima>0 ORDER BY ima DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ima = $result->fetch_assoc();
$ama = $ima['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE imd>0 ORDER BY imd DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$imd = $result->fetch_assoc();
$amd = $imd['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ime>0 ORDER BY ime DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ime = $result->fetch_assoc();
$ame = $ime['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE imi>0 ORDER BY imi DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$imi = $result->fetch_assoc();
$ami = $imi['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE imn>0 ORDER BY imn DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$imn = $result->fetch_assoc();
$amn = $imn['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE imo>0 ORDER BY imo DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$imo = $result->fetch_assoc();
$amo = $imo['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ims>0 ORDER BY ims DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ims = $result->fetch_assoc();
$ams = $ims['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE imt>0 ORDER BY imt DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$imt = $result->fetch_assoc();
$amt = $imt['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE inc>0 ORDER BY inc DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$inc = $result->fetch_assoc();
$anc = $inc['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ind>0 ORDER BY ind DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ind = $result->fetch_assoc();
$and = $ind['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ine>0 ORDER BY ine DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ine = $result->fetch_assoc();
$ane = $ine['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE inh>0 ORDER BY inh DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$inh = $result->fetch_assoc();
$anh = $inh['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE inj>0 ORDER BY inj DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$inj = $result->fetch_assoc();
$anj = $inj['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE inm>0 ORDER BY inm DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$inm = $result->fetch_assoc();
$anm = $inm['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE inv>0 ORDER BY inv DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$inv = $result->fetch_assoc();
$anv = $inv['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iny>0 ORDER BY iny DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iny = $result->fetch_assoc();
$any = $iny['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ioh>0 ORDER BY ioh DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ioh = $result->fetch_assoc();
$aoh = $ioh['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iok>0 ORDER BY iok DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iok = $result->fetch_assoc();
$aok = $iok['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ior>0 ORDER BY ior DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ior = $result->fetch_assoc();
$aor = $ior['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ipa>0 ORDER BY ipa DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ipa = $result->fetch_assoc();
$apa = $ipa['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iri>0 ORDER BY iri DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iri = $result->fetch_assoc();
$ari = $iri['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE isc>0 ORDER BY isc DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$isc = $result->fetch_assoc();
$asc = $isc['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE isd>0 ORDER BY isd DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$isd = $result->fetch_assoc();
$asd = $isd['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE itn>0 ORDER BY itn DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$itn = $result->fetch_assoc();
$atn = $itn['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE itx>0 ORDER BY itx DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$itx = $result->fetch_assoc();
$atx = $itx['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iut>0 ORDER BY iut DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iut = $result->fetch_assoc();
$aut = $iut['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iva>0 ORDER BY iva DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iva = $result->fetch_assoc();
$ava = $iva['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE ivt>0 ORDER BY ivt DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$ivt = $result->fetch_assoc();
$avt = $ivt['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iwa>0 ORDER BY iwa DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iwa = $result->fetch_assoc();
$awa = $iwa['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iwi>0 ORDER BY iwi DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iwi = $result->fetch_assoc();
$awi = $iwi['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iwv>0 ORDER BY iwv DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iwv = $result->fetch_assoc();
$awv = $iwv['partycolour'];
?>
<?php
       
 


   
      

      
    $query1 = "SELECT partycolour FROM parties WHERE iwy>0 ORDER BY iwy DESC LIMIT 1";
$result = $db_link->query($query1)or die($db_link->error);
$iwy = $result->fetch_assoc();
$awy = $iwy['partycolour'];
}
?>
<centre>
    
    <style>
     svg {
     position: absolute;
    top: 50%;
    left: 60%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
     }
     </style>
<svg xmlns="http://www.w3.org/2000/svg" width='1200' height='700'">
<g id="outlines">
<a xlink:href="state.php?state=AK"><path id="AK" class="hover_group" fill="<?php echo $aak ?>" d="M161.1,453.7l-0.3,85.4l1.6,1l3.1,0.2l1.5-1.1h2.6l0.2,2.9l7,6.8l0.5,2.6l3.4-1.9l0.6-0.2l0.3-3.1 l1.5-1.6l1.1-0.2l1.9-1.5l3.1,2.1l0.6,2.9l1.9,1.1l1.1,2.4l3.9,1.8l3.4,6l2.7,3.9l2.3,2.7l1.5,3.7l5,1.8l5.2,2.1l1,4.4l0.5,3.1 l-1,3.4l-1.8,2.3l-1.6-0.8l-1.5-3.1l-2.7-1.5l-1.8-1.1l-0.8,0.8l1.5,2.7l0.2,3.7l-1.1,0.5l-1.9-1.9l-2.1-1.3l0.5,1.6l1.3,1.8 l-0.8,0.8c0,0-0.8-0.3-1.3-1c-0.5-0.6-2.1-3.4-2.1-3.4l-1-2.3c0,0-0.3,1.3-1,1c-0.6-0.3-1.3-1.5-1.3-1.5l1.8-1.9l-1.5-1.5v-5h-0.8 l-0.8,3.4l-1.1,0.5l-1-3.7l-0.6-3.7l-0.8-0.5l0.3,5.7v1.1l-1.5-1.3l-3.6-6l-2.1-0.5l-0.6-3.7l-1.6-2.9l-1.6-1.1v-2.3l2.1-1.3 l-0.5-0.3l-2.6,0.6l-3.4-2.4l-2.6-2.9l-4.8-2.6l-4-2.6l1.3-3.2v-1.6l-1.8,1.6l-2.9,1.1l-3.7-1.1l-5.7-2.4h-5.5l-0.6,0.5l-6.5-3.9 l-2.1-0.3l-2.7-5.8l-3.6,0.3l-3.6,1.5l0.5,4.5l1.1-2.9l1,0.3l-1.5,4.4l3.2-2.7l0.6,1.6l-3.9,4.4l-1.3-0.3l-0.5-1.9l-1.3-0.8 l-1.3,1.1l-2.7-1.8l-3.1,2.1l-1.8,2.1l-3.4,2.1l-4.7-0.2l-0.5-2.1l3.7-0.6v-1.3l-2.3-0.6l1-2.4l2.3-3.9v-1.8l0.2-0.8l4.4-2.3l1,1.3 h2.7l-1.3-2.6l-3.7-0.3l-5,2.7l-2.4,3.4l-1.8,2.6l-1.1,2.3l-4.2,1.5l-3.1,2.6l-0.3,1.6l2.3,1l0.8,2.1l-2.7,3.2l-6.5,4.2l-7.8,4.2 l-2.1,1.1l-5.3,1.1l-5.3,2.3l1.8,1.3l-1.5,1.5l-0.5,1.1l-2.7-1l-3.2,0.2l-0.8,2.3h-1l0.3-2.4l-3.6,1.3l-2.9,1l-3.4-1.3l-2.9,1.9 h-3.2l-2.1,1.3l-1.6,0.8l-2.1-0.3l-2.6-1.1l-2.3,0.6l-1,1l-1.6-1.1v-1.9l3.1-1.3l6.3,0.6l4.4-1.6l2.1-2.1l2.9-0.6l1.8-0.8l2.7,0.2 l1.6,1.3l1-0.3l2.3-2.7l3.1-1l3.4-0.6l1.3-0.3l0.6,0.5h0.8l1.3-3.7l4-1.5l1.9-3.7l2.3-4.5l1.6-1.5l0.3-2.6l-1.6,1.3l-3.4,0.6 l-0.6-2.4l-1.3-0.3l-1,1l-0.2,2.9l-1.5-0.2l-1.5-5.8l-1.3,1.3l-1.1-0.5l-0.3-1.9l-4,0.2l-2.1,1.1l-2.6-0.3l1.5-1.5l0.5-2.6 l-0.6-1.9l1.5-1l1.3-0.2l-0.6-1.8v-4.4l-1-1l-0.8,1.5h-6.1l-1.5-1.3l-0.6-3.9l-2.1-3.6v-1l2.1-0.8l0.2-2.1l1.1-1.1l-0.8-0.5 l-1.3,0.5l-1.1-2.7l1-5l4.5-3.2l2.6-1.6l1.9-3.7l2.7-1.3l2.6,1.1l0.3,2.4l2.4-0.3l3.2-2.4l1.6,0.6l1,0.6h1.6l2.3-1.3l0.8-4.4 c0,0,0.3-2.9,1-3.4c0.6-0.5,1-1,1-1l-1.1-1.9l-2.6,0.8l-3.2,0.8l-1.9-0.5l-3.6-1.8l-5-0.2l-3.6-3.7l0.5-3.9l0.6-2.4l-2.1-1.8 l-1.9-3.7l0.5-0.8l6.8-0.5h2.1l1,1h0.6l-0.2-1.6l3.9-0.6l2.6,0.3l1.5,1.1l-1.5,2.1l-0.5,1.5l2.7,1.6l5,1.8l1.8-1l-2.3-4.4l-1-3.2 l1-0.8l-3.4-1.9l-0.5-1.1l0.5-1.6l-0.8-3.9l-2.9-4.7l-2.4-4.2l2.9-1.9h3.2l1.8,0.6l4.2-0.2l3.7-3.6l1.1-3.1l3.7-2.4l1.6,1l2.7-0.6 l3.7-2.1l1.1-0.2l1,0.8l4.5-0.2l2.7-3.1h1.1l3.6,2.4l1.9,2.1l-0.5,1.1l0.6,1.1l1.6-1.6l3.9,0.3l0.3,3.7l1.9,1.5l7.1,0.6l6.3,4.2 l1.5-1l5.2,2.6l2.1-0.6l1.9-0.8l4.8,1.9L161.1,453.7z M46,482.6l2.1,5.3l-0.2,1l-2.9-0.3l-1.8-4l-1.8-1.5H39l-0.2-2.6l1.8-2.4 l1.1,2.4l1.5,1.5L46,482.6z M43.4,516.1l3.7,0.8l3.7,1l0.8,1l-1.6,3.7l-3.1-0.2l-3.4-3.6L43.4,516.1z M22.7,502l1.1,2.6 l1.1,1.6l-1.1,0.8l-2.1-3.1V502H22.7z M9,575.1l3.4-2.3l3.4-1l2.6,0.3l0.5,1.6l1.9,0.5l1.9-1.9l-0.3-1.6l2.7-0.6l2.9,2.6 l-1.1,1.8l-4.4,1.1l-2.7-0.5l-3.7-1.1l-4.4,1.5l-1.6,0.3L9,575.1z M57.9,570.6l1.6,1.9l2.1-1.6l-1.5-1.3L57.9,570.6z M60.8,573.6l1.1-2.3l2.1,0.3l-0.8,1.9H60.8z M84.4,571.7l1.5,1.8l1-1.1l-0.8-1.9L84.4,571.7z M93.2,559.2l1.1,5.8l2.9,0.8 l5-2.9l4.4-2.6l-1.6-2.4l0.5-2.4l-2.1,1.3l-2.9-0.8l1.6-1.1l1.9,0.8l3.9-1.8l0.5-1.5l-2.4-0.8l0.8-1.9l-2.7,1.9l-4.7,3.6l-4.8,2.9L93.2,559.2z M135.5,539.4l2.4-1.5l-1-1.8l-1.8,1L135.5,539.4z" /><title>
		    <?php
		   echo $displayak;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=HI"><path id="HI" class="hover_group" fill="<?php echo $ahi ?>" d="M233.1,519.3l1.9-3.6l2.3-0.3l0.3,0.8l-2.1,3.1H233.1z M243.3,515.6l6.1,2.6l2.1-0.3l1.6-3.9 l-0.6-3.4l-4.2-0.5l-4,1.8L243.3,515.6z M274,525.6l3.7,5.5l2.4-0.3l1.1-0.5l1.5,1.3l3.7-0.2l1-1.5l-2.9-1.8l-1.9-3.7l-2.1-3.6 l-5.8,2.9L274,525.6z M294.2,534.5l1.3-1.9l4.7,1l0.6-0.5l6.1,0.6l-0.3,1.3l-2.6,1.5l-4.4-0.3L294.2,534.5z M299.5,539.7l1.9,3.9 l3.1-1.1l0.3-1.6l-1.6-2.1l-3.7-0.3V539.7z M306.5,538.5l2.3-2.9l4.7,2.4l4.4,1.1l4.4,2.7v1.9l-3.6,1.8l-4.8,1l-2.4-1.5 L306.5,538.5z M323.1,554.1l1.6-1.3l3.4,1.6l7.6,3.6l3.4,2.1l1.6,2.4l1.9,4.4l4,2.6l-0.3,1.3l-3.9,3.2l-4.2,1.5l-1.5-0.6l-3.1,1.8 l-2.4,3.2l-2.3,2.9l-1.8-0.2l-3.6-2.6l-0.3-4.5l0.6-2.4l-1.6-5.7l-2.1-1.8l-0.2-2.6l2.3-1l2.1-3.1l0.5-1l-1.6-1.8L323.1,554.1z" /><title>
		    <?php
		   echo $displayhi;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=AL"><path id="AL" class="hover_group" fill="<?php echo $aal ?>" d="M625.6,466.8l-1.6-15.2l-2.7-18.8l0.2-14.1l0.8-31l-0.2-16.7l0.2-6.4l7.8-0.4l27.8-2.6l8.9-0.7 l-0.1,2.2l0.2,2.1l0.6,3.4l3.4,7.9l2.4,9.9l1.5,6.1l1.6,4.8l1.5,7l2.1,6.3l2.6,3.4l0.5,3.4l1.9,0.8l0.2,2.1l-1.8,4.8l-0.5,3.2 l-0.2,1.9l1.6,4.4l0.3,5.3l-0.8,2.4l0.6,0.8l1.5,0.8l1,2.5h-6.3l-6.8,0.6l-25.5,2.9l-10.4,1.4l-0.1,3.8l1.8,1.8l2.6,1.9l0.6,7.9 l-5.5,2.6l-2.7-0.3l2.7-1.9v-1l-3.1-6l-2.3-0.6l-1.5,4.4l-1.3,2.7l-0.6-0.2H625.6z" /><title>
		    <?php
		   echo $displayal;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=AR"><path id="AR" class="hover_group" fill="<?php echo $aar ?>" d="M591,345l-3.8,0.9l-6.2-0.5l0.7-3l3.2-2.7l0.5-2.3l-1.8-3l-11,0.5l-20.8,0.9l-23.3,0.7L505,337 l1.6,6.9v8.2l1.4,11l0.2,37.8l2.3,1.9l3-1.4l2.7,1.1l0.4,10.3l22.9-0.1l18.9-0.8l10.1-0.2l1.1-2.1l-0.3-3.5l-1.8-3l1.6-1.5 l-1.6-2.5l0.7-2.5l1.4-5.6l2.5-2.1l-0.7-2.3l3.7-5.4l2.7-1.4l-0.1-1.5l-0.3-1.8l2.9-5.6l2.4-1.3l0.4-3.4l1.8-1.2l0.9-4.2l-1.3-4 l4-2.4l0.6-2l1.2-4.3L591,345z" /><title>
		    <?php
		   echo $displayar;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=AZ"><path id="AZ" class="hover_group" fill="<?php echo $aaz ?>" d="M137.7,387.5l-2.6,2.2l-0.3,1.5l0.5,1l18.9,10.7l12.1,7.6l14.7,8.6l16.8,10l12.3,2.4l25.1,2.7 l2.5-12.5l3.8-27.2l7-52.9l4.3-31l-24.6-3.7l-27.2-4.6l-33.4-6.3l-2.9,18.1l-0.5,0.5l-1.7,2.6l-2.5-0.1l-1.3-2.7l-2.7-0.3l-0.9-1.1 h-0.9l-0.9,0.6l-1.9,1l-0.1,7l-0.2,1.7l-0.6,12.6l-1.5,2.2l-0.6,3.3l2.7,4.9l1.3,5.8l0.8,1l1,0.6l-0.1,2.3l-1.6,1.4l-3.4,1.7 l-1.9,1.9l-1.5,3.7l-0.6,4.9l-2.9,2.7l-2.1,0.7l-0.1,5.8l-0.5,1.7l0.5,0.8l3.7,0.6l-0.6,2.7l-1.5,2.2L137.7,387.5z" /><title>
		    <?php
		   echo $displayaz;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=CA"><path id="CA" class="hover_group" fill="<?php echo $aca ?>" d="M136.9,386.8l3.8-0.5l1.5-2l0.7-1.9l-3.2-0.1l-1.1-1.8l0.8-1.7l0-6.2l2.2-1.3l2.7-2.6l0.4-4.9 l1.6-3.5l1.9-2.1l3.3-1.7l1.3-0.7l0.8-1.5l-0.9-0.9l-1-1.5l-0.9-5.3l-2.9-5.2l0.1-2.8l-2.2-3.2l-15-23.2l-19.4-28.7l-22.4-33 l-12.7-19.5l1.8-7.2l6.8-25.9l8.1-31.4l-12.4-3.3l-13.5-3.4l-12.6-4.1l-7.5-2.1l-11.4-3l-7.1-2.4l-1.6,4.7l-0.2,7.4l-5.2,11.8 l-3.1,2.6l-0.3,1.1l-1.8,0.8l-1.5,4.2l-0.8,3.2l2.7,4.2l1.6,4.2l1.1,3.6l-0.3,6.5l-1.8,3.1l-0.6,5.8l-1,3.7l1.8,3.9l2.7,4.5 l2.3,4.8l1.3,4l-0.3,3.2l-0.3,0.5v2.1l5.7,6.3l-0.5,2.4l-0.6,2.3l-0.6,1.9l0.2,8.2l2.1,3.7l1.9,2.6l2.7,0.5l1,2.7l-1.1,3.6 l-2.1,1.6h-1.1l-0.8,3.9l0.5,2.9l3.2,4.4l1.6,5.3l1.5,4.7l1.3,3.1l3.4,5.8l1.5,2.6l0.5,2.9l1.6,1v2.4l-0.8,1.9l-1.8,7.1l-0.5,1.9 l2.4,2.7l4.2,0.5l4.5,1.8l3.9,2.1h2.9l2.9,3.1l2.6,4.8l1.1,2.3l3.9,2.1l4.8,0.8l1.5,2.1l0.6,3.2l-1.5,0.6l0.3,1l3.2,0.8l2.7,0.2 l2.9,4.7l3.9,4.2l0.8,2.3l2.6,4.2l0.3,3.2v9.4l0.5,1.8l10,1.5l19.7,2.7L136.9,386.8z M48.8,337l1.3,1.5l-0.2,1.3l-3.2-0.1 l-0.6-1.2l-0.6-1.5L48.8,337z M50.7,337l1.2-0.6l3.6,2.1l3.1,1.2l-0.9,0.6l-4.5-0.2l-1.6-1.6L50.7,337z M71.4,356.8l1.8,2.3 l0.8,1l1.5,0.6l0.6-1.5l-1-1.8l-2.7-2l-1.1,0.2V356.8z M70,365.5l1.8,3.2l1.2,1.9l-1.5,0.2l-1.3-1.2c0,0-0.7-1.5-0.7-1.9 s0-2.2,0-2.2L70,365.5z" /><title>
		    <?php
		   echo $displayca;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=CO"><path id="CO" class="hover_group" fill="<?php echo $aco ?>" d="M378.6,256.8l1.4-21.3l-32.1-3.1l-24.5-2.7l-37.3-4.1l-20.7-2.5l-2.6,22.2l-3.2,22.4l-3.8,28 l-1.5,11.1l-0.3,2.8l33.9,3.8l37.7,4.3l32,3.2l16.6,0.8" /><title>
		    <?php
		   echo $displayco;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=CT"><path id="CT" class="hover_group" fill="<?php echo $act ?>" d="M873.2,180.1l-0.6-4.2l-0.8-4.4l-1.6-6l-4.2,0.9l-21.8,4.8l0.6,3.3l1.5,7.3v8.1l-1.1,2.3l1.8,2.1 l5-3.4l3.6-3.2l1.9-2.1l0.8,0.6l2.7-1.5l5.2-1.1L873.2,180.1z" /><title>
		    <?php
		   echo $displayct;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=DE"><path id="DE" class="hover_group" fill="<?php echo $ade ?>" d="M822.4,230.4l0.6-2.1l0-1.2l-1.3-0.1l-2.1,1.6l-1.5,1.5l1.5,4.2l2.3,5.7l2.1,9.7l1.6,6.3l5-0.2 l6.1-1.2l-2.3-7.4l-1,0.5l-3.6-2.4l-1.8-4.7l-1.9-3.6l-2.3-1l-2.1-3.6L822.4,230.4z" /><title>
		    <?php
		   echo $displayde;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=FL"><path id="FL" class="hover_group" fill="<?php echo $afl ?>" d="M755.4,445.5l2.3,7.3l3.7,9.7l5.3,9.4l3.7,6.3l4.8,5.5l4,3.7l1.6,2.9l-1.1,1.3L779,493l2.9,7.4 l2.9,2.9l2.6,5.3l3.6,5.8l4.5,8.2l1.3,7.6l0.5,12l0.6,1.8l-0.3,3.4l-2.4,1.3l0.3,1.9l-0.6,1.9l0.3,2.4l0.5,1.9l-2.7,3.2l-3.1,1.5 l-3.9,0.2l-1.5,1.6l-2.4,1l-1.3-0.5l-1.1-1l-0.3-2.9l-0.8-3.4l-3.4-5.2l-3.6-2.3l-3.9-0.3l-0.8,1.3l-3.1-4.4l-0.6-3.6l-2.6-4 l-1.8-1.1l-1.6,2.1l-1.8-0.3l-2.1-5l-2.9-3.9l-2.9-5.3l-2.6-3.1l-3.6-3.7l2.1-2.4l3.2-5.5l-0.2-1.6l-4.5-1l-1.6,0.6l0.3,0.6l2.6,1 l-1.5,4.5l-0.8,0.5l-1.8-4l-1.3-4.8l-0.3-2.7l1.5-4.7v-9.5L736,485l-1.3-3.1l-5.2-1.3l-1.9-0.6l-1.6-2.6l-3.4-1.6l-1.1-3.4l-2.7-1 l-2.4-3.7l-4.2-1.5l-2.9-1.5h-2.6l-4,0.8l-0.2,1.9l0.8,1l-0.5,1.1l-3.1-0.2l-3.7,3.6l-3.6,1.9h-3.9l-3.2,1.3l-0.3-2.7l-1.6-1.9 l-2.9-1.1l-1.6-1.5l-8.1-3.9l-7.6-1.8l-4.4,0.6l-6,0.5l-6,2.1l-3.5,0.6l-0.2-8l-2.6-1.9l-1.8-1.8l0.3-3.1l10.2-1.3l25.5-2.9 l6.8-0.6l5.4,0.3l2.6,3.9l1.5,1.5l8.1,0.5l10.8-0.6l21.5-1.3l5.4-0.7l4.6,0l0.2,2.9l3.8,0.8l0.3-4.8l-1.6-4.5l1-0.7l5.1,0.5 L755.4,445.5z M767.9,577.9l2.4-0.6l1.3-0.2l1.5-2.3l2.3-1.6l1.3,0.5l1.7,0.3l0.4,1.1l-3.5,1.2l-4.2,1.5l-2.3,1.2L767.9,577.9z M781.4,572.9l1.2,1.1l2.7-2.1l5.3-4.2l3.7-3.9l2.5-6.6l1-1.7l0.2-3.4l-0.7,0.5l-1,2.8l-1.5,4.6l-3.2,5.3l-4.4,4.2l-3.4,1.9 L781.4,572.9z" /><title>
		    <?php
		   echo $displayfl;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=GA"><path id="GA" class="hover_group" fill="<?php echo $aga ?>" d="M689.6,358l-4.8,0.8l-8.4,1.1l-8.6,0.9v2.2l0.2,2.1l0.6,3.4l3.4,7.9l2.4,9.9l1.5,6.1l1.6,4.8l1.5,7 l2.1,6.3l2.6,3.4l0.5,3.4l1.9,0.8l0.2,2.1l-1.8,4.8l-0.5,3.2l-0.2,1.9l1.6,4.4l0.3,5.3l-0.8,2.4l0.6,0.8l1.5,0.8l0.6,3.4l2.6,3.9 l1.5,1.5l7.9,0.2l10.8-0.6l21.5-1.3l5.4-0.7l4.6,0l0.2,2.9l2.6,0.8l0.3-4.4l-1.6-4.5l1.1-1.6l5.8,0.8l5,0.3l-0.8-6.3l2.3-10 l1.5-4.2l-0.5-2.6l3.3-6.2l-0.5-1.4l-1.9,0.7l-2.6-1.3l-0.6-2.1l-1.3-3.6l-2.3-2.1l-2.6-0.6l-1.6-4.8l-2.9-6.3l-4.2-1.9l-2.1-1.9 l-1.3-2.6l-2.1-1.9l-2.3-1.3l-2.3-2.9l-3.1-2.3l-4.5-1.8l-0.5-1.5l-2.4-2.9l-0.5-1.5l-3.4-4.9l-3.4,0.2l-4.1-3l-1.3-1.3l-0.3-1.8 l0.8-1.9l2.4-1.2l-1.1-1.2l0.1-0.3l-5.8,1l-7,0.8L689.6,358z" /><title>
		    <?php
		   echo $displayga;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=IA"><path id="IA" class="hover_group" fill="<?php echo $aia ?>" d="M566.6,201.6l0.2,1.9l2.3,1.1l1.1,1.3l0.3,1.3l3.9,3.2l0.7,2.2l-0.8,2.9l-1.5,3.5l-0.8,2.7 l-2.2,1.6l-1.7,0.6l-5.5,1.5l-0.7,2.3l-0.8,2.3l0.6,1.4l1.7,1.7l0,3.7l-2.2,1.6l-0.5,1.5v2.5l-1.5,0.5l-1.7,1.4l-0.5,1.5l0.5,1.7 l-1.4,1.2l-2.3-2.9l-1.5-2.6l-8.3,0.8l-10.2,0.6l-25,0.7l-13,0.2l-9.4,0.2l-1.3,0.1l-1.7-4.5l-0.2-6.6l-1.6-4.1l-0.7-5.3l-2.3-3.7 l-0.9-4.8l-2.7-7.5l-1.1-5.4l-1.4-2.2l-1.6-2.7l1.8-4.3l1.4-5.7l-2.7-2.1l-0.5-2.7l0.9-2.5h1.7h11.5l49.6-0.7l19.9-0.7l1.9,2.7 l1.8,2.6l0.5,0.8l-1.8,2.7l0.5,4.2l2.5,3.9l3,1.8l2.4,0.2L566.6,201.6z" /><title>
		    <?php
		   echo $displayia;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=ID"><path id="ID" class="hover_group" fill="<?php echo $aid ?>" d="M162.1,181c-22.6-4.3-14.1-2.8-21.1-4.4l4.4-17.5l4.3-17.7l1.4-4.2l2.5-5.9l-1.3-2.3l-2.5,0.1 l-0.8-1l0.5-1.1l0.3-3.1l4.5-5.5l1.8-0.5l1.1-1.1l0.6-3.2l0.9-0.7l3.9-5.8l3.9-4.3l0.2-3.8l-3.4-2.6l-1.3-4.4l0.4-9.7l3.7-16.5 l4.5-20.8l3.8-13.5l0.8-3.8l13,2.5l-4.2,21.5l2.9,7.7l-1.1,4.6l2,4.6l3.2,1.7l4.5,9.8l2.7,3.8l0.6,1.1l3.4,1.1l0.5,2.5l-6.9,16.8 l0.3,3.3l2.7,2.9l1.9,0.5l4.8-3.6l0.4-0.5l0.2,0.8l0.3,4.1l2.6,12.9l3.5,2.7l0.4,0.8l2.1,2.4l-0.8,2.8l0.7,3.8l1.9,0.9l2.1-1.6 l2.6-0.5l3.4,1.6l2.5-0.6l3.8-0.2l4,1.6l2.7-0.3l0.9-2.3l2.5-1.6l0.7,1.7l0.6,2.2l2.3,2.5l-3.8,24l-5.1,29l-4.2-0.3l-8.2-1.5 l-9.8-1.8l-12.2-2.4l-12.5-2.5l-8.5-1.8l-9.3-1.7L162.1,181z" /><title>
		    <?php
		   echo $displayid;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=IL"><path id="IL" class="hover_group" fill="<?php echo $ail ?>" d="M617.8,301.5v-3.6l0.3-4.9l2.4-3.1l1.8-3.8l2.6-3.9l-0.4-5.3l-2-3.5l-0.1-3.3l0.7-5.3l-0.8-7.2 l-1.1-15.8l-1.3-15l-0.9-11.6l-0.3-0.9l-0.8-2.6l-1.3-3.7l-1.6-1.8l-1.5-2.6l-0.2-5.5l-9.9,1.3l-27.2,1.7l-8.7-0.4l0.2,2.4l2.3,0.7 l0.9,1.1l0.5,1.8l3.9,3.4l0.7,2.3l-0.7,3.4l-1.8,3.7l-0.7,2.5l-2.3,1.8l-1.8,0.7l-5.3,1.4l-0.7,1.8L562,230l0.7,1.4l1.8,1.6 l-0.2,4.1l-1.8,1.6l-0.7,1.6v2.7l-1.8,0.5l-1.6,1.1l-0.2,1.4l0.2,2.1l-1.7,1.3l-1,2.8l0.5,3.7l2.3,7.3l7.3,7.5l5.5,3.7l-0.2,4.3 l0.9,1.4l6.4,0.5l2.7,1.4l-0.7,3.7l-2.3,5.9l-0.7,3.2l2.3,3.9l6.4,5.3l4.6,0.7l2.1,5l2.1,3.2l-0.9,3l1.6,4.1l1.8,2.1l1.9-0.8 l0.7-2.2l2-1.4l3.2-1.1l3.1,1.2l2.9,1.1l0.8-0.2l-0.1-1.2l-1.1-2.8l0.4-2.4l2.3-1.6l2.4-1l1.2-0.4l-0.6-1.3l-0.8-2.2l1.2-1.3 L617.8,301.5z" /><title>
		    <?php
		   echo $displayil;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=IN"><path id="IN" class="hover_group" fill="<?php echo $ain ?>" d="M618.4,300.9l0.1-2.9l0.5-4.5l2.3-2.9l1.8-3.9l2.6-4.2l-0.5-5.8l-1.8-2.7l-0.3-3.2l0.8-5.5l-0.5-7 l-1.3-16l-1.3-15.4l-1-11.7l3.1,0.9l1.5,1l1.1-0.3l2.1-1.9l2.8-1.6l5.1-0.2l22-2.3l5.6-0.5l1.5,16l4.3,36.8l0.6,5.8L669,271 l1.2,1.8l0.1,1.4l-2.5,1.6l-3.5,1.6l-3.2,0.6l-0.6,4.9l-4.6,3.3l-2.8,4l0.3,2.4l-0.6,1.5h-3.3l-1.6-1.6l-2.5,1.3l-2.7,1.5l0.2,3.1 l-1.2,0.3l-0.5-1l-2.2-1.5l-3.3,1.3l-1.6,3l-1.4-0.8l-1.5-1.6l-4.5,0.5l-5.6,1L618.4,300.9z" /><title>
		    <?php
		   echo $displayin;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=KS"><path id="KS" class="hover_group" fill="<?php echo $aks ?>" d="M503.4,325.1l-12.6,0.2l-46.1-0.5l-44.6-2.1l-24.6-1.3l4.1-64.7l21.8,0.8l40.5,1.4l44.1,0.5h5.1 l3.2,3.2l2.8,0.2l0.9,1.1v2l-1.8,1.6l-0.5,2.6l2.2,3.6l2.5,3.1l2.5,2l1.1,11.2L503.4,325.1z" /><title>
		    <?php
		   echo $displayks;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=KY"><path id="KY" class="hover_group" fill="<?php echo $aky ?>" d="M721.8,297.8l-2.3,2.7l-4.2,3.6L711,310l-1.8,1.8v2.1l-3.9,2.1l-5.7,3.4l-3.5,0.4l-51.9,4.9 l-15.8,1.8l-4.6,0.5l-3.9,0l-0.2,4.2l-8.2,0.1l-7,0.6l-10.4,0.2l1.9-0.2l2.2-1.8l2.1-1.1l0.2-3.2l0.9-1.8l-1.6-2.5l0.8-1.9l2.3-1.8 l2.1-0.6l2.7,1.3l3.6,1.3l1.1-0.3l0.2-2.3l-1.3-2.4l0.3-2.3l1.9-1.5l2.6-0.6l1.6-0.6l-0.8-1.8l-0.6-1.9l1.1-0.8l1.1-3.3l3-1.7 l5.8-1l3.6-0.5l1.5,1.9l1.8,0.8l1.8-3.2l2.9-1.5l1.9,1.6l0.8,1.1l2.1-0.5l-0.2-3.4l2.9-1.6l1.1-0.8l1.1,1.6h4.7l0.8-2.1l-0.3-2.3 l2.9-3.6l4.7-3.9l0.5-4.5l2.7-0.3l3.9-1.8l2.7-1.9l-0.3-1.9l-1.5-1.5l0.6-2.2l4.1-0.2l2.4-0.8l2.9,1.6l1.6,4.4l5.8,0.3l1.8,1.8 l2.1,0.2l2.4-1.5l3.1,0.5l1.3,1.5l2.7-2.6l1.8-1.3h1.6l0.6,2.7l1.8,1l2.4,2.2l0.2,5.5l0.8,1.6l2.6,1.5l0.6,2.3l2.9,3.7l2.6,2.7 L721.8,297.8z" /><title>
		    <?php
		   echo $displayky;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=LA"><path id="LA" class="hover_group" fill="<?php echo $ala ?>" d="M602.2,473l-1-2.6l-1.1-3.1l-3.3-3.5l0.9-6.8l-0.1-1.1l-1.3,0.3l-8.2,0.9l-25,0.5l-0.7-2.4l0.9-8.5 l3.3-5.9l5-8.7l-0.6-2.4l1.3-0.7l0.5-2l-2.3-2.1l-0.1-1.9l-1.8-4.3l-0.5-5.9l-9.7,0.1l-19.2,0.9l-22.2,0l0,9.6l0.7,9.4l0.7,3.9 l2.5,4.1l0.9,5l4.3,5.5l0.2,3.2l0.7,0.7l-0.7,8.5l-3,5l1.6,2.1l-0.7,2.5l-0.7,7.3l-1.4,3.2l0.1,3.6l4.7-1.5l8.1-0.3l10.3,3.6 l6.5,1.1l3.7-1.5l3.2,1.1l3.2,1l0.8-2.1l-3.2-1.1l-2.6,0.5l-2.7-1.6c0,0,0.2-1.3,0.8-1.5c0.6-0.2,3.1-1,3.1-1l1.8,1.5l1.8-1 l3.2,0.6l1.5,2.4l0.3,2.3l4.5,0.3l1.8,1.8l-0.8,1.6l-1.3,0.8l1.6,1.6l8.4,3.6l3.6-1.3l1-2.4l2.6-0.6l1.8-1.5l1.3,1l0.8,2.9 l-2.3,0.8l0.6,0.6l3.4-1.3l2.3-3.4l0.8-0.5l-2.1-0.3l0.8-1.6l-0.2-1.5l2.1-0.5l1.1-1.3l0.6,0.8c0,0-0.2,3.1,0.6,3.1 c0.8,0,4.2,0.6,4.2,0.6l4,1.9l1,1.5h2.9l1.1,1l2.3-3.1v-1.5h-1.3l-3.4-2.7l-5.8-0.8l-3.2-2.3l1.1-2.7l2.3,0.3l0.2-0.6l-1.8-1v-0.5 h3.2l1.8-3.1l-1.3-1.9l-0.3-2.7l-1.5,0.2l-1.9,2.1l-0.6,2.6l-3.1-0.6l-1-1.8l1.8-1.9l2-1.8L602.2,473z" /><title>
		    <?php
		   echo $displayla;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MA"><path id="MA" class="hover_group" fill="<?php echo $ama ?>" d="M900,173.9l2.2-0.7l0.5-1.7l1,0.1l1,2.3l-1.3,0.5l-3.9,0.1L900,173.9z M890.6,174.7l2.3-2.6h1.6 l1.8,1.5l-2.4,1l-2.2,1L890.6,174.7z M855.8,152.7l17.5-4.2l2.3-0.6l2.1-3.2l3.7-1.7l2.9,4.4l-2.4,5.2l-0.3,1.5l1.9,2.6l1.1-0.8 h1.8l2.3,2.6l3.9,6l3.6,0.5l2.3-1l1.8-1.8l-0.8-2.7l-2.1-1.6l-1.5,0.8l-1-1.3l0.5-0.5l2.1-0.2l1.8,0.8l1.9,2.4l1,2.9l0.3,2.4 l-4.2,1.5l-3.9,1.9l-3.9,4.5l-1.9,1.5v-1l2.4-1.5l0.5-1.8l-0.8-3.1l-2.9,1.5l-0.8,1.5l0.5,2.3l-2.1,1l-2.7-4.5l-3.4-4.4l-2.1-1.8 l-6.5,1.9l-5.1,1.1l-21.8,4.8l-0.4-4.9l0.6-10.6l5.2-0.9L855.8,152.7z" /><title>
		    <?php
		   echo $displayma;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MD"><path id="MD" class="hover_group" fill="<?php echo $amd ?>" d="M837,255.3l-6.1,1.3l-5.8,0.2l-1.8-7.1l-2.1-9.7l-2.3-5.7l-1.3-4.4l-7.5,1.6l-14.9,2.8l-37.5,7.6 l1.1,5l1,5.7l0.3-0.3l2.1-2.4l2.3-2.6l2.4-0.6l1.5-1.5l1.8-2.6l1.3,0.6l2.9-0.3l2.6-2.1l2-1.5l1.8-0.5l1.6,1.1l2.9,1.5l1.9,1.8 l1.2,1.5l4.1,1.7v2.9l5.5,1.3l1.1,0.5l1.4-2l2.9,2l-1.3,2.5l-0.8,4l-1.8,2.6v2.1l0.6,1.8l5.1,1.4l4.3-0.1l3.1,1l2.1,0.3l1-2.1 l-1.5-2.1v-1.8l-2.4-2.1l-2.1-5.5l1.3-5.3l-0.2-2.1l-1.3-1.3c0,0,1.5-1.6,1.5-2.3c0-0.6,0.5-2.1,0.5-2.1l1.9-1.3l1.9-1.6l0.5,1 l-1.5,1.6l-1.3,3.7l0.3,1.1l1.8,0.3l0.5,5.5l-2.1,1l0.3,3.6l0.5-0.2l1.1-1.9l1.6,1.8l-1.6,1.3l-0.3,3.4l2.6,3.4l3.9,0.5l1.6-0.8 l3.2,4.2l1.4,0.5l6.7-2.8l2-4L837,255.3z M820.3,264.3l1.1,2.5l0.2,1.8l1.1,1.9c0,0,0.9-0.9,0.9-1.2c0-0.3-0.7-3.1-0.7-3.1 l-0.7-2.3L820.3,264.3z" /><title>
		    <?php
		   echo $displaymd;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=ME"><path id="ME" class="hover_group" fill="<?php echo $ame ?>" d="M923.2,77.3l1.9,2.1l2.3,3.7v1.9l-2.1,4.7l-1.9,0.6l-3.4,3.1l-4.8,5.5c0,0-0.6,0-1.3,0 c-0.6,0-1-2.1-1-2.1l-1.8,0.2l-1,1.5l-2.4,1.5l-1,1.5l1.6,1.5l-0.5,0.6l-0.5,2.7l-1.9-0.2v-1.6l-0.3-1.3l-1.5,0.3l-1.8-3.2 l-2.1,1.3l1.3,1.5l0.3,1.1l-0.8,1.3l0.3,3.1l0.2,1.6l-1.6,2.6l-2.9,0.5l-0.3,2.9l-5.3,3.1l-1.3,0.5l-1.6-1.5l-3.1,3.6l1,3.2 l-1.5,1.3l-0.2,4.4l-1.1,6.3l-2.5-1.2l-0.5-3.1l-3.9-1.1l-0.3-2.7l-7.3-23.4l-4.2-13.6l1.4-0.1l1.5,0.4v-2.6l0.8-5.5l2.6-4.7l1.5-4 l-1.9-2.4v-6l0.8-1l0.8-2.7l-0.2-1.5l-0.2-4.8l1.8-4.8l2.9-8.9l2.1-4.2h1.3l1.3,0.2v1.1l1.3,2.3l2.7,0.6l0.8-0.8v-1l4-2.9l1.8-1.8 l1.5,0.2l6,2.4l1.9,1l9.1,29.9h6l0.8,1.9l0.2,4.8l2.9,2.3h0.8l0.2-0.5l-0.5-1.1L923.2,77.3z M902.3,107.5l1.5-1.5l1.4,1.1 l0.6,2.4l-1.7,0.9L902.3,107.5z M909,101.6l1.8,1.9c0,0,1.3,0.1,1.3-0.2s0.2-2,0.2-2l0.9-0.8l-0.8-1.8l-2,0.7L909,101.6z" /><title>
		    <?php
		   echo $displayme;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MI"><path id="MI" class="hover_group" fill="<?php echo $ami ?>" d="M581.6,82.1l1.8-2.1l2.2-0.8l5.4-3.9l2.3-0.6l0.5,0.5l-5.1,5.1l-3.3,1.9l-2.1,0.9L581.6,82.1z M667.8,114.2l0.6,2.5l3.2,0.2l1.3-1.2c0,0-0.1-1.5-0.4-1.6c-0.3-0.2-1.6-1.9-1.6-1.9l-2.2,0.2l-1.6,0.2l-0.3,1.1L667.8,114.2z M697.9,177.2l-3.2-8.2l-2.3-9.1l-2.4-3.2l-2.6-1.8l-1.6,1.1l-3.9,1.8l-1.9,5l-2.7,3.7l-1.1,0.6l-1.5-0.6c0,0-2.6-1.5-2.4-2.1 c0.2-0.6,0.5-5,0.5-5l3.4-1.3l0.8-3.4l0.6-2.6l2.4-1.6l-0.3-10l-1.6-2.3l-1.3-0.8l-0.8-2.1l0.8-0.8l1.6,0.3l0.2-1.6L676,131 l-1.3-2.6h-2.6l-4.5-1.5l-5.5-3.4h-2.7l-0.6,0.6l-1-0.5l-3.1-2.3l-2.9,1.8l-2.9,2.3l0.3,3.6l1,0.3l2.1,0.5l0.5,0.8l-2.6,0.8 l-2.6,0.3l-1.5,1.8l-0.3,2.1l0.3,1.6l0.3,5.5l-3.6,2.1l-0.6-0.2v-4.2l1.3-2.4l0.6-2.4l-0.8-0.8l-1.9,0.8l-1,4.2l-2.7,1.1l-1.8,1.9 l-0.2,1l0.6,0.8l-0.6,2.6l-2.3,0.5v1.1l0.8,2.4l-1.1,6.1l-1.6,4l0.6,4.7l0.5,1.1l-0.8,2.4l-0.3,0.8l-0.3,2.7l3.6,6l2.9,6.5l1.5,4.8 l-0.8,4.7l-1,6l-2.4,5.2l-0.3,2.7l-3.3,3.1l4.4-0.2l21.4-2.3l7.3-1l0.1,1.7l6.9-1.2l10.3-1.5l3.9-0.5l0.1-0.6l0.2-1.5l2.1-3.7 l2-1.7l-0.2-5.1l1.6-1.6l1.1-0.3l0.2-3.6l1.5-3l1.1,0.6l0.2,0.6l0.8,0.2l1.9-1L697.9,177.2z M567.5,111.2l0.7-0.6l2.7-0.8l3.6-2.3 v-1l0.6-0.6l6-1l2.4-1.9l4.4-2.1l0.2-1.3l1.9-2.9l1.8-0.8l1.3-1.8l2.3-2.3l4.4-2.4l4.7-0.5l1.1,1.1l-0.3,1l-3.7,1l-1.5,3.1 l-2.3,0.8l-0.5,2.4l-2.4,3.2l-0.3,2.6l0.8,0.5l1-1.1l3.6-2.9l1.3,1.3h2.3l3.2,1l1.5,1.1l1.5,3.1l2.7,2.7l3.9-0.2l1.5-1l1.6,1.3 l1.6,0.5l1.3-0.8h1.1l1.6-1l4-3.6l3.4-1.1l6.6-0.3l4.5-1.9l2.6-1.3l1.5,0.2v5.7l0.5,0.3l2.9,0.8l1.9-0.5l6.1-1.6l1.1-1.1l1.5,0.5v7 l3.2,3.1l1.3,0.6l1.3,1l-1.3,0.3l-0.8-0.3l-3.7-0.5l-2.1,0.6l-2.3-0.2l-3.2,1.5h-1.8l-5.8-1.3l-5.2,0.2l-1.9,2.6l-7,0.6l-2.4,0.8 l-1.1,3.1l-1.3,1.1l-0.5-0.2l-1.5-1.6l-4.5,2.4h-0.6l-1.1-1.6l-0.8,0.2l-1.9,4.4l-1,4l-3.2,7l-1.2-1l-1.4-1l-1.9-10.3l-3.5-1.4 l-2.1-2.3l-12.1-2.7l-2.9-1l-8.2-2.2l-7.9-1.1L567.5,111.2z" /><title>
		    <?php
		   echo $displaymi;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MN"><path id="MN" class="hover_group" fill="<?php echo $amn ?>" d="M471.9,128.5l-0.5-8.5l-1.8-7.3l-1.8-13.5l-0.5-9.8l-1.8-3.4l-1.6-5v-10.3l0.7-3.9l-1.8-5.5l30.1,0 l0.3-8.2l0.6-0.2l2.3,0.5l1.9,0.8l0.8,5.5l1.5,6.1l1.6,1.6h4.8l0.3,1.5l6.3,0.3v2.1h4.8l0.3-1.3l1.1-1.1l2.3-0.6l1.3,1h2.9l3.9,2.6 l5.3,2.4l2.4,0.5l0.5-1l1.5-0.5l0.5,2.9l2.6,1.3l0.5-0.5l1.3,0.2v2.1l2.6,1h3.1l1.6-0.8l3.2-3.2l2.6-0.5l0.8,1.8l0.5,1.3h1l1-0.8 l8.9-0.3l1.8,3.1h0.6l0.7-1.1l4.4-0.4l-0.6,2.3l-3.9,1.8l-9.2,4.1l-4.8,2l-3.1,2.6l-2.4,3.6l-2.3,3.9l-1.8,0.8l-4.5,5l-1.3,0.2 l-3.8,2.9l-2.8,3.2l-0.2,3l0.2,7.8l-1.6,1.6L530,128l-1.8,5.7l2.5,3.6l0.5,2.5l-1.1,3l-0.2,3.7l0.5,7.1l3.4,4.1h3l2.5,2.3l3.2,1.4 l3.7,5l7.1,5l1.8,2.1l0.2,5.7l-20.6,0.7l-60.2,0.5l-0.3-35.7l-0.5-3l-4.1-3.4l-1.1-1.8v-1.6l2.1-1.6l1.4-1.4L471.9,128.5z" /><title>
		    <?php
		   echo $displaymn;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MO"><path id="MO" class="hover_group" fill="<?php echo $amo ?>" d="M555.8,249.5l-2.5-3.1l-1.1-2.3l-7.8,0.7l-9.8,0.5l-25.4,0.9l-13.5,0.2l-7.9,0.1l-2.3,0.1l1.3,2.5 l-0.2,2.3l2.5,3.9l3.1,4.1l3.1,2.7l2.3,0.2l1.4,0.9v3l-1.8,1.6l-0.5,2.3l2.1,3.4l2.5,3l2.5,1.8l1.4,11.7l-0.7,35.3l0.2,4.7l0.5,5.4 l23.4-0.1l23.2-0.7l20.8-0.8l11.7-0.2l2.2,3.4l-0.7,3.3l-3.1,2.4l-0.6,1.8l5.4,0.5l3.9-0.7l1.7-5.5l0.7-5.9l2.3-2l1.7-1.5l2.1-1 l0.1-2.9l0.6-1.7l-1-1.7l-2.7,0.1l-2.2-2.6l-1.4-4.2l0.8-2.5l-1.9-3.4l-1.8-4.6l-4.8-0.8l-7-5.6l-1.7-4.1l0.8-3.2l2.1-6.1l0.5-2.9 l-1.9-1l-6.9-0.8l-1-1.7l-0.1-4.2l-5.5-3.4l-7-7.8l-2.3-7.3l-0.2-4.2L555.8,249.5z" /><title>
		    <?php
		   echo $displaymo;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MS"><path id="MS" class="hover_group" fill="<?php echo $ams ?>" d="M624.6,467l-0.3,1.3h-5.2l-1.5-0.8l-2.1-0.3l-6.8,1.9l-1.8-0.8l-2.6,4.2l-1.1,0.8l-1.1-2.5 l-1.1-3.9l-3.4-3.2l1.1-7.5l-0.7-0.9l-1.8,0.2l-8.2,0.7l-24.2,0.7l-0.5-1.6l0.7-8l3.4-6.2l5.3-9.1l-0.9-2.1h1.1l0.7-3.2l-2.3-1.8 l0.2-1.8l-2.1-4.6l-0.3-5.3l1.4-2.7l-0.4-4.3l-1.4-3l1.4-1.4l-1.4-2.1l0.5-1.8l0.9-6.2l3-2.7l-0.7-2.1l3.7-5.3l2.7-0.9v-2.5 l-0.7-1.4l2.7-5.3l2.7-1.1l0.1-3.4l8.7-0.1l24.1-1.9l4.6-0.2l0,6.4l0.2,16.7l-0.8,31l-0.2,14.1l2.7,18.8L624.6,467z" /><title>
		    <?php
		   echo $displayms;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=MT"><path id="MT" class="hover_group" fill="<?php echo $amt ?>" d="M356.7,122.3l0.6-11.2l2.3-24.8c0.5-5,1.1-8.5,1.4-15.4l0.9-14.6l-30.7-2.8L302,50l-29.3-4 l-32.3-5.3l-18.4-3.4l-32.7-6.9l-4.5,21.3l3.4,7.5l-1.4,4.6l1.8,4.6l3.2,1.4l4.6,10.8l2.7,3.2l0.5,1.1l3.4,1.1l0.5,2.1l-7.1,17.6 v2.5l2.5,3.2h0.9l4.8-3l0.7-1.1l1.6,0.7l-0.2,5.3l2.7,12.6l3,2.5l0.9,0.7l1.8,2.3l-0.5,3.4l0.7,3.4l1.1,0.9l2.3-2.3h2.7l3.2,1.6 l2.5-0.9h4.1l3.7,1.6l2.7-0.5l0.5-3l3-0.7l1.4,1.4l0.5,3.2l1.8,1.4l1.5-11.6l20.7,3l28.2,4l16.6,1.9l31.4,3.5l11,1.5l1.1-15.4 L356.7,122.3z" /><title>
		    <?php
		   echo $displaymt;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NC"><path id="NC" class="hover_group" fill="<?php echo $anc ?>" d="M832.1,298.5l1.7,4.7l3.6,6.5l2.4,2.4l0.6,2.3l-2.4,0.2l0.8,0.6l-0.3,4.2l-2.6,1.3l-0.6,2.1 l-1.3,2.9l-3.7,1.6l-2.4-0.3l-1.5-0.2l-1.6-1.3l0.3,1.3v1h1.9l0.8,1.3l-1.9,6.3h4.2l0.6,1.6l2.3-2.3l1.3-0.5l-1.9,3.6l-3.1,4.8 h-1.3l-1.1-0.5l-2.7,0.6l-5.2,2.4l-6.5,5.3l-3.4,4.7l-1.9,6.5l-0.5,2.4l-4.7,0.5l-5.5,1.3l-9.9-8.2l-12.6-7.6l-2.9-0.8l-12.6,1.5 l-4.3,0.8l-1.6-3.2l-3-2.1l-16.5,0.5l-7.3,0.8l-9.1,4.5l-6.1,2.6l-1.6,0.3l-5.8,1l-7,0.8l-6.8,0.5l0.5-4.1l1.8-1.5l2.7-0.6l0.6-3.7 l4.2-2.7l3.9-1.5l4.2-3.6l4.4-2.1l0.6-3.1l3.9-3.9l0.6-0.2c0,0,0,1.1,0.8,1.1c0.8,0,1.9,0.3,1.9,0.3l2.3-3.6l2.1-0.6l2.3,0.3 l1.6-3.6l2.9-2.6l0.5-2.1v-4l4.5,0.7l7.1-1.3l15.8-1.9l17.1-2.6l19.9-4l19.7-4.2l11.4-2.8L832.1,298.5z M836,331.5l2.6-2.5 l3.2-2.6l1.5-0.6l0.2-2l-0.6-6.1l-1.5-2.3l-0.6-1.9l0.7-0.2l2.7,5.5l0.4,4.4l-0.2,3.4l-3.4,1.5l-2.8,2.4l-1.1,1.2L836,331.5z" /><title>
		    <?php
		   echo $displaync;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=ND"><path id="ND" class="hover_group" fill="<?php echo $and ?>" d="M471.3,127.7l-0.4-7.5l-2-7.3l-1.8-13.6l-0.5-9.8l-2-3.1l-1.6-5.4v-10.3l0.7-3.9l-2.1-5.5 l-28.4-0.6l-18.6-0.6l-26.5-1.3l-24.9-1.9l-1.3,14.2l-1.4,15.1l-2.3,24.9l-0.5,11l56.8,3.8L471.3,127.7z" /><title>
		    <?php
		   echo $displaynd;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NE"><path id="NE" class="hover_group" fill="<?php echo $ane ?>" d="M484.2,247l1.4,2.7l0.1,2.1l2.4,3.7l2.7,3.2h-5l-43.5-0.9l-40.8-0.9l-21.2-1l1.1-21.3l-33.4-2.7 l4.3-44l15.5,1L388,190l17.8,1.1l23.8,1.1l10.7-0.5l2.1,2.3l4.8,3l1.1,0.9l4.3-1.4l3.9-0.5l2.7-0.2l1.8,1.4l5,1.6l3,1.6l0.5,1.6 l0.9,2.1h1.8l0.8,0l1,5.2l2.7,8l1.2,4.6l2.1,3.8l0.5,4.9l1.4,4.3l0.5,6.5" /><title>
		    <?php
		   echo $displayne;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NH"><path id="NH" class="hover_group" fill="<?php echo $anh ?>" d="M880.8,142.4l0.9-1.1l1.1-3.3l-2.5-0.9l-0.5-3.1l-3.9-1.1l-0.3-2.7l-7.3-23.4l-4.6-14.5l-0.9,0 l-0.6,1.6l-0.6-0.5l-1-1l-1.5,1.9l0,5l0.3,5.7l1.9,2.7v4l-3.7,5.1l-2.6,1.1v1.1l1.1,1.8v8.6l-0.8,9.2l-0.2,4.8l1,1.3l-0.2,4.5 l-0.5,1.8l1.5,0.9l16.4-4.7l2.3-0.6l1.5-2.6L880.8,142.4z" /><title>
		    <?php
		   echo $displaynh;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NJ"><path id="NJ" class="hover_group" fill="<?php echo $anj ?>" d="M828.2,190.3l-2.1,2.4v3.1l-1.9,3.1l-0.2,1.6l1.3,1.3l-0.2,2.4l-2.3,1.1l0.8,2.7l0.2,1.1l2.7,0.3 l1,2.6l3.6,2.4l2.4,1.6v0.8l-3.2,3.1l-1.6,2.3l-1.5,2.7l-2.3,1.3l-1.2,0.7l-0.2,1.2l-0.6,2.6l1.1,2.2l3.2,2.9l4.8,2.3l4,0.6 l0.2,1.5l-0.8,1l0.3,2.7h0.8l2.1-2.4l0.8-4.8l2.7-4l3.1-6.5l1.1-5.5l-0.6-1.1l-0.2-9.4l-1.6-3.4l-1.1,0.8l-2.7,0.3l-0.5-0.5l1.1-1 l2.1-1.9l0.1-1.1l-0.4-3.4l0.5-2.7l-0.2-2.1l-2.6-1.1l-4.5-1l-3.9-1.1L828.2,190.3z" /><title>
		    <?php
		   echo $displaynj;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NM"><path id="NM" class="hover_group" fill="<?php echo $anm ?>" d="M282.7,431l-0.7-6.1l8.6,0.5l29.5,3.1l28.4,1.4l2-22.3l3.7-55.9l1.1-19.4l2,0.3l0-11.1l-32.2-2.4 l-36.9-4.4l-34.5-4.1l-4.2,30.8l-7,53.2l-3.8,26.9l-2,13.3l15.5,2l1.3-10l16.7,2.6L282.7,431z" /><title>
		    <?php
		   echo $displaynm;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NV"><path id="NV" class="hover_group" fill="<?php echo $anv ?>" d="M140.7,177.6l21,4.5l9.7,1.9l9.3,1.8l6.6,1.6l-0.6,5.9l-3.5,17.3l-4.1,20l-1.9,9.7l-2.2,13.3 l-3.2,16.4l-3.5,15.7l-2,10.2l-2.5,16.8l-0.5,1.1l-1.1,2.5l-1.9-0.1l-1.1-2.7l-2.7-0.5l-1.4-1l-2,0.3l-0.9,0.7l-1.3,1.3l-0.4,7 l-0.5,1.7l-0.4,12.1l-1.3,1.7l-1.9-2.3l-14.5-22.7l-19.4-29L89.6,249l-12.4-18.6l1.6-6.6l7-25.9l7.9-31.3l33.6,8.1l13.7,3" /><title>
		    <?php
		   echo $displaynv;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=NY"><path id="NY" class="hover_group" fill="<?php echo $any ?>" d="M828.9,189.3l-1.1-1l-2.6-0.2l-2.3-1.9l-1.6-6.1l-3.5,0.1l-2.4-2.7l-19.4,4.4l-43,8.7l-7.5,1.2 l-0.7-6.5l1.4-1.1l1.3-1.1l1-1.6l1.8-1.1l1.9-1.8l0.5-1.6l2.1-2.7l1.1-1l-0.2-1l-1.3-3.1l-1.8-0.2l-1.9-6.1l2.9-1.8l4.4-1.5l4-1.3 l3.2-0.5l6.3-0.2l1.9,1.3l1.6,0.2l2.1-1.3l2.6-1.1l5.2-0.5l2.1-1.8l1.8-3.2l1.6-1.9h2.1l1.9-1.1l0.2-2.3l-1.5-2.1l-0.3-1.5l1.1-2.1 v-1.5h-1.8l-1.8-0.8l-0.8-1.1l-0.2-2.6l5.8-5.5l0.6-0.8l1.5-2.9l2.9-4.5l2.7-3.7l2.1-2.4l2.4-1.8l3.1-1.2l5.5-1.3l3.2,0.2l4.5-1.5 l7.6-2.1l0.5,5l2.4,6.5l0.8,5.2l-1,3.9l2.6,4.5l0.8,2.1l-0.8,2.9l2.9,1.3l0.6,0.3l3.1,11l-0.5,5.1l-0.5,10.8l0.8,5.5l0.8,3.6 l1.5,7.3v8.1l-1.1,2.3l1.8,2l0.8,1.7l-1.9,1.8l0.3,1.3l1.3-0.3l1.5-1.3l2.3-2.6l1.1-0.6l1.6,0.6l2.3,0.2l7.9-3.9l2.9-2.7l1.3-1.5 l4.2,1.6l-3.4,3.6l-3.9,2.9l-7.1,5.3l-2.6,1l-5.8,1.9l-4,1.1l-1.2-0.5l-0.2-3.7l0.5-2.7l-0.2-2.1l-2.8-1.7l-4.5-1l-3.9-1.1 L828.9,189.3z" /><title>
		    <?php
		   echo $displayny;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=OH"><path id="OH" class="hover_group" fill="<?php echo $aoh ?>" d="M731.4,195l-6.1,4.1l-3.9,2.3l-3.4,3.7l-4,3.9l-3.2,0.8l-2.9,0.5l-5.5,2.6l-2.1,0.2l-3.4-3.1 l-5.2,0.6l-2.6-1.5l-2.4-1.4l-4.9,0.7l-10.2,1.6l-7.8,1.2l1.3,14.6l1.8,13.7l2.6,23.4l0.6,4.8l4.1-0.1l2.4-0.8l3.4,1.5l2.1,4.4 l5.1,0l1.9,2.1l1.8-0.1l2.5-1.3l2.5,0.4l2,1.5l1.7-2.1l2.3-1.3l2.1-0.7l0.6,2.7l1.8,1l3.5,2.3l2.2-0.1l1.1-1.1l-0.1-1.4l1.6-1.5 l0.2-5l1-3.9l1.5-1.4l1.5,0.9l0.8,1.2l1.2-0.2l-0.4-2.4l-0.6-0.6v-2.4l1-1.3l2.3-3.4l1.3-1.5l2.1,0.5l2.3-1.6l3.1-3.4l2.3-3.9 l0.2-5.4l0.5-5v-4.7l-1.1-3.1l1-1.5l0.9-1l-1.4-9.8L731.4,195z" /><title>
		    <?php
		   echo $displayoh;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=OK"><path id="OK" class="hover_group" fill="<?php echo $aok ?>" d="M375.3,322.6l-10.7-0.5l-6.4-0.5l0.3,0.2l-0.7,10.4l22,1.4l32.1,1.3l-2.3,24.4l-0.5,17.8l0.2,1.6 l4.3,3.7l2.1,1.1l0.7-0.2l0.7-2.1l1.4,1.8h2.1v-1.4l2.7,1.4l-0.5,3.9l4.1,0.2l2.5,1.1l4.1,0.7l2.5,1.8l2.3-2.1l3.4,0.7l2.5,3.4h0.9 v2.3l2.3,0.7l2.3-2.3l1.8,0.7h2.5l0.9,2.5l4.8,1.8l1.4-0.7l1.8-4.1h1.1l1.1,2.1l4.1,0.7l3.7,1.4l3,0.9l1.8-0.9l0.7-2.5h4.3l2.1,0.9 l2.7-2.1h1.1l0.7,1.6h4.1l1.6-2.1l1.8,0.5l2.1,2.5l3.2,1.8l3.2,0.9l1.9,1.1l-0.4-37.2l-1.4-11l-0.2-8.9l-1.4-6.5l-0.8-7.2l-0.1-3.8 l-12.1,0.3l-46.4-0.5l-45-2.1L375.3,322.6z" /><title>
		    <?php
		   echo $displayok;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=OR"><path id="OR" class="hover_group" fill="<?php echo $aor ?>" d="M140.2,176.8l4.3-17.9l4.7-17.9l1.1-4.2l2.4-5.6l-0.6-1.2l-2.5,0l-1.3-1.7l0.5-1.5l0.5-3.2l4.5-5.5 l1.8-1.1l1.1-1.1l1.5-3.6l4-5.7l3.6-3.9l0.2-3.5l-3.3-2.5l-1.2-4.5l-13.2-3.7l-15.1-3.5l-15.4,0.1l-0.5-1.4l-5.5,2.1l-4.5-0.6 l-2.4-1.6l-1.3,0.7L99,84l-1.7-1.3l-5.3-2h-0.8l-4.3-1.4l-1.9,1.8l-6.2-0.3l-5.9-4.1l0.7-0.8l0.2-7.8l-2.3-3.9l-4.1-0.6 l-0.7-2.5l-2.4-0.5l-5.8,2.1l-2.3,6.5l-3.2,10l-3.2,6.5l-5,14.1l-6.5,13.6l-8.1,12.6l-1.9,2.9l-0.8,8.6l-1.3,6l2.7,3.5l6.7,2.3 l11.6,3.3l7.9,2.5l12.4,3.6l13.3,3.6l13.2,3.6" /><title>
		    <?php
		   echo $displayor;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=PA"><path id="PA" class="hover_group" fill="<?php echo $apa ?>" d="M822.2,226.3l1.1-0.6l2.3-0.6l1.5-2.7l1.6-2.3l3.2-3.1v-0.8l-2.4-1.6l-3.6-2.4l-1-2.6l-2.7-0.3 l-0.2-1.1l-0.8-2.7l2.3-1.1l0.2-2.4l-1.3-1.3l0.2-1.6l1.9-3.1v-3.1l2.3-2.4l0.2-1.1l-2.6-0.2l-2.3-1.9l-2.4-5.3l-3-0.9l-2.3-2.1 l-18.6,4l-43,8.7l-8.9,1.5l-0.5-7.1l-5.5,5.6l-1.3,0.5l-4.2,3l2.9,19.1l2.9,9.5l3.6,19.3l3.3-0.6l11.9-1.5l37.9-7.7l14.9-2.8 l8.3-1.6l0.3-0.2l2.1-1.6L822.2,226.3z" /><title>
		    <?php
		   echo $displaypa;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=RI"><path id="RI" class="hover_group" fill="<?php echo $ari ?>" d="M874.1,179.8l-0.5-4.2l-0.8-4.4l-1.7-5.9l5.7-1.5l1.6,1.1l3.4,4.4l2.9,4.4l-2.9,1.5l-1.3-0.2 l-1.1,1.8l-2.4,1.9L874.1,179.8z" /><title>
		    <?php
		   echo $displayri;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=SC"><path id="SC" class="hover_group" fill="<?php echo $asc ?>" d="M761.2,412.9l-1.8,1l-2.6-1.3l-0.6-2.1l-1.3-3.6l-2.3-2.1l-2.6-0.6l-1.6-4.8l-2.7-6l-4.2-1.9 l-2.1-1.9l-1.3-2.6L736,385l-2.3-1.3l-2.3-2.9l-3.1-2.3l-4.5-1.8l-0.5-1.5l-2.4-2.9l-0.5-1.5l-3.4-5.2l-3.4,0.2l-4-2.4l-1.3-1.3 l-0.3-1.8l0.8-1.9l2.3-1l-0.3-2.1l6.1-2.6l9.1-4.5l7.3-0.8l16.5-0.5l2.3,1.9l1.6,3.2l4.4-0.5l12.6-1.5l2.9,0.8l12.6,7.6l10.1,8.1 l-5.4,5.5l-2.6,6.1l-0.5,6.3l-1.6,0.8l-1.1,2.7l-2.4,0.6l-2.1,3.6l-2.7,2.7l-2.3,3.4l-1.6,0.8l-3.6,3.4l-2.9,0.2l1,3.2l-5,5.5 L761.2,412.9z" /><title>
		    <?php
		   echo $displaysc;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=SD"><path id="SD" class="hover_group" fill="<?php echo $asd ?>" d="M472.8,203.2l-1-1.1l-1.5-3.6l1.8-3.7l1.1-5.6l-2.6-2.1l-0.3-2.7l0.6-3l2.2-0.8l0.3-5.7l-0.1-30.1 l-0.6-3l-4.1-3.6l-1-2v-1.9l1.9-1.3l1.5-1.9l0.2-2.7l-57.4-1.6l-56.2-3.9l-0.8,5.3l-1.6,15.9l-1.3,17.9l-1.6,24.6l16,1l19.6,1.1 l18,1.3l23.8,1.3l10.7-0.8l2.9,2.3l4.3,3l1,0.8l3.5-0.9l4-0.3l2.7-0.1l3.1,1.2l4.5,1.4l3.1,1.8l0.6,1.9l0.9,1.9l0.7-0.5 L472.8,203.2z" /><title>
		    <?php
		   echo $displaysd;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=TN"><path id="TN" class="hover_group" fill="<?php echo $atn ?>" d="M697.1,320.6l-51.9,5l-15.8,1.8l-4.6,0.5l-3.9,0v3.9l-8.4,0.5l-7,0.6l-11.1,0.1l-0.3,5.8l-2.1,6.3 l-1,3l-1.3,4.4l-0.3,2.6l-4,2.3l1.5,3.6l-1,4.4l-1,0.8l7.3-0.2l24.1-1.9l5.3-0.2l8.1-0.5l27.8-2.6l10.2-0.8l8.4-1l8.4-1.1l4.8-0.8 l-0.1-4.5l1.8-1.5l2.7-0.6l0.6-3.7l4.2-2.7l3.9-1.5l4.2-3.6l4.4-2.1l0.9-3.5l4.3-3.9l0.6-0.2c0,0,0,1.1,0.8,1.1s1.9,0.3,1.9,0.3 l2.3-3.6l2.1-0.6l2.3,0.3l1.6-3.6l2.1-2.2l0.6-1l0.2-3.9l-1.5-0.3l-2.4,1.9l-7.9,0.2l-12,1.9L697.1,320.6z" /><title>
		    <?php
		   echo $displaytn;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=TX"><path id="TX" class="hover_group" fill="<?php echo $atx ?>" d="M357.1,333.4l22.7,1.1l31.1,1.1l-2.3,23.5l-0.3,18.2l0.1,2.1l4.3,3.8l1.7,0.8l1.8,0.3l0.7-1.3 l0.9,0.9l1.7,0.5l1.6-0.7l1.1,0.4l-0.3,3.4l4.3,1l2.7,0.8l4,0.5l2.2,1.8l3.2-1.6l2.8,0.4l2,2.8l1.1,0.3l-0.2,2l3.1,1.2l2.8-1.8 l1.5,0.4l2.4,0.2l0.4,1.9l4.6,2l2.7-0.2l2-4.1h0.3l1.1,1.9l4.4,1l3.3,1.2l3.3,0.8l2.1-0.8l0.8-2.5h3.7l1.9,0.8l3.1-1.6h0.7l0.4,1.1 h4.3l2.4-1.3l1.7,0.3l1.4,1.9l2.9,1.7l3.5,1.1l2.7,1.4l2.4,1.6l3.3-0.9l1.9,1l0.5,10.1l0.3,9.7l0.7,9.5l0.5,4l2.7,4.6l1.1,4.1 l3.9,6.3l0.5,2.9l0.5,1l-0.7,7.5l-2.7,4.4l1,2.9l-0.4,2.5l-0.8,7.3l-1.4,2.7l0.6,4.4l-5.7,1.6l-9.9,4.5l-1,1.9l-2.6,1.9l-2.1,1.5 l-1.3,0.8l-5.7,5.3l-2.7,2.1l-5.3,3.2l-5.7,2.4l-6.3,3.4l-1.8,1.5l-5.8,3.6l-3.4,0.6l-3.9,5.5l-4,0.3l-1,1.9l2.3,1.9l-1.5,5.5 l-1.3,4.5l-1.1,3.9l-0.8,4.5l0.8,2.4l1.8,7l1,6.1l1.8,2.7l-1,1.5l-3.1,1.9l-5.7-3.9l-5.5-1.1l-1.3,0.5l-3.2-0.6l-4.2-3.1l-5.2-1.1 l-7.6-3.4l-2.1-3.9l-1.3-6.5l-3.2-1.9l-0.6-2.3l0.6-0.6l0.3-3.4l-1.3-0.6l-0.6-1l1.3-4.4l-1.6-2.3l-3.2-1.3l-3.4-4.4l-3.6-6.6 l-4.2-2.6l0.2-1.9l-5.3-12.3l-0.8-4.2l-1.8-1.9l-0.2-1.5l-6-5.3l-2.6-3.1v-1.1l-2.6-2.1l-6.8-1.1l-7.4-0.6l-3.1-2.3l-4.5,1.8 l-3.6,1.5l-2.3,3.2l-1,3.7l-4.4,6.1l-2.4,2.4l-2.6-1l-1.8-1.1l-1.9-0.6l-3.9-2.3v-0.6l-1.8-1.9l-5.2-2.1l-7.4-7.8l-2.3-4.7v-8.1 l-3.2-6.5l-0.5-2.7l-1.6-1l-1.1-2.1l-5-2.1l-1.3-1.6l-7.1-7.9l-1.3-3.2l-4.7-2.3l-1.5-4.4l-2.6-2.9l-1.9-0.5l-0.6-4.7l8,0.7l29,2.7 l29.3,1.6l2.3-23.8l3.9-55.6l1.6-18.7l1.4,0 M457.2,567.3l-0.6-7.1l-2.7-7.2l-0.6-7l1.5-8.2l3.3-6.9l3.5-5.4l3.2-3.6l0.6,0.2 l-4.8,6.6l-4.4,6.5l-2,6.6l-0.3,5.2l0.9,6.1l2.6,7.2l0.5,5.2l0.2,1.5L457.2,567.3z"> </path><title>
		    <?php
		   echo $displaytx;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=UT"><path id="UT" class="hover_group" fill="<?php echo $aut ?>" d="M253,309.3l-24.6-3.5l-26.6-4.9l-33.8-6l1.6-9.2l3.2-15.2L176,254l2.2-13.6l1.9-8.9l3.8-20.5 l3.5-17.5l1.1-5.6l12.7,2.3l12,2.1l10.3,1.8l8.3,1.4l3.7,0.5l-1.5,10.6l-2.3,13.2l7.8,0.9l16.4,1.8l8.2,0.9l-2.1,22l-3.2,22.6 l-3.8,27.8l-1.7,11.1L253,309.3z" /><title>
		    <?php
		   echo $displayut;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=VA"><path id="VA" class="hover_group" fill="<?php echo $ava ?>" d="M828.9,269.2l-0.1-1.9l6.5-2.5l-0.8,3.2l-2.9,3.8l-0.4,4.6l0.5,3.4l-1.8,5l-2.2,1.9l-1.5-4.6 l0.4-5.4l1.6-4.2L828.9,269.2z M831.2,297.5L773,310.1l-37.4,5.3l-6.7-0.4l-2.6,1.9l-7.3,0.2l-8.4,1l-8.9,1l8.5-4.9l0-2.1 l1.5-2.1l10.6-11.5l3.9,4.5l3.8,1l2.5-1.1l2.2-1.3l2.5,1.3l3.9-1.4l1.9-4.6l2.6,0.5l2.9-2.1l1.8,0.5l2.8-3.7l0.3-2.1l-1-1.3l1-1.9 l5.3-12.3l0.6-5.7l1.2-0.5l2.2,2.4l3.9-0.3l1.9-7.6l2.8-0.6l1-2.7l2.6-2.3l1.3-2.3l1.5-3.4l0.1-5.1l9.8,3.8 c0.7,0.3,0.7-4.8,0.7-4.8l4.1,1.4l-0.5,2.6l8.2,2.9l1.3,1.8l-0.9,3.7l-1.3,1.3l-0.5,1.7l0.5,2.4l2,1.3l3.9,1.4l2.9,1l4.9,0.9 l2.2,2.1l3.2,0.4l0.9,1.2l-0.4,4.7l1.4,1.1l-0.5,1.9l1.2,0.8l-0.2,1.4l-2.7-0.1l0.1,1.6l2.3,1.5l0.1,1.4l1.8,1.8l0.5,2.5l-2.6,1.4 l1.6,1.5l5.8-1.7L831.2,297.5z" /><title>
		    <?php
		   echo $displayva;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=VT"><path id="VT" class="hover_group" fill="<?php echo $avt ?>" d="M844.3,153.7l-0.8-5.7l-2.4-10l-0.6-0.3l-2.9-1.3l0.8-2.9l-0.8-2.1l-2.7-4.6l1-3.9l-0.8-5.2 l-2.4-6.5l-0.8-4.9l26.2-6.7l0.3,5.8l1.9,2.7v4l-3.7,4l-2.6,1.1v1.1l1.1,1.8v8.6l-0.8,9.2l-0.2,4.8l1,1.3l-0.2,4.5l-0.5,1.8 l0.7,1.6l-7,1.4L844.3,153.7z" /><title>
		    <?php
		   echo $displayvt;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=WA"><path id="WA" class="hover_group" fill="<?php echo $awa ?>" d="M93.6,6.4l4.4,1.5l9.7,2.7l8.6,1.9l20,5.7l23,5.7l15.2,3.4l-1,3.9l-4.1,13.8l-4.5,20.8 l-3.2,16.1l-0.4,9.4l-13.2-3.9l-15.6-3.4l-13.7,0.6l-1.6-1.5l-5.3,1.9l-4-0.3l-2.7-1.8l-1.6,0.5l-4.2-0.2l-1.9-1.4l-4.8-1.7 l-1.4-0.2l-5-1.3l-1.8,1.5l-5.7-0.3l-4.8-3.8l0.2-0.8l0.1-7.9l-2.1-3.9l-4.1-0.7l-0.4-2.4l-2.5-0.6l-2.9-0.5l-1.8,1l-2.3-2.9 l0.3-2.9l2.7-0.3l1.6-4l-2.6-1.1l0.2-3.7l4.4-0.6l-2.7-2.7l-1.5-7.1l0.6-2.9v-7.9l-1.8-3.2l2.3-9.4l2.1,0.5l2.4,2.9l2.7,2.6 l3.2,1.9l4.5,2.1l3.1,0.6l2.9,1.5l3.4,1l2.3-0.2v-2.4l1.3-1.1l2.1-1.3l0.3,1.1l0.3,1.8l-2.3,0.5l-0.3,2.1l1.8,1.5l1.1,2.4l0.6,1.9 l1.5-0.2l0.2-1.3l-1-1.3l-0.5-3.2l0.8-1.8l-0.6-1.5V19l1.8-3.6l-1.1-2.6l-2.4-4.8l0.3-0.8L93.6,6.4z M84.1,12.3l2-0.2 l0.5,1.4l1.5-1.6h2.3l0.8,1.5l-1.5,1.7l0.6,0.8l-0.7,2l-1.4,0.4c0,0-0.9,0.1-0.9-0.2s1.5-2.6,1.5-2.6l-1.7-0.6l-0.3,1.5l-0.7,0.6 l-1.5-2.3L84.1,12.3z" /><title>
		    <?php
		   echo $displaywa;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=WI"><path id="WI" class="hover_group" fill="<?php echo $awi ?>" d="M612.9,197.2l0.4-3l-1.6-4.5l-0.6-6.1l-1.1-2.4l1-3.1l0.8-2.9l1.5-2.6l-0.6-3.4l-0.6-3.6l0.5-1.8 l1.9-2.4l0.2-2.7l-0.8-1.3l0.6-2.6l0.5-3.2l2.7-5.7l2.9-6.8l0.2-2.3l-0.3-1l-0.8,0.5l-4.2,6.3l-2.7,4l-1.9,1.8l-0.8,2.3l-1.5,0.8 l-1.1,1.9l-1.5-0.3l-0.2-1.8l1.3-2.4l2.1-4.7l1.8-1.6l1.1-2.3l-1.6-0.9l-1.4-1.4l-1.6-10.3l-3.7-1.1l-1.4-2.3l-12.6-2.7l-2.5-1.1 l-8.2-2.3l-8.2-1.1l-4.2-5.4l-0.5,1.3l-1.1-0.2l-0.6-1.1l-2.7-0.8l-1.1,0.2l-1.8,1l-1-0.6l0.6-1.9l1.9-3.1l1.1-1.1l-1.9-1.5 l-2.1,0.8l-2.9,1.9l-7.4,3.2l-2.9,0.6l-2.9-0.5l-1-0.9l-2.1,2.8l-0.2,2.7v8.5l-1.1,1.6l-5.3,3.9l-2.3,5.9l0.5,0.2l2.5,2.1l0.7,3.2 l-1.8,3.2v3.9l0.5,6.6l3,3h3.4l1.8,3.2l3.4,0.5l3.9,5.7l7.1,4.1l2.1,2.7l0.9,7.4l0.7,3.3l2.3,1.6l0.2,1.4l-2.1,3.4l0.2,3.2l2.5,3.9 l2.5,1.1l3,0.5l1.3,1.4l9.2,0l26.1-1.5L612.9,197.2z" /><title>
		    <?php
		   echo $displaywi;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=WV"><path id="WV" class="hover_group" fill="<?php echo $awv ?>" d="M756.4,242.2l1.1,4.9l1.1,6.9l3.6-2.7l2.3-3.1l2.5-0.6l1.5-1.5l1.8-2.6l1.2,0.6l2.9-0.3l2.6-2.1 l2-1.5l1.8-0.5l1.3,1l2.2,1.1l1.9,1.8l1.4,1.3l-0.1,4.7l-5.7-3.1l-4.5-1.8l-0.2,5.3l-0.5,2.1l-1.6,2.7l-0.6,1.6l-3.1,2.4l-0.5,2.3 l-3.4,0.3l-0.3,3.1l-1.1,5.5h-2.6l-1.3-0.8l-1.6-2.7l-1.8,0.2l-0.3,4.4l-2.1,6.6l-5,10.8l0.8,1.3l-0.2,2.7l-2.1,1.9l-1.5-0.3 l-3.2,2.4l-2.6-1l-1.8,4.7c0,0-3.7,0.8-4.4,1c-0.6,0.2-2.4-1.3-2.4-1.3l-2.4,2.3l-2.6,0.6l-2.9-0.8l-1.3-1.3l-2.2-3l-3.1-2 l-2.6-2.7l-2.9-3.7l-0.6-2.3l-2.6-1.5l-0.8-1.6l-0.2-5.3l2.2-0.1l1.9-0.8l0.2-2.7l1.6-1.5l0.2-5l1-3.9l1.3-0.6l1.3,1.1l0.5,1.8 l1.8-1l0.5-1.6l-1.1-1.8v-2.4l1-1.3l2.3-3.4l1.3-1.5l2.1,0.5l2.3-1.6l3.1-3.4l2.3-3.9l0.3-5.7l0.5-5v-4.7l-1.1-3.1l1-1.5l1.3-1.3 l3.5,19.8l4.6-0.8L756.4,242.2z" /><title>
		    <?php
		   echo $displaywv;
		    ?>
		</title>
</a>
<a xlink:href="state.php?state=WY"><path id="WY" class="hover_group" fill="<?php echo $awy ?>" d="M354.3,143.8l-10.5-0.8l-32.1-3.3l-16.2-2.1l-28.3-4.1l-19.9-3l-1.4,11.2l-3.8,24.3l-5.3,30.4 l-1.5,10.5l-1.7,11.9l6.5,0.9l25.9,2.5l20.6,2.3l36.8,4.1l23.8,2.9l4.5-44.2l1.4-25.4L354.3,143.8z" /><title>
		    <?php
		   echo $displaywy;
		    ?>
		</title>
</a> />
</g>
<path id="frames" fill="none" stroke="#030303" stroke-width="2" d="M215,493v55l36,45 M0,425h147l68,68h85l54,54v46" />
</svg>
<form action="map.php" method="POST">
<table class="blueTablemap">
       <tbody><tr><td>
                  <button type="submit" name="cstate">Party Influence</button></td>
                  </form>
 <form action="<?php echo $self ?>?id=1" method="POST"><td>
                  <button type="submit" name="cstate">Governor Map</button>
                  </form></td>
                  <form action="<?php echo $self ?>?id=2" method="POST"><td>
                  <button type="submit" name="cstate">Senior Senator</button></td>
                  </form>
                  <form action="<?php echo $self ?>?id=3" method="POST"><td>
                  <button type="submit" name="cstate">Junior Senator</button></td>
                  </form>
                  </tr></tbody></table>
                  <br>
                  <br>
</centre>