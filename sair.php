<?php

session_start();

unset($_SESSION['email_adm']);
unset($_SESSION['senha_adm']);

header('location: login.php' ); 



?>





