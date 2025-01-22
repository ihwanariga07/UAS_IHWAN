<nav class="navbar navbar-expand-lg bg-info-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/UAS_IHWAN/logo/internet.png" alt="Brand Logo" type="image" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link menu active" aria-current="page" href="">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu active" aria-current="page" href="">Data Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu active" aria-current="page" href="">Data Tamu</a>
        </li>
        
      </ul>
      <form class="d-flex mx-auto me-50" role="search" style="width: 50%;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <a 
        class="btn btn-danger nav-link text-black" 
        href="/UAS_IHWAN/frontpage.php" 
        onclick="return confirmLogout(event);"
      >Logout</a>
    </div>
  </div>
</nav>