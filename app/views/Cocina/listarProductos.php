<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<body class="text-center">
    <div class="Conteiner" >
      <div class="row" >
        <div class="col-3" ><h2> Menu lateral</h2></div>
        
<div class="col-6">
 <h2> Lista de Productos</h2> 
     <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Editar</th>
           <th>Eliminar</th>
          
       </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 
           
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td>' .$info_producto[$i][5].'</td>';
           
           echo '<td> <a href="'. FOLDER_PATH.'/Cocina/listarProducto/'.$info_producto[$i][1].'"><i class="fa-solid fa-pen-to-square"></i></a> </td>';
           echo '<td> <a " href="'. FOLDER_PATH.'/Cocina/deleteProducto/'.$info_producto[$i][1].'"> <i class="fa-solid fa-trash-can"></i></t>';
            echo '</tr>';
       }

       ?>
   </table>
 </div>

        <div class="col-3"><h2>Propaganda</h2></div>
</body>
</html>





