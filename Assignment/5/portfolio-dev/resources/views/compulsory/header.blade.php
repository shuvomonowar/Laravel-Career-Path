<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <nav class="flex justify-between bg-blue-950 text-white py-2">
            <div class="flex items-center ml-16 gap-[0.7vw]">
                <a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt="logo" class="object-scale-down h-[2rem] w-[2rem]"></a>
                <a href="/">ShuvoMonowar</a>
            </div>
            <div class="mt-0.5">
                <ul class="flex items-center gap-[4vw] mr-[7rem]">
                    <li>
                        <a href="/" class="hover:text-green-300">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('work') }}" class="hover:text-green-300">Work Experience</a>
                    </li>
                    <li>
                        <a href="{{ url('project') }}" class="hover:text-green-300">Projects</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
