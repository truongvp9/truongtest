<?php   
		echo "Fix bug";
		echo "welcome truong";
		$command = escapeshellcmd('python /home/vp9/public_html/test.py');
		$output = shell_exec($command);
            	echo "Query for:<br>";
            	//$output = exec("sudo python test.py");
	    	echo $output;
?>
