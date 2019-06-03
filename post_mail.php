<?php
echo $_POST["mail"] . ' ' . $_POST["subject"] . ' ' . $_POST["message"];
mail($_POST["mail"], $_POST["subject"], $_POST["message"]);
?>