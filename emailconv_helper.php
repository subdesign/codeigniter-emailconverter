<?php 

/**
 * Email address antispam converter
 * 
 * Author:  Barna Szalai (sz.b@devartpro.com)
 */

define("AT", "(at)");
define("DOT", "(dot)");

function emailconv($email, $at = '', $dot = '')
{
	$at = ( ! strlen($at)) ? AT : $at;
	$dot = ( ! strlen($dot)) ? DOT : $dot;

	if(substr_count($email, "@") > 1)
	{
		throw new Exception('<b>You have more than one @ in your email</b>');
	}

	$phase1 = str_replace("@", $at, $email);
	$phase2 = str_replace(substr(strrchr($email, "."), 0, 1), $dot, $phase1);

	return $phase2;
}