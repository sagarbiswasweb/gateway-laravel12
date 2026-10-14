<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">

<!-- In <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>
<body>

<!-- Sidebar -->
<nav class="sidebar" id="sidebar">
    <h4>Admin Panel</h4>
    <a href="{{ route('admin.dashboard') }}" class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a>
    {{-- <a href="#"><i class="bi bi-people"></i><span>Users</span></a> --}}
    <a href="{{ route('admin.messages') }}" class="{{ Request::routeIs('admin.messages') ? 'active' : '' }}"><i class="bi bi-envelope"></i><span>Messages</span></a>
    {{-- <a href="#"><i class="bi bi-card-checklist"></i><span>Services</span></a> --}}
    {{-- <a href="#"><i class="bi bi-basket3"></i><span>Orders</span></a> --}}
    {{-- <a href="#"><i class="bi bi-graph-up"></i><span>Reports</span></a> --}}
    {{-- <a href="#"><i class="bi bi-gear"></i><span>Settings</span></a> --}}
</nav>

<!-- Main Content -->
<div class="content" id="content">

    <!-- Header -->
    <div class="header">
        <div class="toggle-btn" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </div>
        <div class="dropdown">
            <a class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- <img src="https://via.placeholder.com/35" alt="Admin" class="rounded-circle me-2"> --}}
                <span>{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    {{-- <form action="#">
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form> --}}
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>