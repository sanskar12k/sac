<?php
$query5=" SELECT graduatingYear FROM users WHERE email= '$email' ";
$query_run3= $connection->query($query5);
if(($query_run3)){
  if(($query_run3->num_rows > 0)){
    $row1= mysqli_fetch_assoc($query_run3);
    $gradyear= $row1['graduatingYear'];
} 
}




?>


<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>
<style type="text/css">
  .tabs .tab a {
    color: #26a69a !important ;
}
.tabs .indicator
{
    background-color: #26a69a !important ;
}
</style>
<div class="row">
   <div class="col s12">
     <ul class="tabs tabs-fixed-width">
       <li class="tab col s3" style="color: #26a69a"><a class="active" href="#1999">1999/2000</a></li>
       <li class="tab col s3"><a  href="#2004">2004/05</a></li>
       <li class="tab col s3"><a href="#2009">2009/10</a></li>
       <li class="tab col s3"><a href="#others">others</a></li>

   </ul>
</div>
<div id="1999" class="col s12">
  <?php 
  @$query7=" SELECT name, hall, department FROM users WHERE graduatingYear= '1999' or  graduatingYear= '2000' 
  ORDER BY department ASC";
  $query_run4=$connection->query($query7);
  if($query_run4->num_rows > 0){
    echo "<table><tr><th>S.No</th><th>Name</th><th>Hall</th><th>Department</th></tr>";
    $var = 1;

    while($row2 = $query_run4->fetch_assoc()){
      $hallfull=strtolower($row2["hall"]);

      switch ($hallfull) {
        case "bc roy" :
        $hallfull= "Bidhan Chandra Roy";
        break;
        case "brh" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "hjb" :
        $hallfull= "Homi J Bhabha(HJB)";
        break;
        case "jcb" :
        $hallfull= "Jagadish Chandra Bose(JCB)";
        break;
        case "lbs" :
        $hallfull= "Lal Bahadur sastry(LBS)";
        break;
        case "llr" :
        $hallfull= "Lala Lajpat Rai(LLR)";
        break;
        case "mmm" :
        $hallfull= "Madan Mohan Malviya(MMM)";
        break;
        case "ms" :
        $hallfull= "Meghnad Saha(MS)";
        break;
        case "mt" :
        $hallfull= "Mother Teresa(MT)";
        break;
        case "nh" :
        $hallfull= "Nehru";
        break;
        case "ph" :
        $hallfull= "Patel";
        break;
        case "rk":
        $hallfull="Radha Krishnan (RK)";
        break;
        case "rlb" :
        $hallfull= "Rani Laxmibai";
        break;
        case "rp" :
        $hallfull= "Rajendra Prasad(RP)";
        break;
        case "sam" :
        $hallfull= "Sir Ashutosh Mukerjee(SAM)";
        break;
        case "BRH" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "sn" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn-ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn/ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "vs" :
        $hallfull= "Vidyasagar (VS)";
        break;
        default:
        break;
    }
    echo "<tr><td>" .$var .")"."</td><td>". $row2["name"]. "</td><td>" . $hallfull. " </td><td>" . $row2["department"]. "</td></tr>";
    $var++;
}
echo "</table>";
}
else {
    echo "0 Results";
}
?>




</div>
<div id="2004" class="col s12">
  <?php 
  @$query7=" SELECT name, hall, department FROM users WHERE graduatingYear= '2004' or  graduatingYear= '2005' 
  ORDER BY department ASC";
  $query_run4=$connection->query($query7);
  if($query_run4->num_rows > 0){
    echo "<table><tr><th>S.No</th><th>Name</th><th>Hall</th><th>Department</th></tr>";
    $var = 1;

    while($row2 = $query_run4->fetch_assoc()){
      $hallfull=strtolower($row2["hall"]);

      switch ($hallfull) {
        case "bc roy" :
        $hallfull= "Bidhan Chandra Roy";
        break;
        case "brh" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "hjb" :
        $hallfull= "Homi J Bhabha(HJB)";
        break;
        case "jcb" :
        $hallfull= "Jagadish Chandra Bose(JCB)";
        break;
        case "lbs" :
        $hallfull= "Lal Bahadur sastry(LBS)";
        break;
        case "llr" :
        $hallfull= "Lala Lajpat Rai(LLR)";
        break;
        case "mmm" :
        $hallfull= "Madan Mohan Malviya(MMM)";
        break;
        case "ms" :
        $hallfull= "Meghnad Saha(MS)";
        break;
        case "mt" :
        $hallfull= "Mother Teresa(MT)";
        break;
        case "nh" :
        $hallfull= "Nehru";
        break;
        case "ph" :
        $hallfull= "Patel";
        break;
        case "rk":
        $hallfull="Radha Krishnan (RK)";
        break;
        case "rlb" :
        $hallfull= "Rani Laxmibai";
        break;
        case "rp" :
        $hallfull= "Rajendra Prasad(RP)";
        break;
        case "sam" :
        $hallfull= "Sir Ashutosh Mukerjee(SAM)";
        break;
        case "BRH" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "sn" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn-ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn/ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "vs" :
        $hallfull= "Vidyasagar (VS)";
        break;
        default:
        break;
    }
    echo "<tr><td>" .$var .")"."</td><td>". $row2["name"]. "</td><td>" . $hallfull. " </td><td>" . $row2["department"]. "</td></tr>";
    $var++;
}
echo "</table>";
}
else {
    echo "0 Results";
}
?>





</div>
<div id="2009" class="col s12">
  <?php 
  @$query7=" SELECT name, hall, department FROM users WHERE graduatingYear= '2009' or  graduatingYear= '2010' 
  ORDER BY department ASC";
  $query_run4=$connection->query($query7);
  if($query_run4->num_rows > 0){
    echo "<table><tr><th>S.No</th><th>Name</th><th>Hall</th><th>Department</th></tr>";
    $var = 1;

    while($row2 = $query_run4->fetch_assoc()){
      $hallfull=strtolower($row2["hall"]);

      switch ($hallfull) {
        case "bc roy" :
        $hallfull= "Bidhan Chandra Roy";
        break;
        case "brh" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "hjb" :
        $hallfull= "Homi J Bhabha(HJB)";
        break;
        case "jcb" :
        $hallfull= "Jagadish Chandra Bose(JCB)";
        break;
        case "lbs" :
        $hallfull= "Lal Bahadur sastry(LBS)";
        break;
        case "llr" :
        $hallfull= "Lala Lajpat Rai(LLR)";
        break;
        case "mmm" :
        $hallfull= "Madan Mohan Malviya(MMM)";
        break;
        case "ms" :
        $hallfull= "Meghnad Saha(MS)";
        break;
        case "mt" :
        $hallfull= "Mother Teresa(MT)";
        break;
        case "nh" :
        $hallfull= "Nehru";
        break;
        case "ph" :
        $hallfull= "Patel";
        break;
        case "rk":
        $hallfull="Radha Krishnan (RK)";
        break;
        case "rlb" :
        $hallfull= "Rani Laxmibai";
        break;
        case "rp" :
        $hallfull= "Rajendra Prasad(RP)";
        break;
        case "sam" :
        $hallfull= "Sir Ashutosh Mukerjee(SAM)";
        break;
        case "BRH" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "sn" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn-ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn/ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "vs" :
        $hallfull= "Vidyasagar (VS)";
        break;
        default:
        break;
    }
    echo "<tr><td>" .$var .")"."</td><td>". $row2["name"]. "</td><td>" . $hallfull. " </td><td>" . $row2["department"]. "</td></tr>";
    $var++;
}
echo "</table>";
}
else {
    echo "0 Results";
}
?>





</div>
<div id="others" class="col s12">
  <?php 
  @$query7=" SELECT name, hall, department FROM users WHERE graduatingYear != '1999' AND graduatingYear != '2004'
  AND graduatingYear != '2009' and  graduatingYear != '2000'  and  graduatingYear != '2005'  and  graduatingYear != '2010' 
  ORDER BY department ASC";
  $query_run4=$connection->query($query7);
  if($query_run4->num_rows > 0){
    echo "<table><tr><th>S.No</th><th>Name</th><th>Hall</th><th>Department</th></tr>";
    $var = 1;

    while($row2 = $query_run4->fetch_assoc()){
      $hallfull=strtolower($row2["hall"]);

      switch ($hallfull) {
        case "bc roy" :
        $hallfull= "Bidhan Chandra Roy";
        break;
        case "brh" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "hjb" :
        $hallfull= "Homi J Bhabha(HJB)";
        break;
        case "jcb" :
        $hallfull= "Jagadish Chandra Bose(JCB)";
        break;
        case "lbs" :
        $hallfull= "Lal Bahadur sastry(LBS)";
        break;
        case "llr" :
        $hallfull= "Lala Lajpat Rai(LLR)";
        break;
        case "mmm" :
        $hallfull= "Madan Mohan Malviya(MMM)";
        break;
        case "ms" :
        $hallfull= "Meghnad Saha(MS)";
        break;
        case "mt" :
        $hallfull= "Mother Teresa(MT)";
        break;
        case "nh" :
        $hallfull= "Nehru";
        break;
        case "ph" :
        $hallfull= "Patel";
        break;
        case "rk":
        $hallfull="Radha Krishnan (RK)";
        break;
        case "rlb" :
        $hallfull= "Rani Laxmibai";
        break;
        case "rp" :
        $hallfull= "Rajendra Prasad(RP)";
        break;
        case "sam" :
        $hallfull= "Sir Ashutosh Mukerjee(SAM)";
        break;
        case "BRH" :
        $hallfull= "BhimRao Ambedkar(BRH)";
        break;
        case "sn" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn-ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "sn/ig" :
        $hallfull= "Sarojini Naidu-Indra Gandhi(SN-IG)";
        break;
        case "vs" :
        $hallfull= "Vidyasagar (VS)";
        break;
        default:
        break;
    }
    echo "<tr><td>" .$var .")"."</td><td>". $row2["name"]. "</td><td>" . $hallfull. " </td><td>" . $row2["department"]. "</td></tr>";
    $var++;
}
echo "</table>";
}
else {
    echo "0 Results";
}
?>  
</div>

</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script>