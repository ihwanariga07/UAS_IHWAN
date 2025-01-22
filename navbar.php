<nav class="navbar navbar-expand-lg bg-info-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/UAS_IHWAN/logo/hotel.png" alt="Brand Logo" type="image" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link menu active" aria-current="page" href="/UAS_IHWAN/index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu active" aria-current="page" href="/UAS_IHWAN/pemesanan/index.php">Data Pemesanan</a>
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


<!-- CSS -->
<style>
  
  .menu {
    position: relative;
    text-decoration: none;
  }

  .menu::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background: #fff;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform 0.3s ease, background 0.3s ease;
    bottom: 0;
    left: 0;
  }

  .menu:hover::before {
    transform: scaleX(1);
    background: #007bff; 
  }

  .menu:hover {
    color: #007bff;
    transition: color 0.3s ease;
  }

 
  .btn-danger {
    color: #fff;
    text-decoration: none;
  }

  .btn-danger:hover {
    color: #d9534f;
    text-decoration: none; 
    transition: color 0.3s ease;
  }


  ul {
    display: flex;
    gap: 1rem;
    list-style: none;
  }

  ul li {
    display: grid;
    place-content: center;
    margin: 0;
  }
</style>
