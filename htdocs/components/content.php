<div class="content">
		<div class="wrapper">
			<h3>O sklepie</h3>
			<p>Nasz sklep jest super</p>
			<ul>
				<?php
				$suma = 0;
				foreach($products as $product){
					$suma = $suma + $product["price"];
					echo "<li>nazwa: " . $product["name"]. " cena: " .$product["price"] . "</li>";
				}
				?>
			</ul>
			<p>Suma: <?php echo $suma;?> zł</p>
		</div>
</div> 