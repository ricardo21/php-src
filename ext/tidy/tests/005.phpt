--TEST--
tidy_parse_file()
--SKIPIF--
<?php if (!extension_loaded("tidy")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
	$a = tidy_parse_file("ext/tidy/tests/005.html");
	echo tidy_get_output($a);
	
?>
--EXPECT--
<html>
<head>
<title></title>
</head>
<body>
</body>
</html>