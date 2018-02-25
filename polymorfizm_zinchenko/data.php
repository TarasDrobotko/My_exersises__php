<?php
require_once 'classes.php';

$publications = array();

/*$news1 = new NewsPublication;
$news2 = new NewsPublication;
$news3 = new NewsPublication;
$article1 = new ArticlePublication;
$article2 = new ArticlePublication;
$photo1 = new PhotoReportPublication;
$photo2 = new PhotoReportPublication;
$photo3 = new PhotoReportPublication;

$publications = array($news1, $news2, $article1, $photo1);

echo '<pre>';
print_r($publications); */
/*$publications[] = new NewsPublication;
$publications[] = new NewsPublication;
$publications[] = new NewsPublication;*/
/*echo '<pre>';
print_r($publications);*/
$con = mysqli_connect("localhost", "root", "*14518A9PE", "testsite2");
if(mysqli_connect_errno()) {
    echo "failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM publication");

while($row= mysqli_fetch_array($result)) {
    $publications[] = new $row['type']($row);
}
//$p = new Publication;
//echo '<pre>';
//print_r($publications);
?>



