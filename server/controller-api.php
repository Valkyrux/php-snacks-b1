<?php
require_once "db.php";
header("Conten-Type: application/json");
echo json_encode($cars);
