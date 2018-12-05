<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
{
	echo "
	<a class='btn_ver'  href='".URL."inicio/show/{$row[0]}' data-id='{$row[0]}'>
		<div class='card1' height= '300' width='300'> "
			?>
				<img class='card-img-top'   src='data:image/jpg; base64, <?php echo base64_encode($row[1]); ?>'/>
			<?php 
			echo"
	        <div class='card-title'>
              	<h5 class='card-title'>{$row[2]}</h5>	             
            </div>            
         </div>        
    </a>";	

}
	
?>
