<?php
include('session.php'); 
include 'includes/header.php';
include 'includes/navbar.php';
?>
<!--Main content Starts Here--> 
<div style="width: 50px; height: 50px;"></div>
<div class="container">
 <div class="col-md-2"></div>
 <div class="col-md-8">
	<div class="panel panel-info">
	 <div class="panel-heading"><h3>List of Services</h3></div>
	 <div class="panel-body">
	<table class=" table table-striped">
	   <thead>
	   	<tr>
		    <th>Service Offer</th>
			<th>Price</th>
		</tr>
	   </thead>
	   <tbody>
		<?php

      include 'connect.php';
        
        $query="SELECT * FROM services";
       
	   $run=mysqli_query($con,$query);

        while ($row=mysqli_fetch_array( $run)) {
            
			$service=$row['service_offer'];
        	$price=$row['price'];

		?>
		
		<tr>
		<td><?php echo $service; ?></td>
		<td><?php echo $price; ?></td>
		</tr>
		</tbody>
		<?php } ?>
	</table>
    </div>	 
  </div>	 
</div>	 
</div>
</div>
<?php       
include 'includes/footer.php';
?>
     
