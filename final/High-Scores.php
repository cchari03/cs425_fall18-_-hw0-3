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


</div>
<div id="INSTRUCTIONS">


<h1> Top 10 scores:  </h1>
<?php


$i=0;
$delimiter = $someCondition ? "," : "\t";
if ($file = fopen("Highscores.txt", "r")) {

    while(!feof($file)) {
        $line = fgets($file);
	$str=split("\t",$line);
	$str2=split("\n",$str[1]);
        $data = str_getcsv($line, $delimiter);

      //echo $line;
$text[$i]=$str[0];
$numbers[$i]=$str2[0];
$i++;
	
    }
    fclose($file);
}
array_multisort($numbers,SORT_DESC,$text);
$j=1;
for ($i = 0; $i < 10; $i++) {
echo $j." ". $text[$i]." ". $numbers[$i]."<br>";
$j++;
}


?>

</div>
 <footer >
<div id="Topp">
    <a id="Top" href="#top">Go to top</a>
  </div>
<a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank">&nbsp;</a>
<a href="https://www.twitter.com/" class="fa fa-twitter" target="_blank">&nbsp;</a>
</footer> 
</body>
</html>
