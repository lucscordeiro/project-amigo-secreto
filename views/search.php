<?php 

foreach ($this->dataUsers as $usuario) {
    echo "<div>";
    echo "Nome: " . htmlspecialchars($usuario['nome']);
    echo "<br>Email: " . htmlspecialchars($usuario['email']);
    echo "</div><hr>";
}

?>