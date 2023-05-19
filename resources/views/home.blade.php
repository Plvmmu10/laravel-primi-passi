<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: blue;
            color: white;
        }

        ul {
            display: flex;
            justify-content: space-between;
            list-style-type: none;
        }

        li {
            text-transform: uppercase;
            font-size: 30px;
            padding: 0 2rem;
        }

        a {
            text-decoration: none;
            color: white;
        }

        main {
            text-align: center;
        }
    </style>
</head>

<body class="antialiased">
    <header>
        <div class="navbar">
            <div>
                <h1>Homepage</h1>
            </div>


            <div>
                <ul>
                    <li>
                        <a href="{{ 'ita' }}">it</a>
                    </li>
                    <li><a href="{{ 'esp' }}">es</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <h1>{{ $title }}</h1>
    </main>
</body>

</html>
