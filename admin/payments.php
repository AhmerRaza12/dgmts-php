<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Payments</h1>
	</div>

</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">


			<div class="box box-info">

				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<!-- <th>Thumbnail</th> -->
								<th>Customer Name</th>
								<th>Customer Email</th>
								<th>Invoice No</th>
								<th>Status</th>
								<th>Amount</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare("SELECT customer_name, customer_email, customer_name, invoice_no, amount, status, created_at FROM tbl_payment");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
							foreach ($result as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['customer_name']; ?></td>
									<td><?php echo $row['customer_email']; ?></td>
									<td><?php echo $row['invoice_no']; ?></td>
									<?php if($row['status']==1){?>
										<td><?php echo "Success"; ?></td>
									<?php } else{ ?>
										<td><?php echo "Failed"; ?></td>
									<?php } ?>								

									<td><?php echo $row['amount']; ?></td>
									<td><?php echo $row['created_at']; ?></td>
									
									
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>


<?php require_once('footer.php'); ?>