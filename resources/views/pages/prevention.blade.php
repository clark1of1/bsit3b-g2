@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section id="prevention" class="relative h-screen w-full bg-cover bg-center"
    style="background-image: url('https://www.givemetrees.org/ckfinder/userfiles/files/Plant%20Trees-min.png')">

    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
            How to Prevent Climate Change
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-3xl" data-aos="fade-up">
            Preventing climate change requires collective action — reducing emissions, conserving energy,
            restoring nature, and transforming how societies produce and consume. Every choice matters.
        </p>
    </div>
</section>

<!-- MAIN SECTION -->
<section class="py-20 bg-transparent">
    <div class="max-w-7xl mx-auto px-6 space-y-24">

        <!-- 1. Transition to Renewable Energy (IMAGE LEFT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <img src="https://media.licdn.com/dms/image/v2/D5612AQGns1pLBRMu4g/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1681278740036?e=2147483647&v=beta&t=n_PE3TaUmHCbRXvaOshvtb-_bHYLEiQk8zuCs6lidPI"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Transition to Renewable Energy</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Switching from fossil fuels to renewable energy sources such as solar, wind, and hydro power
                    significantly reduces greenhouse gas emissions. These clean technologies produce electricity
                    without releasing carbon into the atmosphere.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    As renewables become more affordable and accessible, both households and industries can adopt
                    cleaner energy solutions. Building a global renewable energy infrastructure is essential to
                    achieving long-term climate stability.
                </p>
            </div>
        </div>

        <!-- 2. Improve Energy Efficiency (IMAGE RIGHT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Improve Energy Efficiency</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Reducing wasted energy in buildings, appliances, transportation, and manufacturing greatly lowers
                    emissions. Efficient technologies such as LED lighting, insulated homes, and electric vehicles
                    help decrease the overall demand for energy.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Governments and communities can promote efficiency by adopting modern standards and encouraging
                    sustainable consumer choices. Small improvements across millions of households create massive
                    environmental benefits.
                </p>
            </div>

            <img src="https://greenesa.com/uploads/images/Energy_efficient_home_Greenesa_1637493281.png"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>

        <!-- 3. Restore Forests & Plant Trees (IMAGE LEFT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <img src="https://undark.org/wp-content/uploads/2019/12/GettyImages-1047731806.jpg"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Restore Forests & Plant Trees</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Forests absorb carbon dioxide and help regulate the global climate. By reforesting damaged
                    areas and protecting existing forests, we strengthen Earth’s natural ability to store carbon.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Local tree-planting movements and national conservation programs both play a vital role in
                    restoring biodiversity, improving air quality, and building climate resilience.
                </p>
            </div>
        </div>

        <!-- 4. Promote Sustainable Transportation (IMAGE RIGHT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Promote Sustainable Transportation</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Transportation is one of the largest contributors to carbon emissions. Expanding public transit,
                    encouraging biking and walking, and adopting electric vehicles reduce pollution and improve air
                    quality in urban areas.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Cities that invest in sustainable mobility benefit from healthier communities, decreased traffic
                    congestion, and reduced reliance on fossil fuels long-term.
                </p>
            </div>

            <img src="https://www.openaccessgovernment.org/wp-content/uploads/2023/07/iStock-1049277944-scaled.jpg"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>

        <!-- 5. Reduce Waste & Support Recycling (IMAGE LEFT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <img src="https://education-forum.co.uk/wp-content/uploads/2024/04/environment-nareeta-martin-FoG7PKNYjpM-unsplash.jpg"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Reduce Waste & Support Recycling</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Minimizing waste helps lower emissions from landfills and reduces the demand for energy-intensive
                    manufacturing. Recycling materials such as plastic, metal, and paper conserves natural resources
                    and prevents pollution.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Choosing reusable items, reducing single-use plastics, and supporting zero-waste initiatives
                    strengthens the global shift toward sustainable living.
                </p>
            </div>
        </div>

        <!-- 6. Support Sustainable Agriculture (IMAGE RIGHT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div class="order-2 md:order-1" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-white mb-4">Support Sustainable Agriculture</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Sustainable farming reduces methane emissions, conserves water, and protects soil health.
                    Practices such as crop rotation, organic farming, and reducing livestock emissions all contribute
                    to a healthier planet.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Consumers can help by buying responsibly sourced products, supporting local farmers, and reducing
                    food waste — one of the easiest and most impactful climate actions.
                </p>
            </div>

            <img src="https://acumen.org/app/uploads/2021/06/Resilient-Ag-1024x683.jpg"
                 class="full-xl shadow-lg order-1 md:order-2"
                 data-aos="fade-left">
        </div>

        <!-- 7. Climate Education & Community Action (IMAGE LEFT) -->
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <img src="https://epe.brightspotcdn.com/2b/fb/650ef52b48d4a30a3dedd33da2c4/teaching-climate-change-020923-1370785378.jpg"
                 class="full-xl shadow-lg"
                 data-aos="fade-right">

            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-white mb-4">Climate Education & Community Action</h2>

                <p class="text-gray-300 leading-relaxed text-lg mb-4">
                    Spreading awareness empowers people to make informed choices that reduce environmental impact.
                    Communities that understand climate challenges are more likely to adopt sustainable habits and
                    support policies that protect the planet.
                </p>
                <p class="text-gray-300 leading-relaxed text-lg">
                    Local organizations, schools, and youth groups play an important role in inspiring real change.
                    When people work together, individual actions multiply into global impact.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection
