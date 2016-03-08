<h1>List of Recipes</h1>

<ol>
<?
foreach($data as $recipe) {
  echo "<li><a href='$recipe->id'>$recipe->name</a></li>";
}
?>
</ol>
