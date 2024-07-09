<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "<script>
alert('logout Success');
window.location.href='../index.php';
</script>";
?>

</body>
</html>