<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Create Product - InApp Inventory Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./assets/images/favicon_io/site.webmanifest">
</head>

<body>
  <div id="overlay" class="overlay"></div>
  <!-- TOPBAR -->
  <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3">
    <button id="toggleBtn" class="d-none d-lg-inline-flex btn btn-light btn-icon btn-sm ">
      <i class="ti ti-layout-sidebar-left-expand"></i>
    </button>

    <!-- MOBILE -->
    <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2">
      <i class="ti ti-layout-sidebar-left-expand"></i>
    </button>
    <div>
      <!-- Navbar nav -->
     <ul class="list-unstyled d-flex align-items-center mb-0 gap-1">
        <!-- Pages link -->

        <!-- Bell icon -->
        <li>
          <a class="position-relative btn-icon btn-sm btn-light btn rounded-circle" data-bs-toggle="dropdown"
            aria-expanded="false" href="#" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
              2
              <span class="visually-hidden">unread messages</span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
            <ul class="list-unstyled p-0 m-0">
              <li class="p-3 border-bottom ">
                <div class="d-flex gap-3">
                  <img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New order received</p>
                    <p class="mb-1">Order #12345 has been placed</p>
                    <div class="text-secondary">5 minutes ago</div>
                  </div>
                </div>
              </li>
              <li class="p-3 border-bottom ">
                <div class="d-flex gap-3">
                  <img src="./assets/images/avatar/avatar-4.jpg" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New user registered</p>
                    <p class="mb-1">User @john_doe has signed up</p>
                    <div class="text-secondary">30 minutes ago</div>
                  </div>
              </li>

              <li class="p-3 border-bottom">
                <div class="d-flex gap-3">
                  <img src="./assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">Payment confirmed</p>
                    <p class="mb-1">Payment of $299 has been received</p>
                    <div class="text-secondary">1 hour ago</div>
                  </div>
                </div>
              </li>
              <li class="px-4 py-3 text-center">
                <a href="#" class="text-primary ">View all notifications</a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Dropdown -->
        <li class="ms-3 dropdown">
          <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-sm rounded-circle" />
          </a>
          <div class="dropdown-menu dropdown-menu-end p-0" style="min-width: 200px;">
            <div>
              <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-3 py-3">
                <img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle" />
                <div>
                  <h4 class="mb-0 small">Shrina Tesla</h4>
                  <p class="mb-0  small">@imshrina</p>
                </div>
              </div>
              <div class="p-3 d-flex flex-column gap-1 small lh-lg">
                <a href="#!" class="">

                  <span>Home</span>
                </a>
                <a href="#!" class="">

                  <span> Inbox</span>
                </a>
                <a href="#!" class="">

                  <span> Chat</span>
                </a>
                <a href="#!" class="">

                  <span> Activity</span>
                </a>
                <a href="#!" class="">

                  <span> Account Settings</span>
                </a>
              </div>

            </div>
          </div>
        </li>
      </ul>
    </div>

  </nav>

  <!-- SIDEBAR -->
  <aside id="sidebar" class="sidebar">
    <div class="logo-area">
     <a href="index.html" class="d-inline-flex"><img src="./assets/images/logo-icon.svg" alt="" width="24">
        <span class="logo-text ms-2"> <img src="./assets/images/logo.svg" alt=""></span>
      </a>
    </div>
    <ul class="nav flex-column">
      <li class="px-4 py-2"><small class="nav-text">Main</small></li>
      <li><a class="nav-link active" href="index.html"><i class="ti ti-home"></i><span
            class="nav-text">Dashboard</span></a></li>
      <li><a class="nav-link" href="inventory.html"><i class="ti ti-box-seam"></i><span
            class="nav-text">Plot Management</span></a></li>
      <li><a class="nav-link" href="create-product.html"><i class="ti ti-plus"></i><span class="nav-text">
            Occupied Plot</span></a></li>
    <li><a class="nav-link" href="reports.html"><i class="ti ti-receipt"></i><span class="nav-text">Available Plot</span></a>
      </li>
    <li><a class="nav-link" href="404-error.html"><i class="ti ti-alert-circle"></i><span class="nav-text">Burial Records</span></a>
      </li>
      <li><a class="nav-link" href="docs.html"><i class="ti ti-file-text"></i><span class="nav-text">Reports</span></a></li>
      <li><a class="nav-link" href="settings.html"><i class="ti ti-file-text"></i><span class="nav-text">Settings</span></a></li>


     
    </ul>

  </aside>
  <!-- MAIN CONTENT -->
 <main id="content" class="content py-10">
    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Occupied Plots</h2>
                <p class="text-secondary mb-0">
                    Browse all occupied cemetery plots and view deceased records.
                </p>
            </div>

            <div class="d-flex gap-2">
                <input type="text"
                       class="form-control"
                       placeholder="Search deceased or plot no..."
                       style="width:280px;">
            </div>
        </div>

        <!-- Filters -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <div class="row g-3">

                    <div class="col-lg-3">
                        <select class="form-select">
                            <option>All Sections</option>
                            <option>Section A</option>
                            <option>Section B</option>
                            <option>Section C</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <select class="form-select">
                            <option>Plot Type</option>
                            <option>Lawn Lot</option>
                            <option>Family Lot</option>
                            <option>Mausoleum</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-lg-3">
                        <button class="btn btn-primary w-100">
                            Filter
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Occupied Plot Cards -->
        <div class="row g-4">

            <!-- Card -->
            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body">

                        <div class="d-flex justify-content-between">

                            <div>
                                <span class="badge bg-danger">
                                    Occupied
                                </span>
                            </div>

                            <span class="text-secondary">
                                A-001
                            </span>

                        </div>

                        <div class="text-center mt-4">

                            <div class="rounded-circle bg-light d-inline-flex justify-content-center align-items-center"
                                 style="width:80px;height:80px;">

                                <i class="ti ti-user fs-1 text-secondary"></i>

                            </div>

                            <h5 class="mt-3 mb-1">
                                Juan Dela Cruz
                            </h5>

                            <small class="text-secondary">
                                Section A • Lawn Lot
                            </small>

                        </div>

                        <hr>

                        <div class="small">

                            <div class="d-flex justify-content-between mb-2">
                                <span>Burial Date</span>
                                <strong>Mar 12, 2023</strong>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span>Age</span>
                                <strong>74 Years</strong>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer bg-white border-0">

                        <button class="btn btn-success w-100"
                                data-bs-toggle="modal"
                                data-bs-target="#deceasedModal">

                            View Deceased Information

                        </button>

                    </div>

                </div>

            </div>

            <!-- Duplicate cards -->
            <!-- Repeat this card for every occupied plot -->

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade"
         id="deceasedModal"
         tabindex="-1">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Deceased Information
                    </h5>

                    <button class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-4 text-center">

                            <div class="rounded-circle bg-light d-inline-flex justify-content-center align-items-center"
                                 style="width:130px;height:130px;">

                                <i class="ti ti-user fs-1"></i>

                            </div>

                        </div>

                        <div class="col-md-8">

                            <table class="table table-borderless">

                                <tr>
                                    <th width="180">Full Name</th>
                                    <td>Juan Dela Cruz</td>
                                </tr>

                                <tr>
                                    <th>Date of Birth</th>
                                    <td>January 12, 1949</td>
                                </tr>

                                <tr>
                                    <th>Date of Death</th>
                                    <td>March 9, 2023</td>
                                </tr>

                                <tr>
                                    <th>Burial Date</th>
                                    <td>March 12, 2023</td>
                                </tr>

                                <tr>
                                    <th>Age</th>
                                    <td>74 Years</td>
                                </tr>

                                <tr>
                                    <th>Cause of Death</th>
                                    <td>Natural Causes</td>
                                </tr>

                                <tr>
                                    <th>Plot Number</th>
                                    <td>A-001</td>
                                </tr>

                                <tr>
                                    <th>Section</th>
                                    <td>Section A</td>
                                </tr>

                                <tr>
                                    <th>Plot Type</th>
                                    <td>Lawn Lot</td>
                                </tr>

                                <tr>
                                    <th>Next of Kin</th>
                                    <td>Maria Dela Cruz</td>
                                </tr>

                            </table>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Close
                    </button>

                    <button class="btn btn-primary">
                        View Complete Record
                    </button>

                </div>

            </div>

        </div>

    </div>

</main>

  <!-- Bootstrap JS -->
  <script src="./assets/js/main.js" type="module"></script>



</body>

</html>