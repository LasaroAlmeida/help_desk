<?php
session_start();
//destruir a variável de sessão
//session_destroy()
session_destroy();
// Ainda temos acesso aos dados da sessão pois so veremos
// que a sessão foi apagada na proxima requisição
// então devemos fazer um redirecionamento
header("Location:index.php");