<?php

function vd($v, $l = false){
	echo "<pre>";
	if (isset($l)) {
		echo "$l => ";
	}
	var_dump($v);
	echo "</pre>";
}

function vdd($v, $l = false){
	vd($v, $l);
	die();
}

function is_dev(){

	$dev_ips = array('217.33.245.42', '92.40.248.53');

	if(in_array( IPADDRESS, $dev_ips )){
	  return true;
	}

	return false;
}
?>
