<h1>Product Categories</h1>  
<ul>
<?php
// Contains list of categories. Added as seperate file, so more categories can be added in future.
$catsql = "SELECT * FROM `shopping`.`categories`;"; // Performs a SELECT query to gather all the categories and display them in an unordered list. 
$catres = mysqli_query($success, $catsql);
while($catrow = mysqli_fetch_assoc($catres))
{
echo "<li><a href='" . $config_basedir. "products.php?id=" . $catrow['id'] . "'>". $catrow['name'] . "</a></li>";  // Each category links to products.php.
}
?>
</ul>