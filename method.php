<?php
$method = $_SERVER['REQUEST_METHOD'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Deteksi HTTP Method</title>
</head>
<body>
    <h1>Deteksi HTTP Method</h1>

    <?php if ($method === 'GET'): ?>
        <p>Request GET diterima. Browser meminta halaman.</p>
    <?php elseif ($method === 'POST'): ?>
        <p>Request POST diterima. Data dikirim untuk diproses.</p>
    <?php else: ?>
        <p>Request method:
            <?= htmlspecialchars($method, ENT_QUOTES, 'UTF-8') ?>
        </p>
    <?php endif; ?>

    <form method="POST" action="method.php">
        <button type="submit">Kirim Request POST</button>
    </form>
</body>
</html>
