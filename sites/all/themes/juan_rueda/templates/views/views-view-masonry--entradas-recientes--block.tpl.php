<?php
/**
 * @file
 * Default view template to display items in a jQuery Masonry grid.
 */
?>
<?php $i = 0;?>
<?php foreach ($rows as $id => $row):
  $clase = $view->result;

  $nombre_clase = 'categoria-' . $clase[$i]->field_field_tipo_articulo[0]['raw']['tid'];
  ?>
  <div class="<?php print $nombre_clase ?> masonry-item<?php if ($classes_array[$id]) print ' ' . $classes_array[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php
$i++;
 endforeach; ?>
