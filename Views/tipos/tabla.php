<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
{
	echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
				?><img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[1]); ?>'/><?php echo"
	            <div class='card-body'>
	              	<h5 class='card-title'>{$row[2]}</h5>	             
		          	<div>
			          	<a href='".URL."tipos/eliminar/{$row[0]}' class='btn tooltipped' data-position='bottom' data-tooltip='Eliminarr'>Eliminar       		
			          	</a>
			          	<a href='".URL."tipos/modificar/{$row[0]}' class='btn'>
			             	Modificar
			            </a>
		        	</div> 		              		        
	            </div>
	         </div>
        </div>";	
}
	
?>