<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>
    Dashboard Admin
  </title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!--     Fonts and icons     -->
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" type="text/css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" type="text/css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link id="pagestyle" type="text/css" href="../assets/css/argon-dashboard.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  @livewireStyles
  @powerGridStyles
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div> 
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header" style="margin-top:2px;">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../assets/images/logo.png" style="top:0;" alt="">
      </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('admin.dash')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class='bx bxs-dashboard text-primary text-sm opacity-10' ></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase  font-weight-bolder opacity-6">Products & Fornisseur</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.product')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-basket text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Produits</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.category')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="ni ni-credit-card text-success text-sm opacity-10"></i> -->
              <i class='bx bx-category text-success text-sm opacity-10'></i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.extra')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             
              <i class='bx bxs-plus-square text-info text-sm opacity-10'></i>
            </div>
            <span class="nav-link-text ms-1">Supplément</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.catextra')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class='bx bx-list-plus text-danger text-sm opacity-10'></i>
            </div>
            <span class="nav-link-text ms-1">Category Supplément</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.addsupplier')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class='ni ni-delivery-fast text-danger text-sm opacity-10'></i> 
              <!-- <i class='bx bxs-package text-danger text-sm opacity-10'></i> -->
            </div>
            <span class="nav-link-text ms-1">Fornisseur</span>
          </a>
        </li>
      </ul>     
    </div>
       


    <!--***** collaps sidebar 2 ****** -->

    <div class="collapse navbar-coll " id="sidenav-collapse-main" style="margin-top:140px;">
      <ul class="navbar-nav" >

        <li class="nav-item mt-3" style="color:black;font-weight:700;">
          <h6  class="ps-4 ms-2 text-uppercase  font-weight-bolder opacity-6">Stock & chiffre d'affaire</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="../pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i> -->
              <i class='bx bx-notepad text-warning text-sm opacity-10'></i>
            </div>
            <span class="nav-link-text ms-1">Stock</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="ni ni-credit-card text-success text-sm opacity-10"></i> -->
              <i class='bx bxs-report text-success text-sm opacity-10'></i>
            </div>
            <span class="nav-link-text ms-1">Raport de stock</span>
          </a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.facture')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="ni ni-world-2 text-danger text-sm opacity-10"></i> -->
              <i class='bx bx-receipt text-danger text-sm opacity-10'></i>
            </div>
            <span class="nav-link-text ms-1">Facturation</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="../pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class='bx bx-receipt text-danger text-sm opacity-10'></i> -->
              <i class="large material-icons text-danger text-sm opacity-10">insert_chart</i>
            </div>
            <span class="nav-link-text ms-1">chiffre d'affaire</span>
          </a>
        </li>

        <li class="nav-item mt-3" style="color:black;font-weight:700;">
          <h6 class="ps-4 ms-2 text-uppercase  font-weight-bolder opacity-6">Employés</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.caissier')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
               <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Caissier</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-badge text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manager</span>
          </a>
        </li>

      </ul>
    </div>


  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Bonjour {{Auth::guard('admin')->user()->name}}</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="{{ route('admin.logout') }}" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Log out</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="#" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="#" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
            </i>

          </ul>
        </div>
      </div>
    </nav>
   
    {{ $slot }}
    
    <footer class="footer pt-3" style="padding-top:10rem !important;">
        <div class="container-fluid" style="padding-left:450px;">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold" target="_blank">NlWeb</a>
   
              </div>
            </div>
          </div>
        </div>
      </footer>
  </main>

  <script src="assets/js/argon-dashboard.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  @livewireScripts
  @powerGridScripts
  @stack('scripts')
  <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        window.addEventListener('showAlert', event => {
          alert(event.detail.message);
            })
   </script>
</body>

</html>