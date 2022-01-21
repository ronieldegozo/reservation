
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
  <link rel="shortcut icon" href="images/piggylogo.png" type="">

  <title> Piggy Wings </title>

  </head>

<body>


<h1>Reserve here!</h1>

<form action="reservation_save.php" method="POST">
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

</form>


</body>
</html>