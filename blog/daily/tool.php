<?php
exec("ls",$mydir);
foreach ($mydir as $name){
	$sub=substr($name,-4,4);
	if("html"==$sub){
	echo $name."<br/>";
	}
}
#echo var_dump($mydir);
?>
