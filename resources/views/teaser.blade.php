<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teaser</title>
    <link href="https://fonts.googleapis.com/css2?family=Nohemi&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.svg') }} ">
    @vite('resources/css/app.css')
</head>
<body class="font-nohemi relative bg-black">
    <video playsinline autoplay muted loop id="bgvid" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -100;">
        <source src="{{ asset('videos/HorizontalBackground.mp4') }}" type="video/mp4">
    </video>

    <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="absolute top-8 left-1/2 transform -translate-x-1/2 w-8 md:w-10 xl:w-14">
    <div class="h-screen flex flex-col justify-center items-center text-white text-center px-4 mx-2 sm:mx-6 md:mx-12 lg:mx-20 xl:mx-36 2xl:mx-48">
        <h1 class="text-2xl sm:text-5xl md:text-6xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-bold leading-tight sm:leading-snug md:leading-snug lg:leading-tight xl:leading-normal 2xl:leading-snug mb-4 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 2xl:mx-12">Bridging the Gap between Devs & Clients</h1>
        <p class="text-xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-5xl font-light leading-none mb-8 opacity-60">One Repo at a time</p>  
    </div>
    <button class="left-1/2 transform -translate-x-1/2 text-sm sm:text-lg absolute bottom-2 lg:bottom-8 inline-flex items-center justify-center  mb-2 me-2 text-gray-400 border border-gray-400 rounded-full group bg-transparent hover:text-gray-400">
    <span class="relative flex items-center px-2.5 py-1 md:px-4 md:py-2 transition-all ease-in duration-75 bg-transparent rounded-full group-hover:bg-opacity-0 overflow-hidden">
    Join the Waitlist
    <img src="{{ asset('img/arrow.svg') }}" alt="Arrow" class="ml-1 md:ml-2 text-gray-400 opacity-100 w-4 mt-1">
    </span>
    </button>
  
    
</body>
</html>


<script>
        window.addEventListener('resize', function() {
            var video = document.getElementById('bgvid');
            var source = document.getElementById('bgvid-src');
            if (window.innerWidth < 768) {
                source.setAttribute('src', "{{ asset('videos/VerticalBackground.mp4') }}");
            } else {
                source.setAttribute('src', "{{ asset('videos/HorizontalBackground.mp4') }}");
            }
            video.load();
        });
        
</script>