@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/services-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Transform Your Business
                    <span class="text-gradient">Digitally</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Comprehensive digital solutions designed to propel your brand into the future
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 max-w-xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Our Core
                    <span class="text-gradient">Services</span>
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto">
                    End-to-end digital solutions that drive growth and innovation
                </p>
            </div>

            {{-- <div class="max-w-3xl mx-auto">
                <div class="section-divider"></div>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card bg-white p-8 rounded-md shadow-sm">
                    <div class="feature-icon-blue p-3 w-max rounded-md flex items-center justify-center mb-6">
                        <x-heroicon-o-hashtag class="text-white w-10" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Social Media Marketing</h3>
                    <p class="text-gray-600 mb-8">Increase online presence and engagement with a tailored strategy,
                        content creation and ad management.</p>
                    <a href="#"
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
                    <a href="#"
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
                    <a href="#"
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
                    <a href="#"
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
                    <a href="#"
                        class="text-blue-600 font-medium group transition duration-300 flex items-center mt-auto">
                        Learn More <x-heroicon-o-arrow-right
                            class="ml-2 group-hover:translate-x-2 w-4 transition duration-300" />
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/service-process.png') }}" alt="Our Process"
                        class="rounded-xl w-full max-w-lg">
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Our Winning
                        <span class="text-gradient">Process</span>
                    </h2>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold mb-2">Discovery & Strategy</h3>
                                <p class="text-gray-600">Deep dive into your business objectives and market position</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <span class="text-green-600 font-bold">2</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold mb-2">Creative Execution</h3>
                                <p class="text-gray-600">Innovative solutions development with cutting-edge technology</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <span class="text-purple-600 font-bold">3</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold mb-2">Launch & Growth</h3>
                                <p class="text-gray-600">Strategic implementation and continuous optimization</p>
                            </div>
                        </div>
                    </div>
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
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Why Choose
                    <span class="text-gradient">Digipal?</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-sparkles class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Innovation Driven</h3>
                    <p class="text-gray-600">Pioneering digital strategies powered by emerging technologies</p>
                </div>
                <div class="p-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-scale class="w-8 h-8 text-green-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Transparent Process</h3>
                    <p class="text-gray-600">Clear communication and measurable milestones at every stage</p>
                </div>
                <div class="p-8 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-trophy class="w-8 h-8 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Proven Results</h3>
                    <p class="text-gray-600">Track record of delivering exceptional ROI for our clients</p>
                </div>
            </div>
        </div>
    </section>

    @include('pages.partials.cta')
@endsection
