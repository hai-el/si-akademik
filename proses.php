<?php
$keyword = $_GET['keyword'] ?? '';

echo "<h2>Hasil Pencarian</h2>";
echo "<p>Anda mencari: "
    . htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8')
    . "</p>";
?>
