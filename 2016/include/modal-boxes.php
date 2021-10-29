<div class="modal-overlay">

	<a href="#" class="close-modal-button"></a>

	<div class="skill-icon-container">
		<?php  for ( $i = 1; $i <= 14 ; $i++ ) { ?>
		<div class="pos-rel <?php echo $icon['nom' . $i]  ?>">
		<a href="#" class="close-modal-button"></a>
			<div class="left-side"><span></span></div>
			<div class="right-side">
				<h1 class="nh-m"><?php echo $icon['titre'  . $i]  ?></h1>
				<p class="nh-t"> 
					<?php echo $icon['text' . $i]  ?> <br>
					<a target="_blank" class="wiki-link" href="<?= $icon['lien' . $i] ;?>">wikipedia.org</a>
				</p>
			</div>
		</div>
		<?php  } ?>	
	</div>



	<div class="modal-print-mrs modal-print">
		<div>
			<img src="img/JKJ-Mrs-Graph-Image.jpg" alt="">
		</div>
	</div>

	<div class="modal-print-color-run modal-print">
		<div>
			<img src="img/JKJ-Color-Run-Graph.jpg" alt="">
		</div>
	</div>

	<div class="modal-print-nendaz modal-print">
		<div>
			<img src="img/JKJ-Nendaz-Graph.jpg" alt="">
		</div>
	</div>

	<div class="modal-print-kenzo modal-print">
		<div>
			<img src="img/JKJ-kenzo-graph.jpg" alt="">
		</div>
	</div>

	<div class="modal-bv-logo modal-print">
		<div>
			<img src="img/Logo-bv-image.png" alt="">
		</div>
	</div>

	<div class="modal-print-cgt modal-print">
		<div>
			<img src="img/JKJ-Cgt.jpg" alt="">
		</div>
	</div>

</div>