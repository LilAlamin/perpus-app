<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid mx-5">
      <a class="navbar-brand" href="#">Perpus Gaul</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Buku")? 'active' :'' }}" aria-current="page" href="/buku">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Anggota")? 'active' :'' }}" href="/anggota">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Peminjaman")? 'active':'' }}" href="/peminjaman">Peminjaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Pengembalian")? 'active':'' }}" href="/pengembalian">Pengembalian</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>