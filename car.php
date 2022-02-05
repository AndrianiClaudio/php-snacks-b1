<?php
require_once __DIR__ . '/server/db.php';

// in questa pagina verranno stampate tutte le info della specifica car
var_dump($db[$_GET['index']]['Marca']);
?>