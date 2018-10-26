<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION ["username"] = "SAIFUL";
$_SESSION ["password"] = "89";
print_r($_SESSION);
?>
<?php echo session_save_path(); ?>
</body>
</html>
