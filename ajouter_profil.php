<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_POST['image'];
    echo "<p>Image <strong>$image</strong> ajoutée à votre profil !</p>";
    echo "<a href='catalogue.php'>Retour au catalogue</a>";
}
?>
