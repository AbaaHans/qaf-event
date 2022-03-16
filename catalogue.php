<?php 
$id = $_GET['id'];
$page = "";

if (isset($_GET['send'])) {
    $send = 'ok';
}

if ($id == 1) { $page = "Catalogue Matériels"; }
else if ($id == 2) { $page = "Catalogue Consommables"; }
elseif ($id == 3) { $page = "Catalogue Nouvautés"; }
else { $page = "Menu"; }

include 'header.php'; ?>

<?php if ($id == 1) { 
        include 'catalogue-m.html'; 
    }

    else if ($id == 2) {
        include 'catalogue-c.html';
    }


    else if ($id == 3) {
        include 'catalogue-n.html';
    }

    else {
        include 'menu.html';
    }
?>
<!-- <div class="slider-2"> 
        <div class="w3-content w3-display-container">
            <img class="mySlides" src="image - 11.png" style="width:100%">
            <img class="mySlides" src="index.jpg" style="width:100%">
            <img class="mySlides" src="image - 43.png" style="width:100%">
            <img class="mySlides" src="image - 44.png" style="width:100%">
            <img class="mySlides" src="image - 1.png" style="width:100%">
        
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div> -->



<?php include 'footer.php'; ?>