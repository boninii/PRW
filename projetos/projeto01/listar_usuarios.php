<?php
    include('conexao.php');

    $sql = 'SELECT * FROM usuario';
    //retorna todos os dados para consulta
    $result = mysqli_query($con, $sql);
    
    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);
    //print_r($row);
?>

<!DOCTYPE html>
    <html lang="pt_BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Listagem de Usuários</title>
        </head>
        <body>
            <h1 align="center">Listagem de Usuários</h1>
            <table align="center" border="1">
                <!--LInha-->
                <tr align="center">
                    <!--Table-->
                    <th>Código</th>
                    <th>Nome</th> 
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Excluir</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row['id_usuario']."</td>";
                        echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>".$row['nome_usuario']."</a></td>";
                        echo "<td>".$row['email_usuario']."</td>";
                        echo "<td>".$row['telefone_usuario']."</td>";
                        echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </body>
    </html>