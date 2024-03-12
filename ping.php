<?php
exec("ping -n 1 {$_POST['ip']}", $output, $result);

if (strpos($output[2], 'bytes=') > 0)
    echo "online";
else 
    echo "offline";

?>