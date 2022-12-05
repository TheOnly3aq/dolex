<?php 
// $product = array("Witte bollen", "wittenbollen.jpg", 1.34, 234, false);
// $product[5] = 2.56;
// $product[2] = 1.25;
// echo "<pre>";
// print_r($product);
// echo "</pre>";

// $adres[0] = array("naam"=> "Osinga", "straat"=> "Trekweg", "huisnummer"=>31, "postcode"=>"9918PE", "woonplaats"=>"Garresweer");
// $adres[1] = array("naam"=> "Mol", "straat"=> "Linkedinweg", "huisnummer"=>1, "postcode"=>"1234AB", "woonplaats"=>"Assen");
// $adres[2] = array("naam"=> "Talens", "straat"=> "Snip", "huisnummer"=>54, "postcode"=>"9728XR", "woonplaats"=>"Groningen");

$adres = [
    ["naam"=> "Osinga", "straat"=> "Trekweg", "huisnummer"=>31, "postcode"=>"9918PE", "woonplaats"=>"Garresweer"],
    ["naam"=> "Mol", "straat"=> "Linkedinweg", "huisnummer"=>1, "postcode"=>"1234AB", "woonplaats"=>"Assen"],
    ["naam"=> "Talens", "straat"=> "Snip", "huisnummer"=>54, "postcode"=>"9728XR", "woonplaats"=>"Groningen"],
]

// echo "<pre>";
// print_r($adres);
// echo "</pre>";

// echo $adres[0]["naam"];


// echo $adres["naam"]."<br>";
// echo $sdres["straat"]." ".$adres["huisnummer"]."<br>";
// echo $adres["postcode"]." ".$adres["woonplaats"]."<br>";

// $indexteller = 0;
// while($indexteller < count(($adres))) {
//     echo $adres[$indexteller]["naam"]."<br>";
//     echo $adres[$indexteller]["straat"]." ".$adres[$indexteller]["huisnummer"]."<br>";
//     echo $adres[$indexteller]["postcode"]." ".$adres[$indexteller]["woonplaats"]."<br><br>";
//     $indexteller++;
// }

// print_r($adres);

?>


<?php foreach($adres as &$item): ?>
    <div>
        <p><?= $item['naam'] ?></p>

        <div>
            <?php echo "sadf0" ?>
        </div>
    </div>
    <br>
    <br>
<?php endforeach; ?>

