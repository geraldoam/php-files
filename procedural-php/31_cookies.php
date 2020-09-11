<?php

/* Cookie */ 
setcookie('user', 'Rodrigo Oliveira', time()+3600);
setcookie('email', 'rodrigosantos@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

echo $_COOKIE['ultima_pesquisa'];