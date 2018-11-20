
<?php

ini_set('session.cookie_lifetime', 86400);
ini_set('session.gc_maxlifetime', 86400);
 session_start(); 
?>

<!DOCTYPE html>
<head>
<link href="style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="Quiz Game">   
<meta name="description" content="It's a quiz game to have fun and increase your knowledge">
<meta name="keywords" content="HTML,CSS">
<meta name="author" content="Christia Charilaou">

</head>
<html class="MAIN">
<body>
<div class="Fixed2">
 <a href="index.php#section1">Home&nbsp;&nbsp;</a>
 <a href="Help Page.php#section3">Help Page &nbsp;&nbsp;</a>
 <a href="High Scores.php#section2">High Scores &nbsp;&nbsp;</a>
</div>

<div id="start">
<form  action= "index.php"; method="post">
<h1 id="title">  </h1>
<input id ="s" type="submit" name="insert" value="start"  />
<input type="hidden" name="FF" value="true" />
<br>
</div>
<?php

session_start();
$r1=array();


for ($i=1; $i<=3 ; $i++){
$r=(rand(0, 3) . "<br>");
$r1[$i]=$r;
for ($k=0; $k<=$i ; $k++){
while ($r1[$k]==$r1[$k+1]){
$r=(rand(0, 3) . "<br>");
$r1[$i]=$r;
}
}

}

$f=1;
$i=1;


$GLOBALS ['j'];
$GLOBALS['count']=1;
$GLOBALS['results'];
$GLOBALS['where'];
?>
<?php 

$qu;
$an1;
$an2;
$an3;
$c;
$c1;
$c2;
$u;
$GLOBALS['num']=array();

function simple(){
$j=$_SESSION['s'];


$xml=simplexml_load_file("questions.xml") or die("Error: Cannot create object");

$GLOBALS ['qu']=$xml->simple->question[$j]->q;
$GLOBALS ['an1']=$xml->simple->question[$j]->answer[0];
$GLOBALS ['an2']=$xml->simple->question[$j]->answer[1];
$GLOBALS ['an3']=$xml->simple->question[$j]->answer[2];
$GLOBALS ['c']=$xml->simple->question[$j]->answer[0]->attributes()->correct;
$GLOBALS ['c1']=$xml->simple->question[$j]->answer[1]->attributes()->correct;
$GLOBALS ['c2']=$xml->simple->question[$j]->answer[2]->attributes()->correct;

if ($GLOBALS ['c']==Y){
$GLOBALS['u']="First";

}
if ($GLOBALS ['c1']==Y){
$GLOBALS['u']="Second";

}
if ($GLOBALS ['c2']==Y){
$GLOBALS['u']="Third";

}

}

function medium(){

$j=$_SESSION['m'];


$xml=simplexml_load_file("questions.xml") or die("Error: Cannot create object");

$GLOBALS ['qu']=$xml->medium->question[$j]->q;
$GLOBALS ['an1']=$xml->medium->question[$j]->answer[0];
$GLOBALS ['an2']=$xml->medium->question[$j]->answer[1];
$GLOBALS ['an3']=$xml->medium->question[$j]->answer[2];
$GLOBALS ['c']=$xml->medium->question[$j]->answer[0]->attributes()->correct;
$GLOBALS ['c1']=$xml->medium->question[$j]->answer[1]->attributes()->correct;
$GLOBALS ['c2']=$xml->medium->question[$j]->answer[2]->attributes()->correct;

if ($GLOBALS ['c']==Y){
$GLOBALS['u']="First";

}
if ($GLOBALS ['c1']==Y){
$GLOBALS['u']="Second";

}
if ($GLOBALS ['c2']==Y){
$GLOBALS['u']="Third";

}



}
function hard(){

$j=$_SESSION['h'];

$xml=simplexml_load_file("questions.xml") or die("Error: Cannot create object");

$GLOBALS ['qu']=$xml->hard->question[$j]->q;
$GLOBALS ['an1']=$xml->hard->question[$j]->answer[0];
$GLOBALS ['an2']=$xml->hard->question[$j]->answer[1];
$GLOBALS ['an3']=$xml->hard->question[$j]->answer[2];
$GLOBALS ['c']=$xml->hard->question[$j]->answer[0]->attributes()->correct;
$GLOBALS ['c1']=$xml->hard->question[$j]->answer[1]->attributes()->correct;
$GLOBALS ['c2']=$xml->hard->question[$j]->answer[2]->attributes()->correct;

if ($GLOBALS ['c']==Y){
$GLOBALS['u']="First";

}
if ($GLOBALS ['c1']==Y){
$GLOBALS['u']="Second";

}
if ($GLOBALS ['c2']==Y){
$GLOBALS['u']="Third";

}


}




