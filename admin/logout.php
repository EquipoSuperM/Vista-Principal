<?php
session_start();
//$_SESSION['alogin']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="Inicie Secion para administrar la pagina";
?>
<script language="javascript">
document.location="index.php";
</script>
