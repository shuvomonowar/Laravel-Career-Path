<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-black">
        <div class="flex mx-[30rem] space-x-12">
            <div class="text-white mt-20">
                <h1 class="text-md">{{ 'Contact with me -' }}</h1>
                <h1 class="text-xl">{{ 'monowarhossain41998@gmail.com' }}</h1>
            </div>
            <div>
                <img src="{{ asset('images/footer/footer-logo.png') }}" alt="{{ 'footer logo' }}" class="h-[14rem] w-[24rem]">
            </div>
        </div>
        <div class="text-white">
            <p class="text-center">{{ 'Thank you for visiting my portfolio :)' }}</p>
        </div>
        <br>
    </div>
</body>
</html>
