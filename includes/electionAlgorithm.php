 <?php

include '/home1/murvetop/includes/sqlcall.php';
$candidates = array();
$candidatevalues= array();
$winner=array();
$valuehold=array();
$valuesp1=array();
$count=0; //Number of laws
//$ELECTIONPOSITIONNUMID=1;//WHICH ELECTION THIS IS
//Gets which state it is
//$name=basename($_SERVER["SCRIPT_FILENAME"], '.php');
//$state = substr($name, -2);
//Gets population of state
$sql = "SELECT population FROM statedemo  WHERE State='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$pop = $result->fetch_assoc();
$pop = $pop['population'];
//Gets unaltered turnout
$sql = "SELECT normturnout FROM statedemo  WHERE State='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$turnout = $result->fetch_assoc();
$turnout = $turnout['normturnout'];

$sql = "SELECT q1 FROM electionvalues  WHERE State='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$q1 = $result->fetch_assoc();
$q1 = $q1['q1'];

//Gets which election this is for.
$sql = "SELECT ID FROM user WHERE state='$state' AND inelection=$ELECTIONPOSITIONNUMID";
$result = $db_link->query($sql)or die($db_link->error);



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   $candidates[] =$row['ID']; // The number
   $cannum=$row['ID'];

   $count++;
  
}
//Creates Each human for position 1
$pos1human= array();
$sql = "SELECT P001A,P001B FROM states  WHERE stateid='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$pos1 = $result->fetch_assoc();
$pos1A = $pos1['P001A'];
$pos1B = $pos1['P001B'];
for($hummancreatePos1=0; $hummancreatePos1<$turnout; $hummancreatePos1++)
{
$pos1rand=rand(0, 100); //how many different positions there are
if($pos1rand<=$pos1A){$pos1human[$hummancreatePos1] ='1';
}
if($pos1rand>$pos1A){$pos1human[$hummancreatePos1] ='2';}
}

$pos2human= array();
$sql = "SELECT P002A,P002B FROM states  WHERE stateid='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$pos2 = $result->fetch_assoc();
$pos2A = $pos2['P002A'];
$pos2B = $pos2['P002B'];
for($hummancreatePos2=0; $hummancreatePos2<$turnout; $hummancreatePos2++)
{
$pos2rand=rand(0, 100); //how many different positions there are
if($pos2rand<=$pos2A){$pos2human[$hummancreatePos2] ='1';
}
if($pos2rand>$pos2A){$pos2human[$hummancreatePos2] ='2';}
}


$pos3human= array();
$sql = "SELECT P003A,P003B FROM states  WHERE stateid='$state'";
$result = $db_link->query($sql)or die($db_link->error);
$pos3 = $result->fetch_assoc();
$pos3A = $pos3['P003A'];
$pos3B = $pos3['P003B'];
for($hummancreatePos3=0; $hummancreatePos3<$turnout; $hummancreatePos3++)
{
$pos3rand=rand(0, 100); //how many different positions there are
if($pos3rand<=$pos3A){$pos3human[$hummancreatePos3] ='1';
}
if($pos3rand>$pos3A){$pos3human[$hummancreatePos3] ='2';}
}







$candidatesize=sizeof($candidates);

    for($iloop=0;$iloop<$turnout;$iloop++)
    {
        
        for($loop=0;$loop<$candidatesize; $loop++)
{
    
    $sql = "SELECT q1,q2,q3 FROM userposition  WHERE ID='$candidates[$loop]'";
$result = $db_link->query($sql)or die($db_link->error);
$TPOSITION = $result->fetch_assoc();
$TPOSITION1 = $TPOSITION['q1'];
$TPOSITION2 = $TPOSITION['q2'];
$TPOSITION3 = $TPOSITION['q3'];
//echo "POSITIONSFOR".$candidates[$loop]." ID ".$TPOSITION1."<br>";
//echo "POSITIONSFOR".$candidates[$loop]." ID ".$TPOSITION2."<br>";
//echo "POSITIONSFOR".$candidates[$loop]." ID ".$TPOSITION3."<br>";
 $counter=0;
//echo "<br>";
//echo "Positions for human ".$iloop.":"."<br>";
//echo "Human pos 1 : ".$pos1human[$iloop]."<br>";
//echo "Human pos 2 : ".$pos2human[$iloop]."<br>";
//echo "Human pos 3 : ".$pos3human[$iloop]."<br>";
//echo "END of HUMAN"."<br>";
//echo "<br>";
$counter=$counter+abs($pos1human[$iloop]-$TPOSITION1);
$counter=$counter+abs($pos2human[$iloop]-$TPOSITION2);
$counter=$counter+abs($pos3human[$iloop]-$TPOSITION3);
//echo "THIS IS COUNTER: ".$counter; 
//echo "<br>";

if($counter<$valuehold[$iloop] || $valuehold[$iloop]==0)
{
$winner[$iloop]=$candidates[$loop];
}
$valuehold[$iloop]=$counter; 
    
    
}
        
        
    }

for($loop=0;$loop<$candidatesize; $loop++)
{
    
    $sql = "SELECT state_influ FROM user  WHERE ID='$candidates[$loop]'";
$result = $db_link->query($sql)or die($db_link->error);
$state_influ = $result->fetch_assoc();
$state_influ = $state_influ['state_influ'];

$sql = "SELECT nation_influ FROM user  WHERE ID='$candidates[$loop]'";
$result = $db_link->query($sql)or die($db_link->error);
$nation_influ = $result->fetch_assoc();
$nation_influ = $nation_influ['nation_influ'];

$parid = "SELECT partyid FROM user WHERE ID='$candidates[$loop]'";
$result = $db_link->query($parid)or die($db_link->error);
$paid = $result->fetch_assoc();
$paid = $paid['partyid'];

$istate="i".$state;
$istate=strtolower($istate);
//echo $istate;
$pstateinflu = "SELECT $istate FROM parties WHERE partyid='$paid'";
$result = $db_link->query($pstateinflu)or die($db_link->error);
$pstateinflu = $result->fetch_assoc();
$pstateinflu = $pstateinflu[$istate];

$humangenerationcounter=0;
for($iloop=0;$iloop<$turnout;$iloop++)
{

 if($winner[$iloop]==$candidates[$loop])
 {

     $humangenerationcounter++;
 }
}
    
    $electionmodifier=($state_influ*2)+($nation_influ*0.1)+($pstateinflu*0.5);
    $electionmodifier=$electionmodifier+$humangenerationcounter;
    $candidatevalues[$loop]=$electionmodifier;
}
//echo '<pre>'; print_r($candidatevalues); echo '</pre>';

//for($loop=0;$loop<$candidatesize; $loop++)
//{
    //echo "Candidate: ".$candidates[$loop]." Election Value".$candidatevalues[$loop];
   // echo "<br>";
//}
    


?>