<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
 * tut1.php
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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	<ul>
        <li>asdfds</li>
        <li>asdfds</li>
        <li>asdfds</li>
        <li>asdfds</li>
        <li>asdfds</li>
	</ul>
	
	<ol>
        <li>asdfds</li>
        <li>asdfds</li>
        <li>asdfds</li>
        <li>asdfds</li>
        <li>asdfds</li>
	</ol>
	
	
	<ol>
        <?php for($i = 0; $i < 10; $i++) { ?>
            <li>asdfds</li>
        <?php } ?>
	</ol>

    <ul>
        <?php for($i = 0; $i < 10; $i++) { ?>
            <li><?="Freund Nr. ".($i+1)." abc" ?></li>
        <?php } ?>
	</ul>
	
	 <ul>
        <?php for($i = 0; $i < 10; $i++) { 
            echo "<li>Freund Nr. ".($i+1)." abc</li>";
            
         } ?>
	</ul>
<?php
$input = array('green', 'red', 'yellow');
print_r( array_count_values( $input) );
?>

</body>

</html>
