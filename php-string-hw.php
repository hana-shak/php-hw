<?php
/*
echo "<tr>";
echo "<td>" ." ";
echo "</td>";

echo "<td>" ." ";
echo "</td>";

echo "</tr>";

*/

echo "<table border=2px>";

echo "<tr>";
echo "<td>" ."Question #";
echo "</td>";
echo "<td>" ."Answer";
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>" ."1";
echo "</td>";
$x1 = "hana";
echo "<td>" . strtoupper($x1);
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."1";
echo "</td>";
$x2="hana";
echo "<td>" . strtolower($x2) ;
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ." 1 ";
echo "</td>";
$x3="hana";
echo "<td>" . ucfirst($x3);
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ." 1 ";
echo "</td>";
$x4="hana khaled shakboua";
echo "<td>" . ucwords ($x4);
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ." 2 ";
echo "</td>";
$x5="082307";
$x6=substr(chunk_split($x5,2,':'),0,-1);
echo "<td>" . $x6;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ." 3 ";
echo "</td>";
$mystring="abcdefghigklmn";
$findme="gklmn";
$findme="254";
$x9=strpos($mystring , $findme);
if ($x9 === false) {
    $y1= "not found";
} else {
    $y1 = "found";
}
echo "<td>" ." $y1 ";
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ."4 ";
echo "</td>";
$y2="123hana";
$y3=strval($y2);
//$y4=var_dump($y3);  //is integer from w3school
echo "<td>" .$y3;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ." 5";
echo "</td>";
$y5="www.example.com/public_html/index.php";
$y6= basename ($y5 , "[index.php]");
$y7= basename ($y5);
echo "<td>" ."$y7 ";
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ." 6";
echo "</td>";
$y8="Ayham@example.com";
$y9= strtok($y8,"@");
echo "<td>" .$y9;
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ." 7";
echo "</td>";
/*--function--*/
function subtok($string,$chr,$pos,$len = NULL) {
    return implode($chr,array_slice(explode($chr,$string),$pos,$len));
  }
  $z3= subtok('Ayham@example.com', '.', '-1', '4'); 
echo "<td>" ."$z3";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."8 ";
echo "</td>";
$z1=65.4500;
$z2=104.3500;
$z4=$z1+$z2;
$z5=number_format($z4,2);
echo "<td>" ."$z5";
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ."9";
echo "</td>";
$alpha=" abcdefghigklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTVXYZ0123456789!/*%$#@^";
echo "<td>" . substr(str_shuffle($alpha),0,6);
echo "</td>";
echo "</tr>";

 echo "<tr>";             //It changed the first only because of the case sensetivity feature
 echo "<td>" ."10";
 echo "</td>";
 $v="The quick brown fox jumps over the lazy dog";
 $var0="The";
 $var1="that";
 $var2=str_replace ($var0,$var1,$v);
 echo "<td>" ."$var2 ";
 echo "</td>";
 echo "</tr>";


echo "<tr>";
echo "<td>" ."11";
$str1= 'football';
$str2='footboll';
$dif=strspn($str1 ^ $str2,"\0");
echo "</td>";
echo "<td>" ."$dif ";
echo "</td>";
echo "</tr>";

/* echo "<tr>";
 echo "<td>" ." 11";
 echo "</td>";
 $la = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
 $la0=explode("\n",$la);
 echo "<td>" .var_dump($la0);
 echo "</td>";
 echo "</tr>";*/

 echo "<tr>";
 echo "<td>" ."13";
 echo "</td>";
 $la2="http://www.orange.com/index.php";
 $la3=basename($la2, ".php");
 echo "<td>" ."$la3";
 echo "</td>";
 echo "</tr>";



echo "<tr>";
echo "<td>" ."14 ";
echo "</td>";
$la4="a";
$i=++$la4;
//echo ++$la4;
if (strlen($la4) >0 ) {
     $la4 = $i[0]; 
}
echo "<td>" ."$la4";
echo "</td>";
echo "</tr>";



echo "<tr>";
 echo "<td>" ."15 ";
 echo "</td>";
 $ex15='rayy@example.com';
 $ex151=mb_substr($ex15, 5);
 echo "<td>" ."$ex151";
 echo "</td>";
 echo "</tr>";



echo "<tr>";
echo "<td>" ."16";
echo "</td>";
$la5="rayy@example.com";
//$la6=bin2hex($la5);
echo "<td>" .bin2hex($la5);
echo "</td>";
echo "</tr>";

/*
 echo "<tr>";
 echo "<td>" ."17 ";
 echo "</td>";
 $ex17='rayy@example.com';
 $ex171=mb_substr($ex17, 0,4);
 echo "<td>" ."$ex171";
 echo "</td>";
 echo "</tr>";*/


 echo "<tr>";
 echo "<td>" ."17";
 echo "</td>";
 $original='The brown fox';
 $want_to_add='  quick ';
 $new=substr_replace($original,$want_to_add,3,0);
 echo "<td>" ." $new";
 echo "</td>";
 echo "</tr>";
 
 
 echo "<tr>";
 echo "<td>" ."18";
 echo "</td>";
 $original_1='The brown fox';
 $want=ltrim($original_1, " brown");
 $new_1=explode(' ',trim($original_1));
 echo "<td>" .$new_1[0];
 echo "</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>" ."19";
 echo "</td>";
 $x = '000547023.24';
 $y=ltrim($x, '0');
 echo "<td>" ."$y";
 echo "</td>";
 echo "</tr>";


