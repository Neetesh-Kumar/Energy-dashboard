<?php
session_unset();
session_destroy();
header("Location:../agent_index.php")
?>