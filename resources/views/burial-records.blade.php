<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>404 Error - InApp Inventory Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('./assets/images/favicon_io/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('./assets/images/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('./assets/images/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset ('./assets/images/favicon_io/site.webmanifest') }}">

</head>

<body>

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

        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-1">Deceased Records</h2>
                <p class="text-secondary mb-0">
                    View and manage all deceased individuals buried in the cemetery.
                </p>
            </div>

            <button class="btn btn-primary">
                <i class="ti ti-download me-2"></i>
                Export Records
            </button>

        </div>

        <!-- Search & Filters -->
        <div class="card shadow-sm border-0 mb-4">

            <div class="card-body">

                <div class="row g-3">

                    <div class="col-lg-5">
                        <input type="text"
                               class="form-control"
                               placeholder="Search deceased name...">
                    </div>

                    <div class="col-lg-3">
                        <select class="form-select">
                            <option>All Sections</option>
                            <option>Section A</option>
                            <option>Section B</option>
                            <option>Section C</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-lg-2">
                        <button class="btn btn-success w-100">
                            Search
                        </button>
                    </div>

                </div>

            </div>

        </div>

        <!-- Records Table -->

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white py-3">

                <h5 class="mb-0">
                    Deceased List
                </h5>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th>Record ID</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Plot No.</th>
                            <th>Section</th>
                            <th>Burial Date</th>
                            <th>Status</th>
                            <th width="120">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>#0001</td>
                            <td>Juan Dela Cruz</td>
                            <td>74</td>
                            <td>Male</td>
                            <td>A-001</td>
                            <td>Section A</td>
                            <td>March 12, 2023</td>

                            <td>
                                <span class="badge bg-success">
                                    Buried
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deceasedModal">

                                    View

                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>#0002</td>
                            <td>Maria Santos</td>
                            <td>68</td>
                            <td>Female</td>
                            <td>B-012</td>
                            <td>Section B</td>
                            <td>January 18, 2022</td>

                            <td>
                                <span class="badge bg-success">
                                    Buried
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deceasedModal">

                                    View

                                </button>

                            </td>

                        </tr>

                        <!-- Add more rows -->

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>

<!-- View Information Modal -->

<div class="modal fade" id="deceasedModal">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Deceased Information
                </h5>

                <button class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-4 text-center">

                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center"
                             style="width:120px;height:120px;">

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
                                <th>Age</th>
                                <td>74 Years Old</td>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <td>Male</td>
                            </tr>

                            <tr>
                                <th>Civil Status</th>
                                <td>Married</td>
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
                                <th>Burial Date</th>
                                <td>March 12, 2023</td>
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
                    Print Record
                </button>

            </div>

        </div>

    </div>

</div>

  <!-- Bootstrap JS -->
  <script src="{{ asset ('./assets/js/main.js') }}" type="module"></script>

 @vite(['resources/js/app.js'])
</body>

</html>""