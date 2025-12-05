@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section id="effects" class="relative h-screen bg-cover bg-center"
    style="background-image: url('https://cdn.mos.cms.futurecdn.net/MHrHHVELvZuFzvPiYKT6SB.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
            Effects of Climate Change
        </h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-3xl" data-aos="fade-up">
            Climate change affects the planet in many dangerous and life-altering ways. Below are
            the major impacts happening around the world today.
        </p>
    </div>
</section>

<!-- EFFECTS SECTION -->
<section class="py-20 bg-transparent">
    <div class="max-w-7xl mx-auto px-6 space-y-24">

        <!-- 1. Hotter Temperatures (LEFT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://helios-i.mashable.com/imagery/articles/03EhSRQ486KXSkMeTcsOkyf/hero-image.fill.size_1248x702.v1689612373.png"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Hotter Temperatures</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Global temperatures continue to rise due to trapped greenhouse gases, resulting in heatwaves that push many regions beyond livable conditions. These extreme temperatures put stress on agricultural systems, natural ecosystems, and urban infrastructures, which are often unprepared to handle prolonged and intensified heat.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Human health is also severely impacted. Heat-related illnesses such as dehydration, heatstroke, and organ failure become more common, especially in vulnerable populations such as children, the elderly, and workers exposed to outdoor environments. Rising temperatures also fuel the spread of vector-borne diseases as insects migrate to warmer areas.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Cities experience the “urban heat island” effect, where concrete and asphalt absorb and hold heat, making temperatures significantly higher than surrounding rural areas. Without quick adaptation, large regions may become unsuitable for farming, habitation, and economic activity.
                </p>
            </div>
        </div>



        <!-- 2. More Severe Storms (RIGHT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">More Severe Storms</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Warmer oceans energize storms, creating more intense hurricanes, typhoons, and cyclones. These storms now produce stronger winds, heavier rainfall, and more destructive storm surges that devastate coastal towns and major cities. Weather patterns are becoming increasingly unpredictable, making disaster response planning more challenging.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Infrastructure such as power grids, bridges, hospitals, and roads are at constant risk of being destroyed or severely damaged. When storms hit, communities may be cut off from essential services for days or even weeks, creating long-term hardships for millions of people globally.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Economically, severe storms cost billions of dollars annually. Countries with limited resources struggle to rebuild, deepening inequality and leaving populations vulnerable to repeated future disasters.
                </p>
            </div>

            <img src="https://thebreakthrough.imgix.net/Severe-Storms-in-CA-Fig-1.png?auto=format&dpr=1&crop=faces%2Ccenter&fit=clip&w=1200&ixlib=react-7.2.0"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>



        <!-- 3. Increased Drought (LEFT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://blog.searchscene.com/wp-content/uploads/2021/08/search-scene-climate-change-cause-droughts.jpeg"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Increased Drought</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Droughts are intensifying as rainfall patterns shift and evaporation rates increase due to global warming. Regions that depend on seasonal rains face water shortages, threatening drinking water supplies, sanitation, and overall public health.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Agricultural systems suffer greatly as crops fail and livestock perish due to lack of water. As a result, food scarcity becomes more widespread, leading to higher food prices and worsening global hunger. Farmers may lose their income entirely, forcing entire families to migrate in search of survival.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Dry environments also become extremely prone to wildfires, which destroy homes, forests, and biodiversity. These fires release large amounts of carbon dioxide, further accelerating climate change in a destructive feedback loop.
                </p>
            </div>
        </div>



        <!-- 4. A Warming, Rising Ocean (RIGHT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">A Warming, Rising Ocean</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Oceans absorb much of the planet’s excess heat, causing water to expand and sea levels to rise. Combined with melting glaciers and ice sheets, coastlines around the world are already experiencing higher tides and increased flooding, threatening millions of people living in low-lying areas.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Saltwater intrusion into freshwater systems affects drinking water supplies and agricultural lands. Entire islands and coastal regions face the risk of becoming uninhabitable, forcing populations to relocate—a phenomenon known as climate-induced displacement.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Marine ecosystems are also destabilizing. Coral reefs bleach and die, fish populations migrate to cooler waters, and biodiversity declines sharply. These changes impact global fisheries and the economies that rely on them.
                </p>
            </div>

            <img src="https://cdn.sanity.io/images/sqn0ww9a/production/764b1f688585b3ce8770201a3025b48515c3d92d-928x660.jpg?w=928&h=660&auto=format"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>



        <!-- 5. Loss of Species (LEFT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/4/30/1430407599355/36a81d01-4449-4042-870e-7da99f0f0b91-2060x1374.jpeg?width=700&quality=85&auto=format&fit=max&s=d1ef638a0b268ef49afcd3571fcc47ba"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Loss of Species</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Climate change disrupts habitats and ecosystems, pushing countless species toward extinction. Animals struggle to adapt to rapidly changing temperatures, altered landscapes, and shrinking food sources. Plants face difficulties germinating in shifting climates, affecting entire food chains.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Coral reefs, which support nearly 25% of marine life, are dying due to ocean warming and acidification. Forests experience higher tree death rates from droughts, pests, and fires. This loss of biodiversity weakens ecosystems and reduces nature’s ability to maintain balance.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Species loss also impacts humans. Food supplies, medicine resources, and ecosystem services depend heavily on biodiversity. As nature collapses, so does the stability of human life.
                </p>
            </div>
        </div>



        <!-- 6. Not Enough Food (RIGHT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Not Enough Food</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Food production is becoming increasingly unpredictable as extreme weather events, droughts, and storms damage agricultural lands. Higher temperatures reduce crop yields, affecting staples such as rice, corn, and wheat.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Livestock are also impacted by heat stress, reduced grazing lands, and low water availability. Fishermen face declining catches as oceans warm and marine life migrates or dies. These challenges threaten global food security and lead to rising food prices.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Many developing countries face the worst effects, as they rely heavily on natural agriculture and lack modern technology to cope with climate impacts.
                </p>
            </div>

            <img src="https://media.licdn.com/dms/image/v2/D4E12AQEkChY7qUYQAw/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1658732482824?e=2147483647&v=beta&t=6G6e0SQ_yMVZeq03B-lQd9YHCIFKdMWvWSv6vMucIiY"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>



        <!-- 7. More Health Risks (LEFT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="https://insideclimatenews.org/wp-content/uploads/2018/11/hospital-dengue-scare_arun-sharma-hindustan-times-getty.jpg"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">More Health Risks</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Climate change increases the spread of diseases such as malaria, dengue, and cholera as insects and bacteria thrive in warmer temperatures. Floods contaminate water supplies, increasing outbreaks of waterborne illnesses, especially in regions lacking sanitation.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Poor air quality due to pollution and wildfire smoke causes respiratory problems, asthma, and cardiovascular diseases. Extreme heat puts millions at risk of heat exhaustion, dehydration, and even death.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Mental health is also affected. Climate disasters cause trauma, anxiety, and long-term stress in affected communities, especially children and those who lose their homes or livelihoods.
                </p>
            </div>
        </div>



        <!-- 8. Poverty & Displacement (RIGHT IMAGE) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Poverty & Displacement</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Climate disasters worsen poverty by destroying homes, crops, transport systems, and economic opportunities. Communities that depend on farming, fishing, or tourism can lose their entire income overnight after a storm, drought, or flood.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Rising sea levels and extreme weather force millions of families to leave their homes, becoming climate refugees. These displaced populations often face hunger, lack of shelter, unemployment, and loss of access to basic services.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    As global temperatures continue to rise, climate migration is expected to increase dramatically, creating humanitarian crises and placing pressure on governments and international aid systems.
                </p>
            </div>

            <img src="https://www.adb.org/sites/default/files/styles/content_media/public/content-media/676491-adb-2020-phl-gc-adb-rizalrelief-164.jpeg?itok=fUsbKXPq"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>

    </div>
</div>
@endsection