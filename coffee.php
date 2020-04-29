<?php
$title = "Coffee";
$description ="Description of the Coffee page";


require("templates/header.php");
//require("templates/nav.php");


?>


<main class="px-5 py-5">
	<div class="row coffee">
		<div class="col">
			<img src="images/coffee3.png" alt="Coffee" class="img-thumbnail" />
		</div>
		<div class="col">
			<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>

	<div class="text-dark mt-5">
		<h2 class="my-text-color pb-3">6 Different types of Coffee Drinks</h2>
		<?php 
			require("templates/varieties.php");
		?>
	</div>
</main>


<?php
require("templates/footer.php");

?>
