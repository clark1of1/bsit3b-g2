@extends('layouts.app')

@section('content')

<!-- MAIN SECTION -->
<section id="about" class="relative h-screen w-full bg-cover bg-center"
    style="background-image: url('https://i.pinimg.com/736x/0c/6d/65/0c6d658ba26037b6fd5632b39e3a1593.jpg')">

    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
          About Us
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-3xl" data-aos="fade-up">
            We are Group 2 from BSIT-3B and we made this website to show our advocacy against Climate Change. 
            This is part of our final requirement in Science, Technology and Society course. 
            Scroll down further as we introduce our team and inspirations.
        </p>
    </div>
</section>

<!-- ABOUT CARDS -->
<section class="py-24 bg-transparent">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-white mb-16" data-aos="fade-up">
            Our Team
        </h2>

        <!-- Icon (SVG) -->
        @php
            $icon = '
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-16 h-16 mx-auto mb-4 opacity-90">
                    <path d="M12 2a4 4 0 1 1 0 8a4 4 0 0 1 0-8zm-6 18a6 6 0 1 1 12 0H6z"/>
                </svg>
            ';
        @endphp

        <!-- Leader centered -->
        <div class="flex justify-center mb-16">
            <div class="bg-gray-800 rounded-2xl p-10 w-full md:w-1/2 shadow-lg hover:scale-105 
                        transform transition duration-300 text-center"
                 data-aos="fade-up" data-aos-delay="100">
                 
                {!! $icon !!}
                <h3 class="text-2xl font-bold mb-4 text-white">Leader</h3>
                <p class="text-white text-xl font-semibold">
                    Alfonso, King Clark C.
                </p>
            </div>
        </div>

        <!-- Members Grid -->
        <div class="grid md:grid-cols-3 gap-10">
            
            @php
                $members = [
                    "Banal, Anthony",
                    "Bayani, Denmark",
                    "Dabu, Nathaniel",
                    "Estrella, Gabriel Justin",
                    "Hizon, John Moises",
                    "Macatuno, Aldrin",
                    "Mendoza, Mark Russell",
                    "Morales, Christian",
                    "Oracion, Alliel Mishael",
                    "Palacay, Aaron",
                    "Yabut, France",
                ];
            @endphp

            @foreach ($members as $index => $name)
            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg hover:scale-105 
                        transform transition duration-300 text-center"
                 data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
                 
                {!! $icon !!}
                <h3 class="text-2xl font-bold mb-4 text-white">Member</h3>
                <p class="text-white text-lg font-semibold">
                    {{ $name }}
                </p>
            </div>
            @endforeach

        </div>
    </div>
</section>

            

        </div>
    </div>
</section>

<!-- REFERENCES SECTION -->
<section id="references" class="py-24 bg-transparent">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-white mb-12" data-aos="fade-up">
            Inspirations | References
        </h2>

        <div class="bg-gray-800 bg-opacity-70 p-10 rounded-2xl shadow-xl">
            <ul class="space-y-6 text-white text-lg">

                <li data-aos="fade-up" data-aos-delay="100">
                    Climate Solutions. (2016). 
                    <span class="text-blue-300">Union of Concerned Scientists</span>.  
                    <a href="https://www.ucs.org/climate/solutions" 
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://www.ucs.org/climate/solutions
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    Give Me Trees. (2025). <i>15 ways to prevent climate change</i>.  
                    <a href="https://www.givemetrees.org/blogs/15-ways-to-prevent-climate-change.php"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://www.givemetrees.org/...
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    Greenpeace UK. (2025, August 25). <i>What are the solutions to climate change?</i>  
                    <a href="https://www.greenpeace.org.uk/challenges/climate-change/solutions-climate-change/"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://www.greenpeace.org.uk/...
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    Met Office. (2023, August 22). <i>Causes of climate change</i>.  
                    <a href="https://weather.metoffice.gov.uk/climate-change/causes-of-climate-change"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://weather.metoffice.gov.uk/...
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    NASA. (2025, February 6). <i>Climate change</i>. NASA Science.  
                    <a href="https://science.nasa.gov/climate-change/"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://science.nasa.gov/climate-change/
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="600">
                    National Oceanic and Atmospheric Administration. (2025, June 13). 
                    <i>Climate change impacts</i>.  
                    <a href="https://www.noaa.gov/education/resource-collections/climate/climate-change-impacts"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://www.noaa.gov/...
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="700">
                    United Nations. (2015). <i>Causes and effects of climate change</i>.  
                    <a href="https://www.un.org/en/climatechange/science/causes-effects-climate-change"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://www.un.org/...
                    </a>
                </li>

                <li data-aos="fade-up" data-aos-delay="800">
                    UNDP Climate Promise. (2023, November 15). 
                    <i>What is climate change mitigation and why is it urgent?</i>  
                    <a href="https://climatepromise.undp.org/news-and-stories/what-climate-change-mitigation-and-why-it-urgent"
                       target="_blank" class="text-blue-300 hover:text-blue-400 underline">
                       https://climatepromise.undp.org/...
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>


@endsection
