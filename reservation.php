
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="./images/logo2.png" type="">
  <link rel="stylesheet" type="text/css" href="css/reservation.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <title> Piggy Wings </title>

  </head>

<body>

<div id="booking" class="section">
	<div> 
		<div class="container text-center">
				<div class="row ">
					<!-- <div class="col-md-4">
						<div class="booking-cta">
							<a href="">
							<img src="./images/logo2.png" alt="">
							</a>
						</div>
					</div> -->
					<div class="col-md-8 ">
						<div class="booking-form "  >
							<form action="reservation_save.php" method="POST">
								<label for="Title"><h1 style="text-align: center;">Reserve Table</h1></label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">First Name</span>
											<input type="text" class="form-control" placeholder="Enter First Name" name="first" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Last Name</span>
											<input type="text" class="form-control" placeholder="Enter Last Name" name="last" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Address</span>
											<textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Contact #</span>
											<input type="text" class="form-control" placeholder="Contact #" name="contact" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input type="email" class="form-control" placeholder="Email Address" name="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Name of Event</span>
											<input type="text" class="form-control" placeholder="Event Name" name="r_eventname">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Date of event</span>
											<input type="date" id="datepicker" class="form-control" name="date" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Time of Event</span>
											<input data-format="hh:mm A" class="form-control" type="time" name="time" id="datepicker" required="true">
										</div>
									</div>
								</div>

								<!-- data -->
				
								</div>
								<!-- <div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Adults (18+)</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Children (0-17)</span>
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Travel class</span>
											<select class="form-control">
												<option>Economy class</option>
												<option>Business class</option>
												<option>First class</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div> -->
								<div class="form-btn">
									<button class="submit-btn" type="submit">Add Reservation</button>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div>
		
	</div>
</div>




<!-- <form action="reservation_save.php" method="POST">
    <label for="Firstname">Fname</label>
    <input type="text" placeholder="Enter First Name" name="first" required>

    <label for="Firstname">Lname</label>
    <input type="text" placeholder="Enter First Name" name="last" required>

    <label for="">Address</label>
    <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>

    <label for="">Contact</label>
    <input type="text" class="form-control" placeholder="Contact #" name="contact" required>

    <label for="">email</label>
    <input type="email" class="form-control" placeholder="Email Address" name="email">

    <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" value="option1" required> I agree to the <a href="#facilities" data-toggle="modal">terms and condtion</a> of the Chimney's Catering
                                    </label>

                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>

</form>  -->


</body>
</html>