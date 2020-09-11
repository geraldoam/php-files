<?php
// Encerrar a sessão
session_start();
session_unset();
session_destroy();

// Redirecionamento
header('Location: index.php');