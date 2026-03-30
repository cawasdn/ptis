<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTIS | Home</title>
</head>

<body>
    <h2>Home</h2>
    <p>{{ $greetings }}</p>

    @if ($greetings == 'hello')
        <p>hello from if statement</p>
    @endif

    <ul>
        @foreach ($hi as $patient)
            <li>
                <p>{{ $patient['firstname'] }}</p>
                <a href="/home/{{ $patient['id'] }}">View Details</a>
            </li>
        @endforeach
    </ul>

    {{-- <ul>
        <li>
            <a href="/home/{{ $hi[0]['id'] }}">{{ $hi[0]['firstname'] }}</a>
        </li>
        <li>
            <a href="/home/{{ $hi[1]['id'] }}">{{ $hi[1]['birthday'] }}</a>
        </li>
    </ul> --}}
</body>

</html>
