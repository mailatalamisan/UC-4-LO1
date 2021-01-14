<?php 

//indexed arrays

$peopleOne = ['Mai', 'Erwin', 'Ryu'];

//echo $peopleOne[2];

$peopleTwo = array('ken', 'she');
//echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
//print_r ($ages);

$ages[1] = 25;
//print_r($ages);

$ages[] = 60;
//print_r($ages);

array_push($ages, 70);
//print_r($ages);
//echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

//associative arrays (key & value pairs)

$ninjasOne = ['maila'=>'blue', 'she'=>'red', 'erwin'=>'pink'];
//echo $ninjasOne['she'];

//multi-dimensional arrays

$blogs = [
	['title' => 'maila party', 'author'=>'maila', 'content'=> 'lorem', 'likes'=> 30],
	['title' => 'maila kart cheats', 'author'=> 'toad', 'content'=> 'lorem', 'likes'=> 25],
	['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=> 50]

];
//echo $blogs[2]['author'];
//echo count($blogs);

$blogs[] = ['title'=> 'castle party', 'author'=>'mai', 'content'=>'lorem', 'likes'=>40];
print_r($blogs);















?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
	

</body>
</html>
