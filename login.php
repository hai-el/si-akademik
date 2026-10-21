<?php
$username = $_POST['username'] ?? '';

echo "<h2>Data Login</h2>";
echo "<p>Username yang dikirim: "
    . htmlspecialchars($username, ENT_QUOTES, 'UTF-8')
    . "</p>";
echo "<p>Ini hanya simulasi form, belum memverifikasi akun.</p>";
?>
