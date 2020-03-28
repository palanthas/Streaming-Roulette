<?php
$service = array("Hulu", "Amazon Prime", "Netflix", "Disney+", "Showtime");
$genre = array("Romance", "Reality", "Drama", "Comedy", "Action", "Science Fiction", "Documentary");
$type = array("Movie", "TV");
$number = array("1st", "2nd","3rd", "4th", "5th", "6th");

$randService = array_rand($service);
$randGenre = array_rand($genre);
$randType = array_rand($type);
$randNumber = array_rand($number);
?>

<style>
.main {
  margin: auto;
  width: 80%;
  font-size: 75px;
}
</style>

<div class="main">
<center>
<?php echo $service[$randService]; ?>
<?php echo "<br>".$genre[$randGenre]; ?>
<?php echo "<br>".$type[$randType]; ?>
<?php echo "<br>".$number[$randNumber]; ?>
</center>
</div>