?>
<?php
$firsttime=F;

if(((!isset($_POST['insert'])&&($_POST['FF']==$_POST['insert'] ))) || (isset($_POST['end'])) ){
$r=(rand(0,5));
echo $r;

$_SESSION['h']=$r;
$_SESSION['m']=$r;
$_SESSION['s']=$r;
$_SESSION['ct']=0;
$_SESSION['cend']=5;
$_SESSION['score']=0;
$_SESSION['randhard']=0;
$_SESSION['randmedium']=0;
$_SESSION['randsimple']=0;
$_SESSION['now']=0;



$_SESSION['randmedium']=$arm;
$_SESSION['randsimple']=$ars;

$arr2 = array();
$arr3=array();
$arr4 = array();
$arr5=array();

$_SESSION['myarr']=$arr;
$_SESSION['myarr1']=$arr1;


$_SESSION['myarr2']=$arr2;
$_SESSION['myarr3']=$arr3;

$_SESSION['myarr4']=$arr4;
$_SESSION['myarr5']=$arr5;

echo"
<style type=\"text/css\">#feeds{
display:none;
}</style>";

}
else{echo"<style type=\"text/css\">#feeds{
display:block;
}</style>";
echo"<style type=\"text/css\">#start{
display:none;
}</style>";
$GLOBALS['FT']=false;
}


if (isset($_POST['end'])){

$_SESSION['ct']=0;
$_SESSION['cend']=5;
$_SESSION['score']=0;
$_SESSION['randhard']=0;
$_SESSION['randmedium']=0;
$_SESSION['randsimple']=0;
$_SESSION['now']=0;
$_SESSION['h']=0;
$_SESSION['s']=0;
$_SESSION['m']=0;
$GLOBALS['FT']=true;
if($_POST['FF']==true){

echo"
<style type=\"text/css\">#start{
display:block;
}</style>";

echo"<style type=\"text/css\">#feeds{
display:none;
}</style>";

}
}






?>


<div id="feeds">
<form id="divId" action= "index.php"; method="post">
<br>
<h1> Question: </h1>
<br>


<?php
if(isset($_POST['insert'])){

$_SESSION['h']=$r;
$_SESSION['m']=$r;
$_SESSION['s']=$r;

$_SESSION['score']=0;
$_SESSION['randhard']=0;
$_SESSION['randmedium']=0;
$_SESSION['randsimple']=0;
$_SESSION['now']=0;


$_SESSION['score']=0;
$_SESSION['m']=$_SESSION['m']+1;
medium();
$GLOBALS['previous']="MEDIUM";


$GLOBALS['FT']=false;
$arr2=null;
$arr3= null;

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;
$arr1=null;
$arr= null;

$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;
$arr4=null;
$arr5= null;

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;

}

if (isset ($_POST['next'])){

if (($_POST['A']!=$_POST['f']) && ($_POST['sco1']=="MEDIUM")){

$_SESSION['s']=$_SESSION['s']+1;
simple();

$GLOBALS['previous']="SIMPLE";
$arr2=null;
$arr3= null;

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;
$arr1=null;
$arr= null;

$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;
$arr4=null;
$arr5= null;

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;


}

else if (($_POST['A']==$_POST['f']) && ($_POST['sco1']=="SIMPLE")){

$_SESSION['score']=$_POST['sco']+1;

$arr2="SIMPLE correct";
$arr3= $_SESSION['now'];

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;


$_SESSION['m']=$_SESSION['m']+1;
medium();
$GLOBALS['previous']="MEDIUM";
}
else if (($_POST['A']==$_POST['f']) && ($_POST['sco1']=="MEDIUM")){

$_SESSION['score']=$_POST['sco']+2;

$arr= "MEDIUM correct";
$arr1=$_SESSION['now'];
$_SESSION['countmedium']=$_SESSION['countmedium']+1;
$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;


$_SESSION['h']=$_SESSION['h']+1;

hard();
$GLOBALS['previous']="HARD";
}
else if (($_POST['A']!=$_POST['f']) && ($_POST['sco1']=="HARD")){

$_SESSION['m']=$_SESSION['m']+1;
medium();

$GLOBALS['previous']="MEDIUM";
$arr2=null;
$arr3= null;

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;
$arr1=null;
$arr= null;

$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;
$arr4=null;
$arr5= null;

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;

}
else if (($_POST['A']!=$_POST['f']) && ($_POST['sco1']=="MEDIUM")){

$_SESSION['s']=$_SESSION['s']+1;
simple();

$GLOBALS['previous']="SIMPLE";
$arr2=null;
$arr3= null;

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;
$arr1=null;
$arr= null;

$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;
$arr4=null;
$arr5= null;

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;

}
else if (($_POST['A']==$_POST['f']) && ($_POST['sco1']=="HARD")){

$_SESSION['score']=$_POST['sco']+3;

$arr4= "HARD correct";
$arr5=$_SESSION['now'];

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;



$_SESSION['h']=$_SESSION['h']+1;
hard();
$GLOBALS['previous']="HARD";
}
else if (($_POST['A']!=$_POST['f']) && ($_POST['sco1']=="SIMPLE")){

$_SESSION['s']=$_SESSION['s']+1;
simple();

$GLOBALS['previous']="SIMPLE";
$arr2=null;
$arr3= null;

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;
$arr1=null;
$arr= null;

$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;
$arr4=null;
$arr5= null;

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;

}

}

