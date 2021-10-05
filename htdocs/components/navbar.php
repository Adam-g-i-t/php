
<?php
$products = [
    ["name" => 'koszulka', "price" => 20],
    ["name" => 'koszulka2', "price" => 30],
    ["name" => 'koszulka3', "price" => 40]
];
?>

<div class="leftSidebar">
	<li><a href="index.php">Strona główna</a></li>
		<?php
		$catalog = scandir('../pages');
		foreach($catalog as $item){
			$cutted_item = str_replace(".php", "", $item);
			if ($item != '.' && $item != '..') {
				echo "<li><a href='/pages/$item'>$cutted_item</a></li>";
			}
		}
		?>
	</div>

