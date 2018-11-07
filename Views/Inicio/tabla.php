<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
{
	echo "
	<a href='".URL."inicio/show/{$row[0]}' class='btn'>	
		<div class='card1'> "
			?>
				<img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[1]); ?>'/>
			<?php 
			echo"
	        <div class='card-title'>
              	<h5 class='card-title'>{$row[2]}</h5>	             
            </div>            
         </div>        
    </a>";	

}
	
?>