echo "Number of question: ". $_POST['ct']. " / "."Number of remaining questions: ".$_POST['cend']. "<br>";
echo $qu;
//if($_POST['count']==$_SESSION['count']){


$_SESSION['ct']=$_SESSION['ct']+1;

$_SESSION['now']=$_SESSION['now']+1;

$_SESSION['cend']=$_SESSION['cend']-1;


//}




?>
<br>
<input type="radio" name="A" value="First" ><?php print($an1)."<br>";?></input>
<input type="radio" name="A" value="Second"><?php print($an2). "<br>";?>
</input><input type="radio" name="A" value="Third"><?php print($an3). "<br>"."<br>"."<br>";?></input>
<input type="hidden" name="sco" value="<?php echo $_SESSION['score']; ?>"/>
<input type="hidden" name="sco1" value="<?php echo $GLOBALS['previous']; ?>"/>
<input type="hidden" name="ct" value="<?php echo $_SESSION['ct']; ?>"/>
<input type="hidden" name="cend" value="<?php echo $_SESSION['cend']; ?>"/>
<input type="hidden" name="h" value="<?php echo $_SESSION['h']; ?>"/>
<input type="hidden" name="m" value="<?php echo $_SESSION['m']; ?>"/>
<input type="hidden" name="s" value="<?php echo $_SESSION['s']; ?>"/>
<?php


if ($_POST['cend']==0){

echo "<input id=\"s1\" type=\"submit\" name=\"endgame\" value=\"FINISH\" />" ;

}
else {echo "<input id=\"s1\" type=\"submit\" name=\"next\" value=\"next\"  />" ;} 






?>

<input id="s1" type="submit" name="end" value="end"  />
<input type="hidden" name="f" value="<?php echo $GLOBALS['u'] ?>" />
<input type="hidden" name="numbers" value="<?php echo $GLOBALS['num'] ?>" />
<input type="hidden" name="count" value="<?php echo $GLOBALS['count'] ?>" />
<input type="hidden" name="results" value="<?php echo $GLOBALS['results0'] ?>" />
<input type="hidden" name="r" value="<?php echo $GLOBALS['re'] ?>" />
</form>
</div>


<?php 

/*$arr = array(2, 3, 4, 5);
print_r ($arr);

$_SESSION['myarr'] = $arr;*/


if (isset ($_POST['endgame'])){

$_SESSION['h']=0;
$_SESSION['s']=0;
$_SESSION['m']=0;
echo"
<style type=\"text/css\">#feeds{
display:none;
}</style>";
echo"
<style type=\"text/css\">#start{
display:none;
}</style>";


echo "<div id=\"INSTRUCTIONS\">" ;

