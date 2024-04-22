<script>
  //hero slider
document.addEventListener("DOMContentLoaded", function () {
    const backgrounds = [
        'url("{{ asset("images/Marrakech-Car.jpg") }}")', 
        'url("{{ asset("images/Marrakech-Lounge.jpg") }}")',
        'url("{{ asset("images/RAK-Lounge-Departures.jpg") }}")',
     
    ];

    let currentBackgroundIndex = 0;
    const backgroundSlider = document.getElementById('background-slider');

    function changeBackground() {
        backgroundSlider.style.transition = "background-image 1s ease-in";
        backgroundSlider.style.backgroundImage = backgrounds[currentBackgroundIndex];
        currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
    }

    setInterval(changeBackground, 3000);
});
</script>



<section class="bg-white relative dark:bg-gray-900" id="background-slider"
style="background: url('{{ asset("images/Marrakech-Car.jpg") }}');"  background-size: cover; background-repeat: no-repeat; background-position: center; padding-top: 120px; padding-bottom: 120px; position: relative;">
        <div class="bg-black opacity-50 absolute inset-0 z-0"></div> <!-- Overlay element -->
        <div class="grid w-full px-4 py-18 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative z-10">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                   FAST TRACK </br>MAROC </h1>
                <h2 class="max-w-2xl mb-6 font-medium text-gray-200 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Une autre facon de voyager!</h2>
                    <a href="{{ route('booking') }}"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Booking Now</a>

              
            </div>
        </div>

    </section>







