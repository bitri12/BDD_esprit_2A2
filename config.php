<?php
 if ($c = oci_connect("hr", "hr_password", "localhost/XE")) {
   echo "Successfully connected to Oracle.";
 } else {
   $err = oci_error();
   echo "Oracle Connect Error " . $err['text'];
 }
 ?>
