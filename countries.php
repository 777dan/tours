<?php
if (isset($_POST['formSubmit'])) { 
    $country = $_POST["formCountry"];
    $price = $_POST["range"];
    $stars = $_POST["formStars"];
    $stars = $stars[0];
    $transport = $_POST["formTransport"];
    // $page = strtolower($country).".php";
    $fileCountry = fopen("country.php", "w+");
    $code = '<?php
include("header.php");
include("content.php");
include("footer.php");
?>';
    fwrite($fileCountry, $code);
    header("Location: country.php?country=$country&stars=$stars&price=$price&transport=$transport");
    fclose($page);
}