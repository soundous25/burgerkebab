<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BURGER KEBAB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

    body{
        background-color:#F3F4F6;
    }

    .navbar-custom{
        background-color:#111827;
        padding:20px;
        border-bottom:3px solid #EF4444;
    }

    .navbar-custom h2{
        color:#FFFFFF;
        margin:0;
    }

    .page-title{
        color:#DC2626;
        font-weight:bold;
    }

    .card-custom{
        background:#FFFFFF;
        padding:25px;
        border-radius:12px;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    .table-dark-custom{
        background:#111827;
        color:#FFFFFF;
    }

    .btn-add{
        background:#DC2626;
        color:#FFFFFF;
        border:none;
    }

    .btn-add:hover{
        background:#B91C1C;
        color:#FFFFFF;
    }

    .btn-save{
        background:#2563EB;
        color:#FFFFFF;
        border:none;
    }

    .btn-save:hover{
        background:#1D4ED8;
        color:#FFFFFF;
    }

    .btn-edit{
        background:#F59E0B;
        color:#FFFFFF;
        border:none;
    }

    .btn-edit:hover{
        background:#D97706;
        color:#FFFFFF;
    }

    .btn-delete{
        background:#DC2626;
        color:#FFFFFF;
        border:none;
    }

    .btn-delete:hover{
        background:#B91C1C;
        color:#FFFFFF;
    }

    .status-active{
        background:#DCFCE7;
        color:#2E7D32;
        padding:5px 10px;
        border-radius:20px;
    }

    .status-inactive{
        background:#FEE2E2;
        color:#C62828;
        padding:5px 10px;
        border-radius:20px;       
    }

    .page-item.active .page-link{
       background-color:#F4A300; 
       border-color:#F4A300;
       color:white;
    }

    .page-link{
      color:#F4A300;
    }

    .page-link:hover{
      color:#D97706;
    }
</style>
</head>
<body>

<div class="navbar-custom">
    <h2>🍔 BURGER KEBAB - Gestion des catégories</h2>
</div>

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-custom">
        @yield('content')
    </div>

</div>

</body>
</html>