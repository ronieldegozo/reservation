<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Combo Meal</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link href="../administrator/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../administrator/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../administrator/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->

    <?php include '../administrator/sidebar.php';?>

    <!-- Sidebar -->
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">


        <!-- TopBar -->
        <!-- TopBar -->
        <?php include '../administrator/navbar.php';?>
        <!-- Topbar -->




        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">COMBO MEAL</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../administrator/dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Managing Menu</li>
              <li class="breadcrumb-item active" aria-current="page">Combo Meal</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <ol class="breadcrumb">
              <li><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Food Menu</a></li>
              <!-- Modal for Food Menu -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="">
                        <div class="form-group">
                          <label for="productname">Product Name</label>
                          <input type="text" name="pname" required class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="productprice">Product Price</label>
                          <input type="number" name="pprice" required class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="productprice">Product Description</label>
                           <textarea  name="pdesc" class="form-control" required cols="10" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="productprice">Product Image</label>
                          <input type="file" name="pimg" required class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>  

            </ol>

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRODUCT PRICE</th>
      <th scope="col">PRODUCT DESCRIPTION</th>
      <th scope="col">PRODUCT PRICE</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash"></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td><i class="fas fa-edit"></i></td>
      <td><i class="fas fa-trash"></i></td>
    </tr>
  </tbody>
</table>

          </div>
          <!-- Row -->

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>You Content</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Long -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal Long</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="font-weight-bold">Title</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ac orci phasellus egestas tellus rutrum tellus. Suspendisse sed nisi lacus
                    sed. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget dolor morbi non arcu risus
                    quis varius quam. Elit ullamcorper dignissim cras tincidunt. At risus viverra adipiscing at in
                    tellus integer feugiat. Dictum non consectetur a erat nam at lectus urna. Est velit egestas dui id.
                    Sed id semper risus in hendrerit. Malesuada fames ac turpis egestas maecenas pharetra convallis
                    posuere. Pretium vulputate sapien nec sagittis aliquam. In hendrerit gravida rutrum quisque non.
                    Neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Lacus luctus accumsan
                    tortor posuere. Urna molestie at elementum eu facilisis. Neque egestas congue quisque egestas diam.
                    Turpis egestas integer eget aliquet nibh praesent. Egestas dui id ornare arcu odio ut.</p>
                  <h5 class="font-weight-bold">Title</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lacinia quis vel eros donec. Nec tincidunt praesent semper feugiat nibh sed
                    pulvinar proin gravida. Urna cursus eget nunc scelerisque viverra mauris in. Risus sed vulputate
                    odio ut enim blandit volutpat maecenas. Etiam sit amet nisl purus in mollis nunc. Aliquet bibendum
                    enim facilisis gravida neque convallis a. Aliquam id diam maecenas ultricies mi eget mauris. Et
                    malesuada fames ac turpis egestas sed. Venenatis cras sed felis eget.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Scrollable -->
          <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Modal scrollable title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="font-weight-bold">Title</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ac orci phasellus egestas tellus rutrum tellus. Suspendisse sed nisi lacus
                    sed. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget dolor morbi non arcu risus
                    quis varius quam. Elit ullamcorper dignissim cras tincidunt. At risus viverra adipiscing at in
                    tellus integer feugiat. Dictum non consectetur a erat nam at lectus urna. Est velit egestas dui id.
                    Sed id semper risus in hendrerit. Malesuada fames ac turpis egestas maecenas pharetra convallis
                    posuere. Pretium vulputate sapien nec sagittis aliquam. In hendrerit gravida rutrum quisque non.
                    Neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Lacus luctus accumsan
                    tortor posuere. Urna molestie at elementum eu facilisis. Neque egestas congue quisque egestas diam.
                    Turpis egestas integer eget aliquet nibh praesent. Egestas dui id ornare arcu odio ut.</p>
                  <h5 class="font-weight-bold">Title</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Lacinia quis vel eros donec. Nec tincidunt praesent semper feugiat nibh sed
                    pulvinar proin gravida. Urna cursus eget nunc scelerisque viverra mauris in. Risus sed vulputate
                    odio ut enim blandit volutpat maecenas. Etiam sit amet nisl purus in mollis nunc. Aliquet bibendum
                    enim facilisis gravida neque convallis a. Aliquam id diam maecenas ultricies mi eget mauris. Et
                    malesuada fames ac turpis egestas sed. Venenatis cras sed felis eget.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Center -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Modal Vertically Centered</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Your Content
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="../administrator/logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="../administrator/vendor/jquery/jquery.min.js"></script>
  <script src="../administrator/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../administrator/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../administrator/js/ruang-admin.min.js"></script>
</body>

</html>