<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
	$command="/var/www/script.sh ". $_POST[table_command]. $_POST[message];
	echo $command;
	$output = shell_exec($command);
	echo $output;
	 header('Location: http://ledtable.dnsdynamic.com');
	//echo exec("stty -F  /dev/ttyAMA0 115200");
	//echo exec("echo C > /dev/ttyAMA0");
	//echo "HELLO";

 ?>
 </body>
</html>
