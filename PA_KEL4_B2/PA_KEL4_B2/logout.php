<?php
session_start();
session_unset();
session_destroy();
 
echo "
    <script>
    alert('Logout Berhasil!');
    document.location.href = 'index.php';
    </script>
    ";
exit();
?>