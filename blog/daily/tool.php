<?php
#exec("ls",$mydir);
#foreach ($mydir as $name){
#	$sub=substr($name,-4,4);
#	if("html"==$sub){
#	echo $name."<br/>";
#	}
#}
#echo var_dump($mydir);
exec("git fetch",$info);
exec("git diff origin/master",$info);
echo "<h3>Successful!<br/>";
foreach ($info as $line){
	echo $line;
	echo "<br>";
}
echo var_dump($info);
?>
