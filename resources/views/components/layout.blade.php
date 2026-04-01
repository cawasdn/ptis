<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaTient Information System</title>
    @vite('resources/css/app.css')

</head>

<body>
    <header>
        <nav>
            <h1>Patients
                <a href="/home">All Patients</a>
                <a href="/home/new">New Patient</a>
            </h1>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>

</body>

</html>
