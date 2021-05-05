

<style>
  <?php include '../Style/navbar.css'; ?>
</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fs-4" href="#">SerP<i class="fas fa-signature"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto ms-auto fs-7">
        <li class="nav-item me-3 ms-3">
          <a class="nav-link active" aria-current="page" href="#home"><i class="fas fa-home"></i>Home</a>
        </li>
        <li class="nav-item me-3 ms-3">
          <a class=" nav-link justify-content-center" href="#about"><i class="far fa-question-circle"></i>About</a>
        </li>
        <li class="nav-item me-3 ms-3">
          <a class="nav-link" href="#contact"><i class="fas fa-file-signature"></i>Contact</a>
        </li>
      </ul>
      <a class="nav-link" href="../Login/Login.php">
        <button class="btn btn-outline-success btn-sm" type="button"><i class="fas fa-sign-in-alt"></i>Login</button>
      </a>
    </div>
  </div>
</nav>
