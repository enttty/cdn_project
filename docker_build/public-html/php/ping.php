<?php
function pingAddress($ip) {
    $pingresult = exec("/bin/ping -n 3 $ip", $outcome, $status);
    if (0 == $status) {
        $status = "alive";
    } else {
        $status = "dead";
    }
    echo "The IP address, $ip is  ".$status;
	echo "\n\t details: ".var_export($outcome, true);
}

pingAddress(127.0.0.1);
?>