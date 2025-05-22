@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/hero-bg.jpg') }}'); background-position: center; background-size: cover;">
        {{-- <div class="absolute inset-0 bg-gradient-to-r from-blue-500/80 to-green-500/80"></div> --}}
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 place-items-center min-h-[80vh] relative">
            <div class="text-center lg:text-left">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 leading-tight mb-6">Grow Your Business Digitally
                    With
                    <span class="text-gradient">
                        Digipal Solutions
                    </span>
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    We design and develop digital experiences that put people first and drive real results for businesses
                    like yours.
                </p>

                <div class="flex flex-row justify-center lg:justify-start gap-4">
                    <a href="#"
                        class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-green-400 text-white rounded-md shadow-lg hover:scale-102 transition duration-300 font-semibold uppercase">
                        Let's Talk
                    </a>
                    <a href="#"
                        class="inline-block px-6 py-3 bg-white text-gray-800 rounded-md shadow-lg hover:scale-102 transition duration-300 font-semibold uppercase">
                        Our Portfolio
                    </a>
                </div>
            </div>

            <div class="hidden lg:block p-10 relative">
                <img src="{{ asset('assets/images/home-hero.png') }}" alt="Hero Image" class="w-full h-auto">
                <img src="{{ asset('assets/images/home-hero-2.png') }}" alt=""
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-32">
            </div>



        </div>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <p class="text-gray-500 uppercase text-sm font-semibold tracking-wider">Trusted by leading brands</p>
            </div>
            <div class="relative overflow-x-hidden">
                <div class="marquee-group">
                    <div class="animate-marquee whitespace-nowrap flex gap-12 items-center">
                        @for ($i = 0; $i < 3; $i++)
                            <img src="{{ asset('assets/images/mv-dugar.png') }}" alt="MV Dugar"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">

                            <img src="{{ asset('assets/images/westminster-college.png') }}" alt="The Westminster College"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">

                            <img src="{{ asset('assets/images/new-okhati-.png') }}" alt="Okhati"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">

                            <img src="{{ asset('assets/images/gwm-nepal.png') }}" alt="GWM Nepal"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">

                            <img src="{{ asset('assets/images/aakarshan.png') }}" alt="Aakarshan Clinic"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">

                            <img src="{{ asset('assets/images/cg-consultants.png') }}" alt="Career Guidance Consultants"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">

                            <img src="{{ asset('assets/images/naesthetic.png') }}" alt="Naestetic Skin Care"
                                class="flex-shrink-0 w-[calc(100vw/5)] max-w-[150px] h-12 object-contain opacity-70 hover:opacity-100 transition duration-300">
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 max-w-xl mx-auto">
                <p class="text-gray-500 uppercase text-sm font-semibold tracking-wider mb-6">Portfolio</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Our Work, <span class="text-gradient">Your Success</span>
                </h2>
                <p class="text-gray-500 mx-auto text-md leading">
                    We're proud of the work we do and the impact it has on our clients. Browse through some of our most
                    recent projects
                    to see how we can help you achieve your goals.
                </p>
            </div>

            {{-- <div class="max-w-3xl mx-auto">
                <div class="section-divider"></div>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 0; $i < 3; $i++)
                    <div class="portfolio-card">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="https://picsum.photos/1600/900?random={{ $i + 1 }}" alt="Portfolio Image"
                                class="object-cover w-full h-full rounded-md">
                        </div>

                        <div class="mt-4">
                            @if ($i % 2 == 0)
                                <span
                                    class="inline-block bg-blue-500 text-white text-[10px] px-3 py-.5 rounded-md">Green</span>
                            @else
                                <span
                                    class="inline-block bg-green-500 text-white text-[10px] px-2 py-.5 rounded-md">Blue</span>
                            @endif
                        </div>

                        <div class="mt-2">
                            <h3 class="text-xl font-semibold line-clamp-1">
                                Product Showcase Website {{ $i + 1 }}
                            </h3>
                            <p class="text-gray-500 line-clamp-2 mt-1">
                                Naesthetic Skin Care is a leading skin care brand in Nepal that offers a range of
                                high-quality
                                products and services. We designed and developed their website.
                            </p>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-md shadow-lg hover:scale-102 transition duration-300 text-md font-semibold uppercase">
                    View All Projects
                </a>
            </div>

        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 max-w-xl mx-auto">
                <p class="text-gray-500 uppercase text-sm font-semibold tracking-wider mb-6">Services</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Our Digital <span class="text-gradient">Services</span></h2>
                <p class="text-gray-500 mx-auto text-md leading">
                    We help businesses grow online by telling their unique story and sharing their message. From SEO to
                    social media,
                    we offer a range of services to help you succeed.
                </p>
            </div>

            {{-- <div class="max-w-3xl mx-auto">
                <div class="section-divider"></div>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-8" style="justify-items: center;">

                <div class="service-card bg-white p-8 rounded-md shadow-sm">
                    <div class="feature-icon-blue p-3 w-max rounded-md flex items-center justify-center mb-6">
                        <x-heroicon-o-hashtag class="text-white w-10" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Social Media Marketing</h3>
                    <p class="text-gray-600 mb-8">Increase online presence and engagement with a tailored strategy,
                        content creation and ad management.</p>
                    <a href="{{ route('services.smm') }}"
                        class="text-blue-600 font-medium group transition duration-300 flex items-center mt-auto">
                        Learn More <x-heroicon-o-arrow-right
                            class="ml-2 group-hover:translate-x-2 w-4 transition duration-300" />
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-md shadow-sm">
                    <div class="feature-icon-green p-3 w-max rounded-md flex items-center justify-center mb-6">
                        <x-heroicon-o-user-group class="text-white w-10" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Influencers' Marketing</h3>
                    <p class="text-gray-600 mb-8">Partner with influencers who resonate with your target audience,
                        maximize your reach and drive conversions.</p>
                    <a href="{{ route('services.influencer') }}"
                        class="text-blue-600 font-medium group transition duration-300 flex items-center mt-auto">
                        Learn More <x-heroicon-o-arrow-right
                            class="ml-2 group-hover:translate-x-2 w-4 transition duration-300" />
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-md shadow-sm">
                    <div class="feature-icon-blue p-3 w-max rounded-md flex items-center justify-center mb-6">
                        <x-heroicon-o-video-camera class="text-white w-10" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Video Production</h3>
                    <p class="text-gray-600 mb-8">Create eye-catching videos that capture the essence of your brand,
                        engage your audience and drive conversions.</p>
                    <a href="{{ route('services.video') }}"
                        class="text-blue-600 font-medium group transition duration-300 flex items-center mt-auto">
                        Learn More <x-heroicon-o-arrow-right
                            class="ml-2 group-hover:translate-x-2 w-4 transition duration-300" />
                    </a>
                </div>


                <div class="service-card bg-white p-8 rounded-md shadow-sm">
                    <div class="feature-icon-green p-3 w-max rounded-md flex items-center justify-center mb-6">
                        <x-heroicon-o-magnifying-glass class="text-white w-10" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Search Engine Optimization</h3>
                    <p class="text-gray-600 mb-8">Boost website visibility and drive traffic with a tailored SEO
                        strategy, on-page optimization and link building.</p>
                    <a href="{{ route('services.seo') }}"
                        class="text-blue-600 font-medium group transition duration-300 flex items-center mt-auto">
                        Learn More <x-heroicon-o-arrow-right
                            class="ml-2 group-hover:translate-x-2 w-4 transition duration-300" />
                    </a>
                </div>

                <div class="service-card bg-white p-8 rounded-md shadow-sm">
                    <div class="feature-icon-blue p-3 w-max rounded-md flex items-center justify-center mb-6">
                        <x-heroicon-o-code-bracket class="text-white w-10" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Web Development</h3>
                    <p class="text-gray-600 mb-8">Build a website that attracts and engages your audience,
                        positions your brand as a thought leader and drives conversions.</p>
                    <a href="{{ route('services.web-dev') }}"
                        class="text-blue-600 font-medium group transition duration-300 flex items-center mt-auto">
                        Learn More <x-heroicon-o-arrow-right
                            class="ml-2 group-hover:translate-x-2 w-4 transition duration-300" />
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col items-start">
                    <p class="text-gray-500 uppercase text-sm font-semibold tracking-wider mb-6">About Us</p>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">We Are
                        <span class="text-gradient">
                            Digipal Solutions
                        </span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-8">We are a team of passionate digital marketers with
                        years of experience in creating successful marketing campaigns for businesses of all sizes.
                        Our
                        team is dedicated to helping you reach your target audience and grow your business through
                        digital marketing.</p>

                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-100 text-blue-600">
                                    <x-heroicon-o-light-bulb class="w-6" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">Innovative Strategies</h3>
                                <p class="mt-2 text-gray-600">We stay ahead of industry trends to implement cutting-edge
                                    solutions.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-green-100 text-green-600">
                                    <x-heroicon-o-presentation-chart-line class="w-6" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">Proven Results</h3>
                                <p class="mt-2 text-gray-600">Our clients average 3-5x ROI on their marketing investments.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-100 text-blue-600">
                                    <x-heroicon-o-chat-bubble-left-right class="w-6" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800">Dedicated Support</h3>
                                <p class="mt-2 text-gray-600">Your success manager is always available to answer questions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/about.jpg') }}" alt="About" class="rounded-md w-full">
                </div>
            </div>
        </div>

    </section>

    <section class="py-16 bg-gradient-to-r from-blue-400 to-green-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-gray-100">
                <div>
                    <p class="text-4xl font-bold mb-2">250+</p>
                    <p class="text-blue-100">Happy Clients</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">500+</p>
                    <p class="text-blue-100">Projects Completed</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">3.5x</p>
                    <p class="text-blue-100">Average ROI</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">24/7</p>
                    <p class="text-blue-100">Client Support</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <p class="text-gray-500 uppercase text-sm font-semibold tracking-wider mb-6">Testimonials</p>
                <h2 class="text-3xl md:text-4xl font-bold">What our <span class="text-gradient">Clients Say</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card bg-white p-8 rounded-md shadow-sm">
                    <div class="flex items-center mb-6">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/44.jpg"
                            alt="Client" />
                        <div>
                            <h4 class="font-bold text-gray-800">
                                Sarah Johnson
                            </h4>
                            <p class="text-gray-600 text-sm">
                                CEO, TechStart
                            </p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Digipal Solutions transformed our online presence. Our
                        website traffic increased by 400% and we're now
                        generating 3x more qualified leads than before."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-md shadow-sm">
                    <div class="flex items-center mb-6">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/45.jpg"
                            alt="Client" />
                        <div>
                            <h4 class="font-bold text-gray-800">
                                Mark Smith
                            </h4>
                            <p class="text-gray-600 text-sm">
                                CEO, Digipal Solutions
                            </p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Digipal Solutions helped us increase our sales by 200% through
                        targeted social media campaigns and strategic SEO."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-md shadow-sm">
                    <div class="flex items-center mb-6">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/46.jpg"
                            alt="Client" />
                        <div>
                            <h4 class="font-bold text-gray-800">
                                Emily Doe
                            </h4>
                            <p class="text-gray-600 text-sm">
                                Marketing Manager, TechStart
                            </p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Digipal Solutions's team is always responsive and helpful. They
                        have been a true partner in our digital marketing efforts."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.partials.cta')
@endsection
