<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Catalogue - Kin Passion</title>
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
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .image-container {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 0 8px rgba(0,0,0,0.2);
    }
    .image-container img {
      width: 100%;
      display: block;
      pointer-events: none; /* empêche le clic droit image */
      user-drag: none; /* désactive le glissement */
    }
    .watermark {
      position: absolute;
      bottom: 8px;
      right: 8px;
      background: rgba(209, 0, 93, 0.8);
      color: white;
      font-size: 12px;
      padding: 3px 8px;
      font-weight: bold;
      border-radius: 4px;
      pointer-events: none;
    }
  </style>
  <script>
    document.addEventListener('contextmenu', e => {
      if (e.target.tagName === 'IMG') e.preventDefault(); // bloque clic droit sur images
    });
  </script>
</head>
<body>
  <h1>📷 Catalogue de Kin Passion</h1>
  <div class="gallery">
    <?php
      $dossier = "images/";
      $fichiers = array_diff(scandir($dossier), ['.', '..']);
      foreach ($fichiers as $image) {
        echo '<div class="image-container">';
        echo '<img src="' . $dossier . $image . '" alt="Catalogue">';
        echo '<div class="watermark">KINPASSION</div>';
        echo '</div>';
      }
    ?>
  </div>
</body>
</html>
