<?php
    include('conexao.php');

    $id= $_GET['id'];

    $sql = 'DELETE FROM fluxo_caixa WHERE id='.$id;

    echo "<h1>Exclusão do Fluxo de Caixa</h1>";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "Registro excluído com sucesso<br>";
    }
    else
    {
        echo "Erro ao tentar excluir usuário: ".mysqli_error($con)."<br>";
    }
?>
<!-- Teste -->
<a href="listar_fluxo_caixa.php">Voltar</a>