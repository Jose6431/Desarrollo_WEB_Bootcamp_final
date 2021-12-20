<?php
    
  require_once('categoria.php');


  $cat = new Categoria();
    
  //armar bien el array

  $data['cat_nombre'] = "Peliculas"; 

 // $cat->store($data);
  $categoria = $cat->get_all();
//para hacer un array asociativo
foreach($categorias as $item){
  echo $item['cat_id'];

}




?>

<table>
  <tr>
    <th>ID</th>
    <th>NOMBRE CATEGORIA</th>
  </tr>

  <?php foreach($categorias as $item); ?>
  <tr>
    <td><?php echo $item['cat_id']  ?></td>
    <td> <?= $item['cat_nombre'] ?>  </td>
  </tr>
  <?php endforeach;?>

</table>

