<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Download</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CodeIgniter Download</h1>
	<div class="row">
		<div class="col-sm-4">
			<h3>File Upload Form</h3>
			<form method="POST" action="<?php echo base_url(); ?>files/insert" enctype="multipart/form-data">
				<div class="form-group">
					<label>Description:</label>
					<input type="text" name="description" class="form-control" required>
				</div>
				<div class="form-group">
					<label>File:</label>
					<input type="file" name="upload" required>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
			<?php
				if($this->session->flashdata('success')){
					?>
					<div class="alert alert-success text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php
				}
 
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
		</div>
		<div class="col-sm-8">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Filename</th>
						<th>Description</th>
						<th>Download</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($files as $file){
						?>
						<tr>
							<td><?php echo $file->id; ?></td>
							<td><?php echo $file->filename; ?></td>
							<td><?php echo $file->description; ?></td>
							<td><a href="<?php echo base_url().'files/download/'.$file->id; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>