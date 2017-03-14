 <?php include'includes/header.php'; ?>

   		<div class="jumbotron">
  			<h1 class="text-center">AASTA TEGIJA 2017</h1>
  			<p class="text-center">Testi oma HTML ja CSS teadmisi</p>
  			<br>
  			<br>
  			<p>
  	  		<a <?php if(isset($_SESSION['user'])): ?>
				<?php echo 'href="exam.php"'; ?>
				<?php  else: ?>
				<?php echo 'href="login.php"'; ?>
				<?php endif; ?>
			><button class="btn btn-lg center-block btn-primary">Soorita test</button></a>
  			</p>
   		</div>
   		<div class="row">
   			<div class="col-12-xs intro">
   				<h3 class="text-center">Ülesanne</h3>
   				<p>Töö eesmärgiks on luua õpikeskkond, millega saab testida HTML ja CSS teadmisi.
                    Õpikeskkonnas peab olema võimalik vastata teoreetilistele küsimustele ja
                    lahendada praktiline ülesanne. Punktid arvutatakse automaatselt kokku ja
                    kuvatakse pärast vastuste salvestamist. Tulemused salvestatakse logi faili
                    ja genereeritakse pingerida.Väga meeldiv ülesanne. Õpikeskkond luuakse Tartu Kutsehariduskeskuse
                    IKT osakonnale, seega kasutajaliidese disaini loomisel tuleb lähtuda Tartu
                    Kutsehariduskeskuse logost ja värvilahendustest.
   				<p>
   			</div>
   		</div>
<?php include 'includes/footer.php'; ?>	