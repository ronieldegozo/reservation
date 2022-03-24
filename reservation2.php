<link rel="stylesheet" href="./reservation_design/reservation.style.css">
    <!-- Icons font CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="container">
            <div class="row">
                
                <div class="col">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Customer Information</h2>
                        </div>
                        <div class="card-body">
                            <form action="reservation_save.php"  method="POST">
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
                                            <span class="form-label">Contact #</span>
											<input type="text" class="form-control" placeholder="Contact #" name="contact" required>
		
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <span class="form-label">Address</span>
											<textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
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
								</div>


                        </div>
                    </div>
            </div>
            
            <div class="col">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Event Details</h2>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Name of Event</span>
                                        <input type="text" class="form-control" placeholder="Event Name" name="r_eventname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Date of event</span>
                                        <input type="date" id="datepicker" class="form-control" name="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Time of Event</span>
                                        <input data-format="hh:mm A" class="form-control" type="time" name="time" id="datepicker" required="true">
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Address</span>
                                        <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input type="email" class="form-control" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                            </div>

                            <div>  
                                <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
