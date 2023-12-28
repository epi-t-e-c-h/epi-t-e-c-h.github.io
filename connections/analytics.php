<?php
include '../post/databaseConnect.php';

$mobileUsers=0;
$destopUsers=0;
$date=date('Y-m-d');
$AnalyticsSmt="SELECT * FROM analytics order by date" ;
$AnalyticsSql=$conn->prepare($AnalyticsSmt);
$AnalyticsSql->execute();

if($AnalyticsSql->rowCount()>0){
    $Analytics = $AnalyticsSql->fetchAll();
    foreach($Analytics As $Analytic){
    $mobileUsers= $Analytic["mobileUsers"];
    $destopUsers=$Analytic['destopUsers'];
    echo($date."--------------------"."$mobileUsers"."</br>");
    }
}
if($_GET['user']=="mobile")
    $mobileUsers++;
else
    $destopUsers++;

$total=$mobileUsers+$destopUsers;
echo ($total);
if($date==$Analytic['Date']){
    $UpdateAnalyticsSql="UPDATE analytics set mobileUsers=$mobileUsers,destopUsers=$destopUsers,total=$total
        where date=? 
        ";
    $UpdateAnalyticsSmt=$conn->prepare($UpdateAnalyticsSql);
    $UpdateAnalyticsSmt->execute([$date]);
}else{
    $UpdateAnalyticsSql="INSERT into analytics(mobileUsers,destopUsers,total)
       values($mobileUsers,$destopUsers,$total)
        ";
    $UpdateAnalyticsSmt=$conn->prepare($UpdateAnalyticsSql);
    $UpdateAnalyticsSmt->execute();
}

?>