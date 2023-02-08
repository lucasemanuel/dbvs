<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="py-6">
        <h1 class="mb-1 text-center text-5xl font-bold text-orange-500">
            dbvs.com
        </h1>
        <nav>
            <ul class="flex justify-center space-x-4 text-lg text-gray-600">
                <li class="inline"><a href="#">Classe</a></li>
                <li class="inline"><a href="#">Especialidade</a></li>
            </ul>
        </nav>
    </header>
    <main class="max-w-screen-md mx-auto px-6 container">
        @foreach ($posts as $post)
            <a href="#" class="block bg-white border-2 rounded-lg shadow-md p-4 mb-8">
                <div class="overflow-hidden h-52 sm:h-64 md:h-80 rounded-md mb-2">
                    <img class="w-full h-52 sm:h-64 md:h-80 bg-cover object-cover object-center"
                        src="https://cdn.pixabay.com/photo/2023/01/08/02/24/landscape-7704393_960_720.jpg"
                        alt="">
                </div>
                <h1 class="text-2xl font-bold mb-2 text-gray-800">{{ $post->title }}</h1>
                <p class="line-clamp-2 text-md text-gray-600">
                    {{ $post->content }}
                </p>
            </a>
        @endforeach
    </main>
</body>

</html>
