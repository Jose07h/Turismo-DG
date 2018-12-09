<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
{
	echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
				?><img class='card-img-top' alt='Card image cap' style=' height:200px;' src='data:image/jpg; base64, <?php echo base64_encode($row[1]); ?>'/><?php echo"
	            <div class='card-body'>
	              	<h5 class='card-title'>{$row[2]}</h5>	             
		          	<div>
			        <button type='button' class='btn btn-primary' data-toggle='modal' id='cut'  data-id='{$row[0]}'>Eliminar </button>	
			        <a href='".URL."tipos/modificar/{$row[0]}' class='btn btn-primary'> Modificar
			            </a>
		        	</div> 		              		        
	            </div>
	         </div>
        </div>";	
}
	
?>
