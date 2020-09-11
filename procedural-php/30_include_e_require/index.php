<?php 

// Se não houver o arquivo, ele para o script.
require 'header.php';

// Verifica se foi incluido, se sim, não inclui novamente.
require_once 'header.php';

// Ele segue o script, mesmo sem o arquivo.
include 'header.php';

// Verifica se foi incluido, se sim, não inclui novamente.
include_once 'header.php';

?>

<?php echo "Olá pessoal!"; ?>

<?php 

include 'footer.php';

?>
