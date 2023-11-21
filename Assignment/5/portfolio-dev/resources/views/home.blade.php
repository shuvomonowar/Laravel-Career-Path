<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    <script src="{{ asset('js/resume_download.js') }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="sticky top-0">
        @include('./compulsory/header')
    </div>
    <div class="inline-block mt-20 mx-[20rem]">
        <h1 class="font-bold text-2xl">{{ "Hi, I'm Monowar Hossain Shuvo." }}</h1>
        <h1 class="text-lg text-justify">{{ "A highly motivated computer science student with a passion for developing innovative and user-friendly applications. Currently, seeking an internship or full-time job in a dynamic and fast-paced environment where I can use my skills to learn and grow as a software engineer." }}</h1>
        <h1 class="inline text-lg font-bold">{{ "Interested in -" }}</h1>
        <h1 class="inline text-lg">{{ "Software Engineering, Software Development, DevOps & MLOps" }}</h1>
    </div>
    <br><br>
    <div class="mx-[20rem]">
        <button type="button" class="bg-blue-950 text-white p-2.5 border-solid rounded-md hover:bg-green-950 hover:border-none hover:ring-2 hover:ring-blue-600" onclick="downloadResume()">{{ 'Download Resume' }}</button>
    </div>
    <br><br>
    <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    <br><br><br><br>
    <div class="mx-[20rem] text-4xl underline">
        <h1>{{ 'EDUCATION' }}</h1>
    </div>
    <br><br>
    <div class="mx-[20rem] flex flex-row space-x-10 shadow-2xl pl-7 py-5 rounded-lg">
        <div>
            <br>
            <img src="{{ asset('images/education/AIUB-Logo.png') }}" alt="{{ 'school logo' }}" class="h-[4rem] w-[4rem]">
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ 'American International University-Bangladesh' }}</h1>
            <p class="text-lg font-bold">{{ 'Bachelor of Science in Computer Science and Engineering' }}</p>
            <p class="text-lg">{{ 'January, 2020 - Present' }}</p>
            <p class="text-lg">{{ 'Dhaka, Bangladesh' }}</p>
        </div>
    </div>
    <br><br>
    <div class="mx-[20rem] flex flex-row space-x-10 shadow-2xl pl-7 py-5 rounded-lg">
        <div>
            <br>
            <img src="{{ asset('images/education/CPSCM-Logo.png') }}" alt="{{ 'school logo' }}" class="h-[4rem] w-[4rem]">
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ 'Cantonment Public School and College, Mymensingh' }}</h1>
            <p class="text-lg font-bold">{{ 'Higher Secondary School' }}</p>
            <p class="text-lg">{{ 'July, 2016 - August, 2018' }}</p>
            <p class="text-lg">{{ 'Mymensingh, Bangladesh' }}</p>
        </div>
    </div>
    <br><br>
    <div class="mx-[19.2rem] flex flex-row space-x-7 shadow-2xl pl-7 py-5 rounded-lg">
        <div>
            <br>
            <img src="{{ asset('images/education/NGPHS-Logo.png') }}" alt="{{ 'school logo' }}" class="h-[5rem] w-[5.5rem]">
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ 'Nakla Govt. Pilot High School' }}</h1>
            <p class="text-lg font-bold">{{ 'Secondary School' }}</p>
            <p class="text-lg">{{ 'January, 2011 - May, 2016' }}</p>
            <p class="text-lg">{{ 'Nakla, Sherpur, Bangladesh' }}</p>
        </div>
    </div>
    <br><br><br>
    <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    <br><br><br><br>
    <div class="mx-[20rem]">
        <h1 class="underline text-4xl">{{ 'SKILLS' }}</h1>
        <br>
        <p class="text-lg py-2.5"><span class="text-red-900">{{ 'Programming Languages:' }}</span><span class="font-bold pl-3">{{  'C++ | Java | C# | PHP | JavaScript | Python' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-red-900">{{ 'Frontend Technologies:' }}</span><span class="font-bold pl-3">{{  'HTML5 | CSS3 | Tailwind CSS | Laravel Blade Templates | Vue.js' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-red-900">{{ 'Backend Technologies:' }}</span><span class="font-bold pl-3">{{  'Laravel | Spring MVC' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-red-900">{{ 'Databases:' }}</span><span class="font-bold pl-3">{{  'MySQL | Microsoft SQL Server' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-red-900">{{ 'Cloud Computing:' }}</span><span class="font-bold pl-3">{{  'Amazon Web Services (AWS)' }}</span></p>
        <p class="text-lg py-2.5"><span class="text-red-900">{{ 'Dev Tools:' }}</span><span class="font-bold pl-3">{{  'Git | GitHub | Docker | Postman | VS Code | PhpStorm | MS Teams' }}</span></p>
    </div>
    <br><br>
    <hr class="h-0.5 bg-gray-300 mx-[20rem]">
    <br><br><br><br><br><br><br>
    <div>
        @include('./compulsory/footer')
    </div>
</body>
</html>
