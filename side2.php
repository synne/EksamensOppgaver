<?php
session_start();

$_SESSION["navn"] = $_REQUEST["navn"];
$_SESSION["forerkort"] = $_REQUEST["forerkort"];
$_SESSION["dykk"] = $_REQUEST["dykk"];
$_SESSION["svomming"] = $_REQUEST["svomming"];
$_SESSION["undervann"]= $_REQUEST["undervann"];

$navn = $_REQUEST["navn"];
$forerkort = $_REQUEST["forerkort"];
$dykk  = $_REQUEST["dykk"];
$svomming = $_REQUEST["svomming"];
$undervann = $_REQUEST["undervann"];

function politiOpptak($forerkort, $dykk, $svomming, $undervann){
            if($forerkort=="OK" && $dykk>=2.5 && $svomming>=100 && $undervann>=12){
                return true;
            }
        }

if(politiOpptak($_SESSION["forerkort"], $_SESSION["dykk"], $_SESSION["svomming"], $_SESSION["undervann"])){
            echo $_SESSION["navn"]." har oppfylt våre opptakskrav!<br/>";
}
 else {
    echo $_SESSION["navn"]." har ikke bestått opptakskravene!<br/>";
 }
 
echo "Informasjonen som er registrert om deg:<br/>";

$fil = fopen("opptak.txt", "a");
fwrite($fil, "Navn:$navn, $forerkort, $dykk, $svomming, $undervann\n");
fclose($fil);

$fil = fopen("opptak.txt", "r");
$hente = fgets($fil);
echo $hente;
fclose($fil);

/*while(!feof($fil)){
    echo $hente = fgets($fil);
}*/


?>

