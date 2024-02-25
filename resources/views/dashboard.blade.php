<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <div>
        <h2>Total Number of Unique Visitors: {{ $totalVisitors }}</h2>
    </div>

    <div>
        <h2>Total Number of Visitors for Each Stage</h2>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Stage</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totalVisitorEachStage as $visitorStage)
                <tr><td>{{ $visitorStage->stage }}</td>
                    <td>{{ $visitorStage->total }}</td>
                </tr>
                @endforeach
        </tbody>

    </table>
    </div>
</body>
</html>
