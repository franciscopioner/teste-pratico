
<?php

$btnFinalizar = filter_input(INPUT_POST, 'btnFinalizar', FILTER_SANITIZE_STRING);

print '<script>location.href= "../cadastro_finalizado.html";</script>';

?>
