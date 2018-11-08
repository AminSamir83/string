<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/11/2018
 * Time: 14:11
 */
$ch="lE renArd rEGAarDe le CORbeAu manGer le fromAgE";
echo "chaine : ".$ch."<br>";
$ch_mod=ucwords(strtolower($ch));
echo "On obtient : ".$ch_mod."<br>";
$ch2="PHP 5";
for ($i=0;$i<strlen($ch2);$i++)
    echo $ch2[$i]."<br>";

$ch3="amin";
$ch4="samir";
echo " chaine 1 = ".$ch3." et chaine 2 = ".$ch4."<br>";
function compare($ch3,$ch4){
    if (strtolower($ch3)<strtolower($ch4)) {echo "ordre alphabétique: ".$ch3." ".$ch4;}
    else { echo "ordre alphabétique: ".$ch4." ".$ch3;}
}
compare($ch3,$ch4);
?>