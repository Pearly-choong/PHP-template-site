<?php 
    $title = "Varieties";
    $description = "Description of the Varieties page";
    require("templates/header.php");
?>

<div class="text-dark mt-5">
    <h2 class="my-text-color pb-3">6 Different types of Coffee Drinks</h2>

    <div class="row mb-3">
        <div class="col">
            <div class="card" style="width:30rem;">
                <?php 
                $src="images/Coffee/A_small_cup_of_coffee.jpg";
                $imgAlt="Espresso";
                $coffeeName="Espresso";
                $coffeeDesc="A strong, concentrated coffee made by forcing pressurized water through finely ground coffee beans. 
                Served in a small cup called a demitasse, and meant to be taken quickly, like a shot.";

                require("templates/card.php");
                ?>       
            </div>
        </div> 

        <div class="col">
            <div class="card" style="width:30rem;">
                <?php 
                $src="images/Coffee/Cafe-Au-Lait.jpg";
                $imgAlt="Cafe Au Lait";
                $coffeeName="Cafe Au Lait";
                $coffeeDesc="This is a traditional French drink made with brewed coffee instead of espresso. Equal parts coffee and steamed milk, 
                this is considered a weaker version of a latte and is often served with breakfast or desserts.";

                require("templates/card.php");
                ?>
            </div>
        </div>  
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="card" style="width:30rem;">
                <?php 
                $src="images/Coffee/white-chocolate-peppermint-mocha.jpg";
                $imgAlt="Mocha";
                $coffeeName="White Chocolate Peppermint Mocha";
                $coffeeDesc="Also called a café mocha, most commonly it is espresso, steamed milk, chocolate syrup, peppermint and whipped cream.";

                require("templates/card.php");
                ?>
            </div> 
        </div>

        <div class="col">
            <div class="card" style="width:30rem;">
                <?php 
                $src="images/Coffee/irish coffee.jpg";
                $imgAlt="Irish Coffee";
                $coffeeName="Irish Coffee";
                $coffeeDesc="Irish coffee is a cocktail consisting of hot coffee, Irish whiskey, and sugar, stirred, and topped with cream. The coffee is drunk through the cream.";

                require("templates/card.php");
                ?>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="card" style="width:30rem;">
                <?php 
                $src="images/Coffee/caffe_americano.jpg";
                $imgAlt="Americano";
                $coffeeName="Americano";
                $coffeeDesc="A single shot of espresso added to a cup of hot water. Many like to drink this as they would a regular brewed coffee with milk and sugar. 
                Purists say to keep milk to a minimum to get the most flavor from the espresso.";

                require("templates/card.php");
                ?>
            </div>    
        </div>

        <div class="col">
            <div class="card" style="width:30rem;">
                <?php 
                $src="images/Coffee/galao_kaffee_portugal.jpg";
                $imgAlt="Galao";
                $coffeeName="Galao";
                $coffeeDesc="Galão is a hot drink from Portugal made of espresso and foamed milk. Similar to caffè latte or café au lait, 
                it consists of about one quarter coffee and three quarters foamed milk. It is served in a tall glass, as opposed to the smaller garoto that is served in a demitasse.";

                require("templates/card.php");
                ?>
            </div>    
        </div>
    </div>
</div>


<?php
require("templates/footer.php");
?>