if(($_POST['sco1']=="SIMPLE")&&($_POST['f']==$_POST['A'])){

$_SESSION['now']=$_SESSION['now']-1;

$_SESSION['score']=$_POST['sco']+1;
$arr2="SIMPLE correct";
$arr3=$_SESSION['now'];

$_SESSION['myarr2'][$_SESSION['now']]=$arr2;
$_SESSION['myarr3'][$_SESSION['now']]=$arr3;



}
elseif(($_POST['sco1']=="MEDIUM")&&($_POST['f']==$_POST['A'])){

$_SESSION['score']=$_POST['sco']+2;

$_SESSION['now']=$_SESSION['now']-1;
$arr="MEDIUM correct";
$arr1=$_SESSION['now'];

$_SESSION['myarr'][$_SESSION['now']]=$arr;
$_SESSION['myarr1'][$_SESSION['now']]=$arr1;

}
else if(($_POST['sco1']=="HARD")&&($_POST['f']==$_POST['A'])){


$_SESSION['score']=$_POST['sco']+3;

$_SESSION['now']=$_SESSION['now']-1;
$arr4="HARD correct";
$arr5=$_SESSION['now'];

$_SESSION['myarr4'][$_SESSION['now']]=$arr4;
$_SESSION['myarr5'][$_SESSION['now']]=$arr5;

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "Your overall score is : ". $_SESSION['score'] . "<br>";

if (empty($_POST['sco'])){

$_SESSION['score1']=0;
}
else $_SESSION['score1']=$_SESSION['score'];


echo "QUESTION" . "&nbsp;&nbsp;". "LEVEL-CORRECTNESS" . "&nbsp;&nbspPOINTS"."<br>";


for($i=0; $i<6; $i++){
if(($_SESSION['myarr1'][$i]==$i)&&(($_SESSION['myarr'][ $_SESSION['myarr1'][$i]])=="MEDIUM correct")){
 print ($_SESSION['myarr1'][$i] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
  print($_SESSION['myarr'][ $_SESSION['myarr1'][$i]]);

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2"."<br>";

echo "<br>";
}}


for($i=0; $i<8; $i++){
if(($_SESSION['myarr3'][$i]==$i)&&(($_SESSION['myarr2'][ $_SESSION['myarr3'][$i]])=="SIMPLE correct")){
print ($_SESSION['myarr3'][$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['myarr2'][ $_SESSION['myarr3'][$i]]);


echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1"."<br>";

echo "<br>";
}
}
for($i=0; $i<6; $i++){
if (($_SESSION['myarr5'][$i]==$i)&&(($_SESSION['myarr4'][ $_SESSION['myarr5'][$i]])=="HARD correct")){
print ($_SESSION['myarr5'][$i] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['myarr4'][$_SESSION['myarr5'][$i]]);


echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3";

echo "<br>";
}}
echo "<br>";
for($i=0; $i<6; $i++){

if (($i!= $_SESSION['myarr5'][$i] ) && ($i!=$_SESSION['myarr1'][$i] )&&($i!=$_SESSION['myarr3'][$i])){
echo $i ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp". "wrong ";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0"."<br>";
}

}

echo "<br>";
echo "<br>";
echo "<br>";


echo "Do you want to save your score?" . "<br>" ;
echo "<form id=\"divId\" action= \"index.php\"; method=\"post\">" ;
echo "<input id=\"s1\" type=\"submit\" name=\"save\" value=\"save\"  />" ;
echo "<input type=\"hidden\" name=\"scoree\" value=\""; echo $_SESSION['score1']; echo"\" />" ;
echo "<input id=\"s1\" type=\"submit\" name=\"none\" value=\"no\" />" ; 
echo "</form>";
echo "</div>";

}
if (isset($_POST['save'])){
echo $_POST['sco'];
$_SESSION['h']=0;
$_SESSION['s']=0;
$_SESSION['m']=0;
echo"
<style type=\"text/css\">#start{
display:none;
}</style>";
echo "<div id=\"INSTRUCTIONS\">" ; 
echo "<br>";
echo "<br>";
echo "Write your name/nickname:";
echo "<form id=\"divId\" action= \"index.php\"; method=\"post\">" ;
Name: echo "<input id=\"text\" type=\"text\" name=\"name\" placeholder=\"name/nickname\" maxlength=\"10\" required ><br>";
echo "<br>";
echo "<input type=\"hidden\" name=\"scoree\" value=\""; echo $_SESSION['score1']; echo"\" />" ;
echo "<input id=\"s1\" type=\"submit\" name=\"submitname\" value=\"submit\" />" ;
echo "</form>";
echo "</div>";


}
if(isset($_POST['submitname'])){

$_SESSION['score1']=$_POST['scoree'];

$text=($_POST['name']);

$file="Highscores.txt";

$myfile=fopen($file,"a+");


if ($myfile){
echo "<div id=\"score\"> Your Score is been saved !!</div>" ;
echo "<meta http-equiv=\"refresh\" content=\"2.0\">";
fwrite($myfile,"\n");
fwrite($myfile,$text);
fwrite($myfile,"\t");
fwrite($myfile,$_POST['scoree']);

}
else {
echo "Your Score is not been saved!!" ;
echo "<meta http-equiv=\"refresh\" content=\"2.0\">";
}



fclose($myfile);

}

if (isset($_POST['none'])){
$_SESSION['h']=0;
$_SESSION['s']=0;
$_SESSION['m']=0;
$GLOBALS['FT']=true;
if($_POST['FF']==true){
$_SESSION['ct']=0;
$_SESSION['cend']=5;
$_SESSION['score']=0;
echo"
<style type=\"text/css\">#start{
display:block;
}</style>";

echo"<style type=\"text/css\">#feeds{
display:none;
}</style>";

}
}






?>
<?php  destroy_all();?>
 <footer >
<div id="Topp">
    <a id="Top" href="#top">Go to top</a>
  </div>
<a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank">&nbsp;</a>
<a href="https://www.twitter.com/" class="fa fa-twitter" target="_blank">&nbsp;</a>
</footer> 
</body>
</html>
