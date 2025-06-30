<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Catalogue - KinLove</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    h1 {
      color: #d1005d;
      text-align: center;
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .image-container {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 0 8px rgba(0,0,0,0.2);
      background: white;
      padding: 10px;
    }
    .image-container img {
      width: 100%;
      display: block;
      pointer-events: none;
      user-drag: none;
      border-radius: 10px;
    }
    .watermark {
      position: absolute;
      bottom: 45px;
      right: 18px;
      background: rgba(209, 0, 93, 0.8);
      color: white;
      font-size: 12px;
      padding: 3px 8px;
      font-weight: bold;
      border-radius: 4px;
      pointer-events: none;
    }
    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 12px;
      background: #d1005d;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
    }
    .btn:hover {
      background: #b0004f;
    }
  </style>
  <script>
    document.addEventListener('contextmenu', e => {
      if (e.target.tagName === 'IMG') e.preventDefault();
    });
  </script>
</head>
<body>
  <h1>📷 Catalogue KinLove</h1>
  <div class="gallery">
    <?php
      $dossier = "images/";
      $fichiers = array_diff(scandir($dossier), ['.', '..']);
      foreach ($fichiers as $image) {
        echo '<div class="image-container">';
        echo '<img src="' . $dossier . $image . '" alt="Catalogue">';
        echo '<div class="watermark">KINPASSION</div>';
        echo '<form method="post" action="ajouter_profil.php">';
        echo '<input type="hidden" name="image" value="' . $image . '">';
        echo '<button class="btn">Ajouter au profil</button>';
        echo '</form>';
        echo '</div>';
      }
    ?>
  </div>
</body>
</html>
