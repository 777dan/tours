<?php
include "tours.php";
echo '<table class="table table-striped">';
echo '<tr><th>Name</th><th>Country</th><th>Stars</th><th>Price</th><th>Transport</th></tr>';
for ($i = 0; $i < count($tours); $i++) {
    if ($tours[$i]["country"] == $_GET['country'] && $tours[$i]["price"] <= $_GET['price'] && $tours[$i]["stars"] == $_GET['stars'] && $tours[$i]["transport"] == $_GET['transport']) {
            $tour = $tours[$i];
            echo '<tr>';
            foreach ($tour as $key) {
                echo "<td>";
                echo $key;
                echo "</td>";
            }
            echo '</tr>';
        }
    // else {
    //     echo "<td colspan='5'>Nothing found for your request :(</td>";
    //     break;
    // }
}
echo '</table>';
