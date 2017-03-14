<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
  $db = new Database();
  $query1 = "SELECT * FROM `questions`";
  $result = $db->select($query1);
  $total = $result->num_rows;
?>
<div class="jumbotron">
	<h2>Testi oma teadmisi</h2>
	<ul>
 			<li><strong>Küsimuse number :</strong> <?php echo $total; ?></li>
 			<li><strong>Eeldatav läbimisaeg: </strong><?php echo $total *.5; ?> Minutit</li>
 	</ul>
 		<a href="questions.php?n=1" class="btn btn-block btn-primary">Start</a>
</div>
<?php include 'includes/footer.php'; ?>