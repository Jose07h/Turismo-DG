<?php
$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
{
	echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
				?><img class='card-img-top' alt='Card image cap' style=' height:200px;' src='data:image/jpg; base64, <?php echo base64_encode($row[3]); ?>'/><?php echo"
	            <div class='card-body'>
	              <h5 class='card-title'>{$row[1]}</h5>
	              <p class='card-text'>{$row[4]}</p>
		              <div>
		                <label for=''>{$row[2]}</label>  
		              </div>
		              <div>
		                <label for=''>{$row[5]}</label>  
		              </div>
		              <div>
		                <label for=''>{$row[6]}</label>  
		              </div>
		             <div>
		             	<button type='button' class='btn btn-primary' data-toggle='modal' id='cut'  data-id='{$row[0]}'>Eliminar       		
		             	</button>
		             	<button type='button' class='btn btn-primary' data-toggle='modal' id='out'  data-id='{$row[0]}'>
                  			modificar
                		</button>                
		             </div> 		              		             
	            </div>
	         </div>
        </div>";	
}
	
?>