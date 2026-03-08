<?php
// Wir binden unser Herzstück ein
require_once 'config.php';

// Wir holen uns Mina aus der Datenbank
$stmt = $pdo->query("SELECT * FROM Personen WHERE name = 'Mina'");
$mina = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Jan World - Prompt Generator</title>
    <style>
        body { background-color: #1a1a1a; color: #f0f0f0; font-family: Arial, sans-serif; padding: 20px; }
        .objekt-karte { background-color: #333; border-left: 5px solid #00ffcc; padding: 15px; margin-top: 20px; width: 300px; }
        .highlight { color: #00ffcc; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Willkommen in Jan_World</h1>
    <p>Hier entsteht deine visuelle OOP-Steuerzentrale.</p>

    <?php if ($mina): ?>
    <div class="objekt-karte">
        <h3>Objekt: <?php echo $mina['name']; ?></h3>
        <p>Herkunft: <span class="highlight"><?php echo $mina['herkunft']; ?></span></p>
        <p>Augenfarbe: <span class="highlight"><?php echo $mina['augenfarbe']; ?></span></p>
        <p>Sternzeichen: <span class="highlight"><?php echo $mina['sternzeichen']; ?></span></p>
    </div>
    <?php endif; ?>

</body>
</html>