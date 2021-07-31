<!DOCTYPE HTML>
<html>
<head>
	<title>Contact us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-lg-4">
				<img src="product-images/contact.jpg" width=100% >
			</div>
			<div class="col-lg-8">
				<form>
					  <div class="form-group mt-3">
						<label for="exampleFormControlInput1">First Name:</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter First Name" required>
						<p style="color:red">Please enter your first name</p>
					  </div>
					  <div class="form-group mt-3">
						<label for="exampleFormControlInput1">Last Name:</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Last Name" required>
						<p style="color:red">Please enter your last name</p>
					  </div>
					  <div class="form-group mt-3">
						<label for="exampleFormControlInput1">Email:</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" required>
						<p style="color:red">Please enter your email address</p>
					  </div>
					  <div class="form-group mt-3">
						<label for="exampleFormControlTextarea1">Comment:</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
						<p style="color:red">Please enter a description</p>
					  </div>
					  <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
						submit
					</button>
				</form>
				
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Successfully Submitted</h5>
			  </div>
			  
			 <div class="modal-footer">
				<!-- <button ng-click="addItem()" type="button" class="btn btn-primary">Save</button> -->
				<input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close" onclick="location.href='index1.php'"></button>
			  </div>
			</div>
		  </div>
		</div>
		
	</div>
</body>
</html>


					