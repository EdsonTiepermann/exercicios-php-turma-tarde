<?php include "header.php" ?>

<form action="validacao.php" method="$_GET">
    <input type="text" id="nome" name="login" placeholder="Usuario">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">login</button>
</form>

<?php include "footer.php" ?>