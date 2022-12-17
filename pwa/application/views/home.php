<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<h1><?php echo $titulo ?></h1>
	<?php foreach($productos as $key=>$producto){?>
		<div>
			<h2><?php echo $producto["nombre"]?></h2>
			<a href="<?php echo base_url()."index.php/detalle/index/".$producto["id_productos"]?>">Ver Detalle</a>

	    </div>
		<?php } ?>


