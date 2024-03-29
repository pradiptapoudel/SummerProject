<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/common.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="http://localhost/summerproject/index.php">ARCHANA STORES</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  me-2" aria-current="page" href="http://localhost/summerproject/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="http://localhost/summerproject/goldstar.php">Goldstar</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link me-2" href="http://localhost/summerproject/caliber.php">Caliber</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link me-2" href="http://localhost/summerproject/blackhorse.php">BlackHorse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="http://localhost/summerproject/cart.php">Cart</a>
        </li>
        
        
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
        </button>  
    </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
        <div class="modal-header">
          <h5 class="modal-title fs-3 me-2 d-flex align-items-center"><i class="bi bi-person"></i> User Login</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-4">
          <label class="form-label">Email</label>
          <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
          <label class="form-label">Password</label>
          <input type="password" class="form-control shadow-none">
          </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
          <button class="btn btn-dark shadow-none">Login</button>
          <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
        </div>
        
      </div>
    </form>
    </div>
  </div>
  </div>
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
        <div class="modal-header">
          <h5 class="modal-title fs-3 me-2 d-flex align-items-center"><i class="bi bi-person-add"></i> User Registration</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          </span>
          <div class="container-fluid">
          <div class="row">
          <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control shadow-none">
          </div>
          <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none">
          </div>
          
          <div class="col-md-6 ps-0">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
          </div>

          <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control shadow-none">
          </div>
        </div>
      </div>
      <div class="text-center">
      <button class="btn btn-dark shadow-none">Register</button>
  </div>
  </div>
</form>
</div>
</div>
</div>