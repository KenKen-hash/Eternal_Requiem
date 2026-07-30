<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>InApp Inventory Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('./assets/images/favicon_io/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('./assets/images/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('./assets/images/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset ('./assets/images/favicon_io/site.webmanifest') }}">

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
                  <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New order received</p>
                    <p class="mb-1">Order #12345 has been placed</p>
                    <div class="text-secondary">5 minutes ago</div>
                  </div>
                </div>
              </li>
              <li class="p-3 border-bottom ">
                <div class="d-flex gap-3">
                  <img src="{{  asset ('./assets/images/avatar/avatar-4.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New user registered</p>
                    <p class="mb-1">User @john_doe has signed up</p>
                    <div class="text-secondary">30 minutes ago</div>
                  </div>
              </li>

              <li class="p-3 border-bottom">
                <div class="d-flex gap-3">
                  <img src="{{ asset ('./assets/images/avatar/avatar-2.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
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
            <img src="{{ asset ('./assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
          </a>
          <div class="dropdown-menu dropdown-menu-end p-0" style="min-width: 200px;">
            <div>
              <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-3 py-3">
                <img src="{{ asset ('./assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
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
     <a href="index.html" class="d-inline-flex"><img src="{{ asset ('./assets/images/logo-icon.svg') }}" alt="" width="24">
        <span class="logo-text ms-2"> <img src="{{ asset ('./assets/images/logo.svg') }}" alt=""></span>
      </a>
    </div>
    
    <ul class="nav flex-column">
      <li class="px-4 py-2"><small class="nav-text">Main</small></li>
      <li><a class="nav-link active" href="{{ route ('dashboard') }}"><i class="ti ti-home"></i><span
            class="nav-text">Dashboard</span></a></li>
      <li><a class="nav-link" href="{{ route ('plot-management') }}"><i class="ti ti-box-seam"></i><span
            class="nav-text">Plot Management</span></a></li>
      <li><a class="nav-link" href="{{ route ('occupied-plot') }}"><i class="ti ti-plus"></i><span class="nav-text">
            Occupied Plot</span></a></li>
    <li><a class="nav-link" href="{{ route ('available-plot') }}"><i class="ti ti-receipt"></i><span class="nav-text">Available Plot</span></a>
      </li>
    <li><a class="nav-link" href="{{ route ('burial-records') }}"><i class="ti ti-alert-circle"></i><span class="nav-text">Burial Records</span></a>
      </li>
      <li><a class="nav-link" href="{{ route ('reports') }}"><i class="ti ti-file-text"></i><span class="nav-text">Reports</span></a></li>
      <li><a class="nav-link" href="{{ route ('settings') }}"><i class="ti ti-file-text"></i><span class="nav-text">Settings</span></a></li>


     
    </ul>

  </aside>

  <!-- MAIN CONTENT -->
 <main id="content" class="content py-10">
    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Administrator Dashboard</h2>
                <p class="text-muted">
                    Welcome back! Here's an overview of the cemetery management system.
                </p>
            </div>

            <button class="btn btn-primary">
                <i class="ti ti-plus me-2"></i>Add Burial Record
            </button>
        </div>

        <!-- Statistics -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Total Cemetery Plots</small>
                            <h2 class="fw-bold mb-0">1,250</h2>
                        </div>
                        <div class="icon-shape bg-primary text-white rounded">
                            <i class="ti ti-map-pin fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Occupied Plots</small>
                            <h2 class="fw-bold mb-0">948</h2>
                        </div>
                        <div class="icon-shape bg-danger text-white rounded">
                            <i class="ti ti-cross fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Available Plots</small>
                            <h2 class="fw-bold mb-0">302</h2>
                        </div>
                        <div class="icon-shape bg-success text-white rounded">
                            <i class="ti ti-circle-check fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">Burials This Month</small>
                            <h2 class="fw-bold mb-0">18</h2>
                        </div>
                        <div class="icon-shape bg-warning text-white rounded">
                            <i class="ti ti-calendar-event fs-3"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Quick Actions -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="ti ti-map-pin-plus fs-1 text-primary mb-3"></i>
                        <h5>Manage Plots</h5>
                        <p class="text-muted small">
                            Add, edit or update cemetery plots.
                        </p>
                        <a href="inventory.html" class="btn btn-outline-primary btn-sm">
                            Open
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="ti ti-users fs-1 text-danger mb-3"></i>
                        <h5>Burial Records</h5>
                        <p class="text-muted small">
                            View deceased information and burial history.
                        </p>
                        <a href="404-error.html" class="btn btn-outline-danger btn-sm">
                            View Records
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="ti ti-report fs-1 text-success mb-3"></i>
                        <h5>Reports</h5>
                        <p class="text-muted small">
                            Generate cemetery reports and statistics.
                        </p>
                        <a href="docs.html" class="btn btn-outline-success btn-sm">
                            Generate
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <i class="ti ti-settings fs-1 text-warning mb-3"></i>
                        <h5>Settings</h5>
                        <p class="text-muted small">
                            Configure administrator account and preferences.
                        </p>
                        <a href="settings.html" class="btn btn-outline-warning btn-sm">
                            Settings
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <!-- Recent Burials -->
            <div class="col-lg-8 mb-4">

                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Recent Burial Records</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">

                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Plot</th>
                                    <th>Section</th>
                                    <th>Date of Burial</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>Juan Dela Cruz</td>
                                    <td>A-015</td>
                                    <td>Section A</td>
                                    <td>June 15, 2026</td>
                                    <td><span class="badge bg-success">Recorded</span></td>
                                </tr>

                                <tr>
                                    <td>Maria Santos</td>
                                    <td>B-042</td>
                                    <td>Section B</td>
                                    <td>June 14, 2026</td>
                                    <td><span class="badge bg-success">Recorded</span></td>
                                </tr>

                                <tr>
                                    <td>Pedro Reyes</td>
                                    <td>C-018</td>
                                    <td>Section C</td>
                                    <td>June 12, 2026</td>
                                    <td><span class="badge bg-success">Recorded</span></td>
                                </tr>

                                <tr>
                                    <td>Ana Garcia</td>
                                    <td>D-009</td>
                                    <td>Section D</td>
                                    <td>June 11, 2026</td>
                                    <td><span class="badge bg-success">Recorded</span></td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

            <!-- Activity -->
            <div class="col-lg-4">

                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Recent Activity</h5>
                    </div>

                    <div class="list-group list-group-flush">

                        <div class="list-group-item">
                            <strong>New burial record added</strong>
                            <br>
                            <small class="text-muted">10 minutes ago</small>
                        </div>

                        <div class="list-group-item">
                            <strong>Plot B-021 marked occupied</strong>
                            <br>
                            <small class="text-muted">35 minutes ago</small>
                        </div>

                        <div class="list-group-item">
                            <strong>Monthly report generated</strong>
                            <br>
                            <small class="text-muted">Today, 9:15 AM</small>
                        </div>

                        <div class="list-group-item">
                            <strong>Administrator logged in</strong>
                            <br>
                            <small class="text-muted">Today, 8:00 AM</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</main>

  <!-- Bootstrap JS -->
  @vite(['resources/js/app.js'])



</body>

</html>