@props(['title' => 'Workout Tracker'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>{{ $title }}</title>
</head>
<body>
    <main>
        <x-header>
        </x-header>
    {{ $slot }}
    </main>
</body>
</html>