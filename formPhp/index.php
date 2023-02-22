<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>files upload</title>
  <link rel="stylesheet" href="./bst/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top ">
    <button type="button" class="navbar-toggler " data-bs-target="#collapse" data-bs-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand  text-sm-center "> <span class="display-4 text-uppercase text-white fw-bold">martin</span>
    </div>


    <div class="navbar-collapse collapse align-content-center" id="collapse">
      <ul class="navbar-nav">
        <li class="nav-item"> <a href="#" class="nav-link">home</a></li>


        <li class="nav-item"> <a href="#" class="nav-link">home</a></li>


        <li class="nav-item"> <a href="#" class="nav-link">home</a></li>


        <li class="nav-item"> <a href="#" class="nav-link">home</a></li>
      </ul>

    </div>
    <div class="navbar-brand">
      <button type="button" class="float-end me-5 position-relative fas fa-phone rounded-3 " data-bs-target="#canvas" data-bs-toggle="offcanvas">
        <span class="position-absolute top-0 start-100 badge rounded bg-primary translate-middle ">10</span>
      </button>
    </div>
    <div class="offcanvas offcanvas-end" id="canvas">
      <div class="offcanvas-header"> <button type="button" class="btn-close" data-bs-target="#canvas" data-bs-toggle="offcanvas"> </button></div>
      <div class="offcanvas-body">

      </div>
    </div>

  </nav>

  <div id="info" class="alert"></div>

  <form action="./model.php" method="post" id="form" class="form m-5">
    
    <input type="hidden" name="action" value="add_user">
    <div class="form-floating">
      <input type="text" name="name" id="name" class="form-control form-control-sm  ">
      <label for="" class="form-label ">provide a name</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" id="email" class="form-control form-control-sm  ">
      <label for="" class="form-label ">provide a name</label>
    </div>
    <button type="submit" id="submit" value="submit" class="d-block btn btn-outline-success">submit</button>
  </form>
  <script src="./jquery-3.6.0.min.js"></script>

   
  <script src="./bst/bootstrap.min.js"></script>
  <script src="./upload.js"></script>
</body>

</html>