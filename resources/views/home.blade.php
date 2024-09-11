
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="navbar-brand" href="{{ url('/items') }}">Items</a>
        <a class="navbar-brand" href="{{ url('/pics') }}">Pictures</a>
    </nav>
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <h2>Hey</h2>
    </div>
</body>
</html>
