<?php
/*
 * tut2.php
 * 
 * Copyright 2021 Unknown <vedat@linux-pc>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
function showYourLittleDick($goet) {
	echo "Mein Schwanz<br/>";
	print_r($goet);
	echo "Dein Schwanz<br/>";
}

function abc($p1, $p2) {
	echo "Zuerst ".$p1." und dann".$p2."<br/>";
	echo "Danach ".$p2." und dann".$p1."<br/>";
}

function showValue($arg) {
	echo "<pre>";
	print_r($arg);
	echo "</pre>";
}
$param = "Sedat ist der Coolste";
$param2 = "fsdgfds dgdgr";

//showYourLittleDick($param2);
//showYourLittleDick($param);

// abc($param, $param2);
// abc($param2, $param);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>tut2</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
<?php
	echo "Beispiel einer PHP-Datei\n";
	echo "<p>Der PHP Code</p>\n";
	phpinfo();
	
	$array = array(1,2,3,4,5);
	$array2 = array("sedat", "vedat", "anne", "baba");
	
	showValue($array);
	showValue($array2);
	
	echo "<p>".$array2[0]."</p>";
	
	echo "<p>".$array2[3]."</p>";
	
	echo "<p>Das Array hat ".count($array2)." Elemente</p>";
	$tag = "h1";
	for($i = 0; $i < count($array2); $i++) {
		//echo $i;
		echo '<'.$tag.'>Der Index $i hat gerade den Wert '.$i.'</'.$tag.'>';
		$tmpElement = $array2[$i];
		echo '$tmpElement = $array2['.$i.'];';
		echo "<$tag>das $i.Element hat den Wert <b>$tmpElement</b>.</$tag>";
		echo '<hr/>';
	}
	
	$keys = array('green', 'red', 'yellow');
	$values = array('avocado', 'apple', 'banana');
	$neuesArray = array_combine( $keys, $values);
	
	showValue($neuesArray);
	
	echo $neuesArray['red'];
		
	$keys = array('vorname', 'name', 'gender');
	
	$person1 = array('sedt', 'kpıufgs', 'm');
	$person2 = array('vedt', 'aaa', 'm');
	$person3 = array('wwww', 'qwdqwwef', 'w');
	
	$nP1 = array_combine( $keys, $person1);
	
	$nP2 = array_combine( $keys, $person2);
	
	$nP3 = array_combine( $keys, $person3);
	
	$alleFreunde = array();
	
	array_push($alleFreunde, $nP1);
	array_push($alleFreunde, $nP2);
	array_push($alleFreunde, $nP3);
	
	showValue($alleFreunde);
	
	$keys = array('green', 'red', 'yellow');
$values = array('avocado', 'apple', 'banana');
print_r( array_combine( $keys, $values) );
	
	
?>
	
	
</body>

</html>
