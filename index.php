<?php
//build site structure

$pagefound = false;

if (!isset($_GET['page'])) {
   include ('home.php');
   $pagefound = true;
} else {
   $path = split('/', $_GET['page']);
   $dir_path = implode("/", array_slice($path, 0, -1));
   $handle = opendir('pages/' . $dir_path);
   $page = $path[count($path) - 1] . ".php";
   while (false !== ($file = readdir($handle))) {
     if ($file == $page) {
       include('pages/' . $_GET['page'] . '.php');
       $pagefound = true;
     }
   }
   closedir($handle);
}

if (!$pagefound){
 //page is not found. display 404 page.
 include('404.php');
}
?>

<script src="http://victorhh.com/antoniojs/antonio.js"></script>