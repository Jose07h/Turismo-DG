<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
{


	echo "
		<div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='.../100px180/' alt='Card image cap'>
            <div class='card-body'>
              <h5 class='card-title'>Card title</h5>
              <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div>
                <label for=''>a</label>  
              </div>
              
              <div>
                  <label for=''>a</label>
              </div>
              
            </div>
          </div>
		<tr>
    		<td>{$row[1]}</td>
		    <td>{$row[2]}</td>
		    <td>"?><img src='data:image/jpg; base64, <?php echo base64_encode($row[3]); ?>'/><?php
    echo "
    		</td>
		    <td>{$row[4]}</td>
		</tr>";
	}
?>
