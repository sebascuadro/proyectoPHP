<?php
defined ('BASEPATH') or exit ('No se permite acceso directo');?>

<?php require_once ROOT . FOLDER_PATH . '/app/views/template/header.php'?>
<?php require_once ROOT . FOLDER_PATH . '/app/views/template/body.php'?>
<body>
    

        <div class="label" >

       <label for="Nombre"> Nombre</label>
       <input type="text" name="Nombre" id="Nombre" value = "<?= $info_menu->Nombre?>" disabled ="True">
       
       </div>

       <div class="label" >
       <label for="Descripcion"> Descripcion</label>
       <input type="text" name="Descripcion" id="Descripcion" value = "<?= $info_menu->Descripcion?>" disabled ="True" >
       </div>
       <div class="label" >
       <label for="Observaciones">Observaciones</label>
       <input type="text" name="Observaciones" id="Observaciones"value = "<?= $info_menu->Observaciones?>" disabled ="True">
       </div>
       <div class="label" >
       
       <!--label for="foto"> Foto</label-->
       <img src="/uploads/<?=$info_menu-> Foto?>" width="100px" height="100px">
     
       
       </div>
       <div class="boton" >
        <input type="hidden" name="Id" value="<?= $info_menu->ID ?>">

       </div>

    <h3>Receta</h3>
    <table class="table">
    <?php

for ($i=0; $i <count($info_producto_Receta); $i++) { 

    echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/eliminarProductoReceta ">';
    echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
    echo'<tr>';
    echo '<td> <img src="/uploads/'.$info_producto_Receta[$i][4].'" width="100px" height="100px"></td>';
    echo '<td>'.$info_producto_Receta[$i][1].'</td>';
    echo '<td>'.$info_producto_Receta[$i][2].'</td>';
    echo '<td>'.$info_producto_Receta[$i][3].'</td>';
    echo '<td> Cantidad : '.$info_producto_Receta[$i][5].'</td>';
    echo '<td><input type="hidden" name = "IdProducto" value="'.$info_producto_Receta[$i][1].'"></td>';
    echo '<td><input type="submit"value ="Eliminar"></td>';
    echo '</tr>';
    echo '</form>';
}

?>
    </table>

    <H3> Productos Disponibles</H3>

    <table class="table">
       <tr>
           <th>Foto</th>
           <th>ID</th>
           <th>Nombre</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>añadirProductoReceta</th>
          
          
       </tr>

       <?php

       for ($i=0; $i <count($info_producto); $i++) { 

           echo'<form method="POST" action="'. FOLDER_PATH .'/Cocina/agregarProductoReceta ">';
           echo'<input type ="hidden"name= "Id"value = "'.$info_menu->ID.'">';  
           echo'<tr>';
           echo '<td> <img src="/uploads/'.$info_producto[$i][4].'" width="100px" height="100px"></td>';
           echo '<td>'.$info_producto[$i][1].'</td>';
           echo '<td>'.$info_producto[$i][2].'</td>';
           echo '<td>'.$info_producto[$i][3].'</td>';
           
           echo '<td><input type="text" name = "Cantidad" value=""></td>';
           echo '<td><input type="hidden" name = "IdProducto" value="'.$info_producto[$i][1].'"></td>';
           echo '<td><input type="submit" value="Anadir a la receta"></td>';
           echo '</tr>';
           echo '</form>';
       }

       ?>
   </table>
    </form>




    </body>