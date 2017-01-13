<?php
#exec("ls",$mydir);
#foreach ($mydir as $name){
#	$sub=substr($name,-4,4);
#	if("html"==$sub){
#	echo $name."<br/>";
#	}
#}
#echo var_dump($mydir);
exec("nohup git fetch ",$fetch);
exec("git merge origin/master ",$info);
#exec("git status",$s);
#echo var_dump($info);
#echo "<h3>Successful!<br/>";
#exec("whoami",$user);
#echo var_dump($user);
echo "lol";
?>
