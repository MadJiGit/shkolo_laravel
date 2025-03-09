<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHKOLO-L</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>

<div class="header">SHKOLO</div>

@if ($errors->any())
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<main>
    <div id="confirmModal" class="modal">
        <div class="modal-content">
            <p id="confirmMessage">Are you sure you want to delete this button?</p>
            <button id="confirmYes" class="confirm-btn">Yes</button>
            <button id="confirmNo" class="cancel-btn">No</button>
        </div>
    </div>

    @yield('content')
</main>

<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
