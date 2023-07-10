<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased">
    <h1>
        Hello, world from {{ $name }} {{ $surname }}!
    </h1>
    <h2>
        Points:
        @if ($points > 0)
            {{ $points }}
        @else
            No points
        @endif
    </h2>

    <nav>
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="#">
                        {{ $link }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    <ul>

        <li>
            <a href="
            {{ url('/') }}
            ">
                {{ $links[0] }}
            </a>
        </li>
        <li>
            <a href="
            {{ URL::to('/about') }}
            ">
                {{ $links[1] }}
            </a>
        </li>
        <li>
            <a href="
            {{ URL::to('/contact') }}
            ">
                {{ $links[2] }}
            </a>
        </li>

    </ul>

</body>

</html>