echo "<tr>";
echo "<td>" ."20";
echo "</td>";
echo "<td>" .str_replace("brown","","The quick brown fox jumps over the lazy dog");
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."21";
echo "</td>";
$q="The quick brown fox jumps over the lazy dog///";
echo "<td>" .trim($q,'/');
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>" ."22";
echo "</td>";
$r='http://www.example.com/5478631';
$rr=basename($r, '');
echo "<td>" .$rr;
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ."23";
echo "</td>";
$t='\"\1+2/3*2:2-3/4*3';
echo "<td>" .str_replace(str_split('\\/:*?"<>|+-'), '', $t);
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ."24";
echo "</td>";
$q="The quick brown fox jumps over the lazy dog///";
$qq=mb_substr($q,0,25 );
echo "<td>" .$qq;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."25";
echo "</td>";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
//$number=2,543.12;
//$for=number_format( 2, '.', '');
echo "<td>" .$x;
echo "</td>";
echo "</tr>";


/*
echo "<tr>";
echo "<td>" ." ";
echo "</td>";
echo "<td>" ." ";
echo "</td>";
echo "</tr>";
*/



echo "<tr>";
$E="OPERATOR HW";
echo "<td>" .$E;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."1";
echo "</td>";
function my_year($year){
    if ($year % 4 == 0) {
        $y= ("It is a leap year ");
    }else {
        $y= ("It is not a leap year ");
    }
    return $y;
}
echo "<td>" .my_year(2024);
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."2";
echo "</td>";
function temp($t){
    if ($t <20) {
        $j='WINTER';
    }else {
        $j='SUMMER';
    }
    return $j;
}
echo "<td>" .temp(40);
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>" ."3";
echo "</td>";
function twoVal($h, $l) {
       if ($h+$l == 2*$h){
        $m = 6*$h;
    }else {
        $m=$h+$l;
    }
    return $m;
}
$a=[1,2];
$aa=[2,2];
$b=array_map('twoVal',$a,$aa);
$c=implode(",",$b);
echo "<td>" .$c;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."4";
echo "</td>";
function han($a){
     if($a >100 ){
        $h=3*($a-100);
     }else{
         $h=$a-100;
     }
     return abs($h);
}
echo "<td>" .han(50);
echo "</td>";
echo "</tr>";
/*     is_int($a) && (is_int($b))    */
echo "<tr>";
echo "<td>" ."5";
echo "</td>";
function lam ($a, $b) {
    if ( ($a === 30) || ($a+$b === 30)){
            $l= "true";
    }else {
        $l= "false";
    }
    
    return $l;
}
echo "<td>" .lam(15,14);
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ."6";
echo "</td>";
function khal($a){
    if (is_int($a) && ($a % 10 == 0)) {
           $f= $a;

    }else{
         $f="Not integer";
    }
    
    return $f ;
}
echo "<td>" .khal(40);
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>" ."7";
echo "</td>";
function multVal($r) {

    if(( $r>0 && $r % 3 == 0)  ){
       $m= "multiple of 3";
    }elseif ((  $r>0 && $r % 7 == 0)){
        $m= "multiple of 7";
    }else{
        $m = "Not multiple of 3 or 7";
    }
    return $m;
}
echo "<td>" .multVal(0);
echo "</td>";
echo "</tr>";




echo "<tr>";
echo "<td>" ."9";
echo "</td>";
//substr_replace($original,$want_to_add,3,0);
$num = round(mt_rand(0,1));
$new= substr_replace("Ilove coding academy", "z",$num,0 );
echo "<td>" .$new;
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>" ."10";
echo "</td>";
function inclu($a, $b){
    if ((is_int($a) || (is_int($b))) && (($a + $b <= 300)  && ($a + $b >=100) )) {
            $n="in the range";
    } else{
         $n="not in the range";
    }
    
    return $n;
}
echo "<td>" .inclu(8.6,0);
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>" ."11";
echo "</td>";
function incl($a, $b){
    if ((is_int($a) || (is_int($b))) && (($a + $b <= 70)  && ($a + $b >=20) )) {
            $n="false";
    } else{
         $n="true";
    }
    
    return $n;
}
echo "<td>" .incl(20,50);
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."12";
echo "</td>";
echo "<td>" .max(-4,-8,-9);
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" ."13";
echo "</td>";
function test($x1, $x2){
    $n = 100;
    $num1=abs($n-$x1);    
    $num2=abs($n-$x2); 
    
    if (($num1 - $num2 == 0) ){
           $m=0;
    }elseif($num1 < $num2){
        $m= $x1." is closest to 100 than " .$x2; 
    }else{
        $m= $x2." is closest to 100 than " .$x1; 
    }
    return $m;
}
echo "<td>" .test(505,101);
echo "</td>";
echo "</tr>";



echo "<tr>";
echo "<td>" ."14";
echo "</td>";
function hey($a, $b){
    if ( (($a== 5) || ($b == 5) || ($a+$b == 5) || (abs($a-$b) == 5))) {
        $z= "integer yaa";
    }else{
        $z ="GTH...";
    }
    return $z;
}
echo "<td>" .hey(1,4);
echo "</td>";
echo "</tr>";


/*
echo "<tr>";
echo "<td>" ."4";
echo "</td>";

echo "<td>" .;
echo "</td>";
echo "</tr>";
*/







echo "<hr>";
echo "Question 12";
echo "<br>";
$la = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$la0=explode("\n",$la);
echo var_dump($la0);
echo "<hr>";

echo "<hr>";
echo "Question 26";
echo "<br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "<hr>";
 echo "<hr>";
  
echo "<hr>";
echo "Question 8";
function ha($r) {
//$r="hieveryone";
$x=substr($r,0,2);
//echo $x;
if ($x === "if"){
    $l= $r;
}else {
    $l= "if".$r;
}
return $l;
}
echo ha(you are hana);
?>
 