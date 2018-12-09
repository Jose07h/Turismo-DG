<?php
$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
{	               
		?>
        <form class='was-validated'  method='POST' action='<?php echo URL?>inicio/show' novalidate id='save_img' enctype='multipart/form-data' autocomplete='off'>
        <?php 
        echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
				?><img class='card-img-top' alt='Card image cap'  style=' height:200px;'  src='data:image/jpg; base64, <?php echo base64_encode($row[1]); ?>'/><?php echo"
	            <div class='card-body'>
	              <h5 class='card-title'>{$row[2]}</h5>	             
		             <div>		             			             	
	                    <input type='hidden' name='id' id='id' value='{$row[0]}' >
		             </div> 		              		             
		             <button type='submit' class='btn_ver btn btn-primary'>ver mas ></button>
	            </div>
	         </div>
        </div>
        </form>";
}	
?>

