<?php
$dato=$datos[0];
?>
<div class="container pie">
      <div class="row" id="lista">
<?php 
while($row=mysqli_fetch_array($dato))
{
	echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
				?>
					<img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[3]); ?>'/>
				<?php 
				echo"
	            <div class='card-body'>
	              <h5 class='card-title'>{$row[1]}</h5>
	              <p class='card-text'>{$row[4]}</p>
		              <div>
		                <label for=''>{$row[2]}</label>  
		              </div>		             
	            </div>
	         </div>
        </div>";	
}
?>
</div>
</div>