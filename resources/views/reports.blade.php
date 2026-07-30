<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Documentation - InApp Inventory Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('./assets/images/favicon_io/apple-touch-icon.png') }}">
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
                  <img src="{{ asset ('./assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New order received</p>
                    <p class="mb-1">Order #12345 has been placed</p>
                    <div class="text-secondary">5 minutes ago</div>
                  </div>
                </div>
              </li>
              <li class="p-3 border-bottom ">
                <div class="d-flex gap-3">
                  <img src="{{ asset ('./assets/images/avatar/avatar-4.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
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
                <h2 class="fw-bold mb-1">Reports</h2>
                <p class="text-muted mb-0">
                    Generate and download cemetery management reports.
                </p>
            </div>

            <button class="btn btn-success">
                <i class="ti ti-download me-2"></i>
                Download All Reports
            </button>
        </div>

        <!-- Statistics -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small class="text-muted">Total Plots</small>
                                <h3 class="fw-bold mb-0">1,250</h3>
                            </div>
                            <div class="icon-shape bg-primary text-white rounded">
                                <i class="ti ti-map-pin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small class="text-muted">Occupied</small>
                                <h3 class="fw-bold mb-0">950</h3>
                            </div>
                            <div class="icon-shape bg-danger text-white rounded">
                                <i class="ti ti-cross"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small class="text-muted">Available</small>
                                <h3 class="fw-bold mb-0">300</h3>
                            </div>
                            <div class="icon-shape bg-success text-white rounded">
                                <i class="ti ti-circle-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small class="text-muted">Burials This Year</small>
                                <h3 class="fw-bold mb-0">87</h3>
                            </div>
                            <div class="icon-shape bg-warning text-white rounded">
                                <i class="ti ti-calendar-event"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Generate Report -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">Generate Report</h5>
            </div>

            <div class="card-body">

                <div class="row g-3">

                    <div class="col-lg-3">
                        <label class="form-label">Report Type</label>
                        <select class="form-select">
                            <option>Burial Records</option>
                            <option>Available Plots</option>
                            <option>Occupied Plots</option>
                            <option>Monthly Burials</option>
                            <option>Annual Report</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label class="form-label">Section</label>
                        <select class="form-select">
                            <option>All</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label class="form-label">From</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-lg-2">
                        <label class="form-label">To</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-lg-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="ti ti-file-download me-2"></i>
                            Generate Report
                        </button>
                    </div>

                </div>

            </div>
        </div>

        <!-- Downloadable Reports -->
        <div class="row g-4 mb-4">

            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="ti ti-users fs-1 text-primary"></i>
                        <h5 class="mt-3">Burial Records</h5>
                        <p class="text-muted">
                            Complete list of deceased persons.
                        </p>

                        <button class="btn btn-primary">
                            <i class="ti ti-download me-2"></i>
                            Download PDF
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="ti ti-map-pin fs-1 text-success"></i>
                        <h5 class="mt-3">Available Plots</h5>
                        <p class="text-muted">
                            Current available cemetery plots.
                        </p>

                        <button class="btn btn-success">
                            <i class="ti ti-download me-2"></i>
                            Download Excel
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="ti ti-file-analytics fs-1 text-danger"></i>
                        <h5 class="mt-3">Occupancy Report</h5>
                        <p class="text-muted">
                            Summary of occupied and vacant plots.
                        </p>

                        <button class="btn btn-danger">
                            <i class="ti ti-download me-2"></i>
                            Download PDF
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Recent Downloads -->
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white">
                <h5 class="mb-0">Recent Generated Reports</h5>
            </div>

            <div class="table-responsive">

                <table class="table align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Report Name</th>
                            <th>Generated By</th>
                            <th>Date</th>
                            <th>Format</th>
                            <th width="120">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Burial Records Report</td>
                            <td>Administrator</td>
                            <td>June 12, 2026</td>
                            <td><span class="badge bg-danger">PDF</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ti ti-download"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Available Plots</td>
                            <td>Administrator</td>
                            <td>June 10, 2026</td>
                            <td><span class="badge bg-success">Excel</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ti ti-download"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Annual Cemetery Report</td>
                            <td>Administrator</td>
                            <td>June 05, 2026</td>
                            <td><span class="badge bg-primary">PDF</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="ti ti-download"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</main>
  <!-- Bootstrap JS -->
  <script src="{{ asset ('./assets/js/main.js') }}" type="module"></script>
  

@vite(['resources/js/app.js'])

</body>

</html>