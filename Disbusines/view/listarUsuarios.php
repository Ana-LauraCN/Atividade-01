<?php
    include_once '../control/listarUsuariosControl.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table border="1px" style="padding:7px; text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 18px;">
        <tr>
        <th>Id_Usuario</th>
        <th>Nome</th>
        <th>Idade</th>
        <th colspan="2">Operacões</th>
       
    </tr>
    <?php foreach($todos as $t){?>
           <tr>
                <td><?php echo $t['id_usuario']?></td>
                <td><?php echo $t['nome']?></td>
                <td><?php echo $t['idade']?></td>
            <td>
                <a href="../control/excluirUsuariosControl.php?id_usuario=<?php echo $t['id_usuario']?>">
                  <button style="background-color: red; color: oldlace;">Excluir</button>  
                </a>
            
            </td>
            <td>
                <a href="alterarUsuario.php?id_usuario=<?php echo $t['id_usuario']?>">
                    <button style="background-color: green;color: oldlace;">Alterar</button>
                </a>
            
            </td>

           </tr>

        <?php }?>  
           

    </table>
</body>
</html>