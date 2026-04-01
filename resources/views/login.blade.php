<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTIS</title>
    @vite('resources/css/app.css')

</head>

<body>

</body>
<h1 class="text-red-500">hello</h1>

<a href="/home">Home</a>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="bg-light border-end" style="width: 260px; min-height: 100vh;">

        <!-- Logo -->
        <div class="text-center p-3">
            {{-- <img src="/logo.png" class="img-fluid" style="max-height: 80px;"> --}}
            <h6 class="mt-2">PATIENT SYSTEM</h6>
        </div>

        <!-- Search -->
        <div class="p-3">
            <input type="text" class="form-control" placeholder="Search menu...">
        </div>

        <!-- Menu -->
        <ul class="list-group list-group-flush">

            <li class="list-group-item">
                <i class="bi bi-grid"></i> Dashboard
            </li>

            <!-- Timesheets (collapsible) -->
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#timesheetsMenu"
                    class="text-decoration-none d-flex justify-content-between">
                    <span><i class="bi bi-clock"></i> Timesheets</span>
                    <span>›</span>
                </a>

                <div class="collapse mt-2" id="timesheetsMenu">
                    <ul class="list-group">
                        <li class="list-group-item">Daily Logs</li>
                        <li class="list-group-item">Reports</li>
                    </ul>
                </div>
            </li>

            <!-- Employees -->
            <li class="list-group-item">
                <a data-bs-toggle="collapse" href="#employeeMenu"
                    class="text-decoration-none d-flex justify-content-between">
                    <span><i class="bi bi-people"></i> Employees</span>
                    <span>›</span>
                </a>

                <div class="collapse mt-2" id="employeeMenu">

                    <!-- Approval -->
                    <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary">👍 Approval</span>
                            <span class="badge bg-danger">2</span>
                        </div>

                        <ul class="list-unstyled mt-2 ms-3">
                            <li class="mb-2 text-primary">
                                Overtime/Undertime/Work on holiday...
                                <span class="badge bg-warning text-dark">1</span>
                            </li>
                            <li>
                                Leave Application
                                <span class="badge bg-warning text-dark">1</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </li>

            <li class="list-group-item">
                <i class="bi bi-person"></i> Users
            </li>

            <li class="list-group-item">
                <i class="bi bi-clock-history"></i> Audit Logs
            </li>

            <li class="list-group-item">
                <i class="bi bi-info-circle"></i> Status Report
            </li>

        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>


    <ul class="list-group">
        <li class="list-group-item"><span class="text-red-500">An item</span></li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
    </ul>

</div>

</html>
