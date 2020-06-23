<?
$mysqli = new mysqli("localhost", "root", "", "mybd");
$mysqli->set_charset ('cp1251');

$title=$_POST['title'];
$author=$_POST['author'];
$pages=$_POST['pages'];
$publisher=$_POST['publisher'];

if ($title == null or $author == null or $pages == null or $publisher == null) {
	echo ("Error");
	}
else{
	echo ("Correct");
	$s = "insert into `books` (`title`, `author`, `pages`, `publisher`)
	values('$title','$author','$pages','$publisher')";

	$result = $mysqli->query($s);
	}
?>