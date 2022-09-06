<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <!-- head items for all pages -->
    <meta charset="utf-8">
    <title>Game store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<section class="text-gray-600 body-font">
    <div class="container px-4 py-20  mx-auto">
        <div class="flex flex-wrap w-full mb-8">
            <div class="w-full mb-6 lg:mb-0 w-1/2">
                <h1 class="sm:text-4xl text-5xl font-bold font-medium title-font mb-2">Streem Store</h1>
                <div class="h-1.5 w-40 bg-blue rounded"></div>
            </div>
            <div class="w-1/2 float-right">
                <div class="w-full mb-6 lg:mb-0 w-max float-right p-2 ">
                    <x-heroicon-s-user-circle style="width: 3rem;" class="p-2"/>
                    <div class="h-1.5 w-full bg-red rounded float-right"></div>
                </div>
                <div class="w-full mb-6 lg:mb-0 w-max float-right p-2 ">
                    <x-heroicon-s-shopping-cart style="width: 3rem;" class="p-2"/>
                    <div class="h-1.5 w-full bg-red rounded float-right"></div>
                </div>
                <div class="w-full mb-6 lg:mb-0 w-max float-right p-2">
                    <h2 class="text-2xl font-bold font-medium title-font p-2 text-right">Store</h2>
                    <div class="h-1.5 w-full bg-red rounded float-right"></div>
                </div>
                <div class="w-full mb-6 lg:mb-0 w-max float-right p-2">
                    <h2 class="text-2xl font-bold font-medium title-font p-2 text-right">My library</h2>
                    <div class="h-1.5 w-full bg-red rounded float-right"></div>
                </div>

            </div>
        </div>
    </div>
</section>

<section>

    <div class="grid grid-cols-3 gap-20 p-10">
        @for ($i=0; $i < 10; $i++)
        <div class=" border-4 border-blue rounded-3xl w-full flex flex-col" style="background-size: cover!important; height: 35vw; background: url('https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767w.jpg')">
            <div class="w-full bg-blue rounded-b-2xl border-4 border-blue bottom-0 mt-auto"> test</div>
        </div>
        @endfor
    </div>

</section>

</body>

</html>
