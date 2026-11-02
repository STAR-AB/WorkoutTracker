<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    form to create a new workout
    <form action="{{ route('workouts.store') }}" method="POST">
        @csrf
        <label for="name">Workout Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Workout</button>
    </form>
</body>
</html>