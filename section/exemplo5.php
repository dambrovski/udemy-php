<?php

require_once("config.php");

echo session_save_path();
echo "<br>";
var_dump(session_status());

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "Sessões desabilitadas";
        break;
    
    case PHP_SESSION_NONE:
        echo "Nenhuma sessão existente!";
           break;
    case PHP_SESSION_ACTIVE:
        echo "Existe uma sessão habilitada";
            break;
    default:
        echo "caiu no default";
        break;
}

?>