<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>list of workouts</h2>
        <table>
            <thead>
                <th>id_user</th><th>name</th><th>date</th><th>created_at</th><th>updated_at</th>
            </thead>
            @foreach ($workouts as $workout )
                <tr>
                    <td>$workout->id_user</td>
                    <td>$workout->name</td>
                    <td>$workout->date</td>
                    <td>$workout->created_at</td>
                    <td>$workout->updated_at</td>
                </tr>
            @endforeach

        </table>
</body>
</html>