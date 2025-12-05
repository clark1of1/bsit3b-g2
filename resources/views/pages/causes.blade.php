@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section id="causes" class="relative h-screen w-full bg-cover bg-center"

    style="background-image: url('https://cdn.prod.website-files.com/67857cc07ed4a73e28affa82/6806778623571cadedfcc3b2_Climate101.jpg')">
    
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
            Causes of Climate Change
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-3xl" data-aos="fade-up">
            Climate change is driven by both human and natural factors — from fossil fuels and deforestation to volcanic activity and ocean shifts.
        </p>
    </div>
</section>


<!-- MAIN SECTION -->
<section class="py-20 bg-transparent">
    <div class="max-w-7xl mx-auto px-6 space-y-24">

        <!-- =========================== -->
        <!-- 1. FOSSIL FUELS (IMAGE LEFT) -->
        <!-- =========================== -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://www.washingtonpost.com/wp-apps/imrs.php?src=http://img.washingtonpost.com/rf/image_908w/2010-2019/WashingtonPost/2014/11/02/Health-Environment-Science/Images/Denmark_UN_Climate_Report-00d12-2556.jpg&w=1440"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Fossil Fuels</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Burning fossil fuels such as coal, oil, and natural gas releases massive amounts of carbon dioxide (CO₂) into the atmosphere. These emissions trap heat, causing the planet’s temperature to rise at accelerating rates. Power plants, factories, and vehicles are the largest contributors, making fossil fuels the number one driver of modern climate change.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    The energy demands of growing populations and expanding industries further increase fossil fuel consumption. Despite advances in renewable energy, many countries still rely heavily on coal and oil for electricity and transportation, deepening global dependence on high-emission fuels.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    As CO₂ levels rise, the atmosphere becomes increasingly efficient at trapping heat, intensifying global warming. Reducing fossil fuel use is essential to slowing climate change and ensuring a sustainable future for the next generations.
                </p>
            </div>
        </div>


        <!-- ============================= -->
        <!-- 2. DEFORESTATION (IMAGE RIGHT) -->
        <!-- ============================= -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Deforestation</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Forests act as Earth’s natural carbon sinks, absorbing CO₂ and releasing oxygen. When trees are cut down for agriculture, urban expansion, or logging, this crucial carbon storage is reduced. Less forest cover means more carbon remains in the atmosphere, directly intensifying global warming.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Deforestation also disrupts ecosystems and accelerates soil erosion, reducing biodiversity and weakening nature’s ability to regulate climate. Many species lose their habitats permanently, and entire food chains collapse when forest environments disappear or degrade.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    In tropical regions such as the Amazon and Southeast Asia, forests are cleared at alarming rates. Protecting remaining forests and restoring damaged areas are essential steps in addressing climate change and safeguarding global ecological balance.
                </p>
            </div>

            <img src="https://images.nationalgeographic.org/image/upload/v1652341008/EducationHub/photos/deforestation.jpg"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>


        <!-- ==================================== -->
        <!-- 3. AGRICULTURE & INDUSTRY (LEFT IMAGE) -->
        <!-- ==================================== -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://insideclimatenews.org/wp-content/uploads/2019/01/Ag-LockinIllo-900-1.jpg"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Agriculture & Industry</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Agriculture, particularly livestock farming, produces significant amounts of methane — a greenhouse gas far more potent than CO₂. Cattle, sheep, and goats release methane through digestion, while rice paddies and manure decomposition amplify emissions in farming regions worldwide.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Industrial processes contribute additional greenhouse gases such as nitrous oxide and industrial CO₂. Manufacturing, mining, cement production, and chemical industries require large amounts of energy and often emit pollutants that accelerate atmospheric warming.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    As the global demand for food and industrial products increases, emissions continue to rise. Transforming agricultural methods and increasing industrial efficiency are crucial to reducing climate impacts and building a sustainable global economy.
                </p>
            </div>
        </div>


        <!-- =============================== -->
        <!-- 4. VOLCANIC ACTIVITY (RIGHT IMAGE) -->
        <!-- =============================== -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Volcanic Activity</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Volcanic eruptions release ash, sulfur dioxide, and gases that can temporarily influence Earth’s climate. Large eruptions can cool the planet by blocking sunlight, while smaller ones may cause short-term warming through greenhouse gas emissions.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Although volcanoes contribute to natural climate fluctuations, their impact is minimal compared to human activities. Still, volcanic events can disrupt weather patterns, agriculture, and air travel for months or even years.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Despite being a natural phenomenon, volcanic emissions serve as reminders of how delicate and interconnected Earth’s climate system truly is.
                </p>
            </div>

            <img src="https://static.scientificamerican.com/sciam/cache/file/55916839-9544-4074-9181AD8673DEC62D_source.jpg"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>


        <!-- =============================== -->
        <!-- 5. SOLAR VARIATIONS (LEFT IMAGE) -->
        <!-- =============================== -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://assets.science.nasa.gov/dynamicimage/assets/science/esd/climate/internal_resources/2502/temperature_vs_solar_activity_2021.png"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Solar Variations</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    The Sun’s energy output naturally fluctuates over time. These solar cycles influence Earth’s climate by slightly altering the amount of radiation reaching the surface, which can cause mild warming or cooling phases.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    While solar variations have shaped historical climate patterns, modern scientific evidence shows that their impact is small compared to human greenhouse gas emissions. Current warming trends far exceed what solar cycles alone can explain.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Understanding natural cycles helps scientists distinguish between natural climate shifts and human-driven global warming, reinforcing the urgency of reducing anthropogenic emissions.
                </p>
            </div>
        </div>


        <!-- =============================== -->
        <!-- 6. OCEAN CURRENTS (RIGHT IMAGE) -->
        <!-- =============================== -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Ocean Currents</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Oceans move heat around the planet through major circulation systems. When these currents shift due to warming, melting ice, or changing wind patterns, global temperature distributions change dramatically.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Slowed or disrupted ocean currents can cause extreme weather shifts, such as colder winters in some regions and hotter, drier conditions in others. Marine life also suffers when warm and cold waters no longer mix properly.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    These changes can accelerate climate impacts and disrupt both human communities and natural ecosystems, making ocean observations crucial for predicting future climate patterns.
                </p>
            </div>

            <img src="https://assets.science.nasa.gov/content/dam/science/esd/climate/internal_resources/2665/Global_Ocean_Circulation_GIF.gif?w=1000&h=581&fit=clip&crop=faces%2Cfocalpoint"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>

    </div>
</section>

@endsection
