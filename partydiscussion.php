<?php session_start(); 
if (!(isset($_SESSION['loggedin'])))//FLIP AFTER DONE
{
    header("Location: login.html");
   die();
}else
{
   include 'includes/sqlcall.php';
   include 'includes/topbar.php';
$pid=$_SESSION["loggedin"];
$sqlhours = "UPDATE user SET hoursinactive =0 WHERE ID='$pid'";
        mysqli_query($db_link, $sqlhours);
}?>
<html>
    <head>
        <script data-ad-client="ca-pub-1808295948776802" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            
   <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tableStyle.css">
        <link rel="stylesheet" href="headerStyle.css">
        <link rel="stylesheet" href="partydiscussionStyle.css">
<style>


</style>
        <?php
        $pid=$_SESSION["loggedin"];
        $pcash = "SELECT money FROM user  WHERE ID='$pid'";
        $result = $db_link->query($pcash)or die($db_link->error);
        $pmoney = $result->fetch_assoc();
        $pmoney = $pmoney['money'];
        $paction = "SELECT actionp FROM user  WHERE ID='$pid'";
        $result = $db_link->query($paction)or die($db_link->error);
        $pactionp = $result->fetch_assoc();
        $pactionp = $pactionp['actionp'];
        $piden = "SELECT partyid FROM user WHERE ID='$pid'";
        $result = $db_link->query($piden)or die($db_link->error);
        $partyiden = $result->fetch_assoc();
        $partyiden = $partyiden['partyid'];
        ?>

    <h2>Party Discussion</h2> <br>

        <div style="display: flex; justify-content: center;">
            <form action="<?php echo $self ?>" method="POST" style="text-align: center;">
                <textarea id="discussion" name="discussion" rows="4" cols="50" maxlength="150"></textarea><br>
                <button class='partyButton' type="submit" name="jp">Post Message</button><br><br>
            </form>
        </div>

<?php
if ((isset($_POST['jp'])))
   {
       $ga = $_POST['discussion'];
       $pid=$_SESSION["loggedin"];

        $sqlmail ="INSERT INTO mail (sendid, recieveid, messageid, message, partyid,seen)
VALUES ('$pid',0, 2, '$ga',$partyiden,1)";
        mysqli_query($db_link, $sqlmail);
   }
   ?>
</center>      
   <table class="blueTablead">
        <tbody>
                  <?php
        $page=$_GET['page']??0;
        $page=$page*10;
        $ofsetting=$page+10;
$pid=$_SESSION["loggedin"];
      $q1 = mysqli_query($db_link,"SELECT sorter,sendid,messageid,message,partyid,seen FROM mail  WHERE messageid=2 and partyid='$partyiden' order by sorter ASC LIMIT $ofsetting OFFSET $page");
      
while($rows[] = mysqli_fetch_assoc($q1));
foreach($rows as $row) {
    if (!isset($row['sendid']) || is_null($row['sendid'])) {
        continue;
    }

    // Skip empty rows or those with an ID of 0
    if ($row['sendid']==0) {
        continue;
    }
    else{
    ?>
    <tr>
    <td>
        <?php
$ch=$row['sorter'];
        $senderid=$row['sendid'];
$pid=$_SESSION["loggedin"];
$spic = "SELECT cpic FROM user  WHERE ID='$senderid'";
$sendp = $db_link->query($spic)or die($db_link->error);
$sendpic = $sendp->fetch_assoc();
$sendpic = $sendpic['cpic'];
$sname = "SELECT cname FROM user  WHERE ID='$senderid'";
$sendn = $db_link->query($sname)or die($db_link->error);
$sendname = $sendn->fetch_assoc();
$sendname = $sendname['cname'];      
        ?>
        <img src="https://i.imgur.com/<?php echo $sendpic; ?>" max-width="50" height="50"> <br>
        <a href="profile.php?id=<?php echo $row['sendid'] ?>"><?php echo $sendname ?></a><br>
    </td>
    
               <td>
                   <?php
                   $messid=$row['messageid'];
                   if($messid==2)
                   {
                       echo $row['message'];
                   }
                   ?>
               </td>
           </tr>
<?php
}
}
?>

            </tbody>
            </table>
            <?php
$sql = "SELECT COUNT(sorter) FROM mail  WHERE messageid=2 and partyid='$partyiden'";
$result = $db_link->query($sql)or die($db_link->error);
$counter = $result->fetch_assoc();
$counter = $counter['COUNT(sorter)'];
$hold=($counter/10)+1;
for($loop=0; $loop<$hold;$loop++)
{
    ?>
    <a href="partydiscussion.php?page=<?php echo $loop ?>"><?php echo $loop ?></a>
    <?php
}
?>
<br><br><br><br><br><br>
