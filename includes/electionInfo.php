<?php
//echo $state;
//include '/home1/murvetop/public_html/republica/electionAL.php';
include '/home1/murvetop/includes/electionAlgorithm.php';
$total=0;
?>
<table class="BlueTable">
<tbody> <tr><td>
    Candidate Name
    </td>
    <td>
        Political Party
    </td>
    <td>
        PRC%
    </td>
</tr>

        <?php
        for($loop=0;$loop<$candidatesize; $loop++)
{
    $total=$total+$candidatevalues[$loop];
}
        for($loop=0;$loop<$candidatesize; $loop++)
{
    $parid = "SELECT partyid FROM user WHERE ID='$candidates[$loop]'";
$result = $db_link->query($parid)or die($db_link->error);
$paid = $result->fetch_assoc();
$paid = $paid['partyid'];
$partyname = "SELECT pname FROM parties WHERE partyid='$paid'";
$result = $db_link->query($partyname)or die($db_link->error);
$partyname = $result->fetch_assoc();
$partyname = $partyname['pname'];
$parid = "SELECT cname FROM user WHERE ID='$candidates[$loop]'";
$result = $db_link->query($parid)or die($db_link->error);
$username = $result->fetch_assoc();
$username = $username['cname'];

    echo "<tr>";
    echo "<td>";
    ?>
    <a href="profile.php?id=<?php echo $candidates[$loop] ?>"><?php echo $username ?></a>
    <?php
    echo "</td>";
    echo "<td>";
    ?>
    <a href="party.php?id=<?php echo $paid ?>"><?php echo $partyname ?></a>
    <?php
    echo "</td>";
    echo "<td>";
    echo round(((100/$total)*$candidatevalues[$loop]),2);
    echo "</td>";
    echo "</tr>";
}

?></table>