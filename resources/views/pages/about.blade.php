@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/about-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Digital Excellence <span class="text-gradient">Through Innovation</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Where technology meets creativity to deliver transformative digital solutions for forward-thinking
                    businesses.
                </p>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col items-start">
                    <p class="text-gray-500 uppercase text-sm font-semibold tracking-wider mb-6">About Us</p>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Who We <span class="text-gradient">Are?</span>
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

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Meet Our
                    <span class="text-gradient">Dream Team</span>
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto">
                    A passionate collective of strategists, creatives, and technologists dedicated to your success
                </p>
            </div>
            <div class="relative w-full">
                <div class="carousel grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="team-card text-center">
                        <img src="{{ asset('assets/images/team-1.jpg') }}" alt="Team Member"
                            class="w-48 h-48 rounded-full mx-auto mb-6 shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Chandan Budhathoki</h3>
                        <p class="text-gray-600 mb-4">CEO & Founder</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                <i class="fab fa-linkedin fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                <i class="fab fa-facebook fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-pink-500 hover:text-pink-600 transition duration-300">
                                <i class="fab fa-instagram fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-black hover:text-gray-800 transition duration-300">
                                <i class="fab fa-x-twitter fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="team-card text-center">
                        <img src="{{ asset('assets/images/team-2.jpg') }}" alt="Team Member"
                            class="w-48 h-48 rounded-full mx-auto mb-6 shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Sudeep Timilsina</h3>
                        <p class="text-gray-600 mb-4">CTO & Co-Founder</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                <i class="fab fa-linkedin fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                <i class="fab fa-facebook fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-pink-500 hover:text-pink-600 transition duration-300">
                                <i class="fab fa-instagram fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-black hover:text-gray-800 transition duration-300">
                                <i class="fab fa-x-twitter fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="team-card text-center">
                        <img src="{{ asset('assets/images/team-3.jpg') }}" alt="Team Member"
                            class="w-48 h-48 rounded-full mx-auto mb-6 shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Aayush Shrestha</h3>
                        <p class="text-gray-600 mb-4">Marketing Manager</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                <i class="fab fa-linkedin fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-600 transition duration-300">
                                <i class="fab fa-facebook fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-pink-500 hover:text-pink-600 transition duration-300">
                                <i class="fab fa-instagram fa-fw" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="text-black hover:text-gray-800 transition duration-300">
                                <i class="fab fa-x-twitter fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Our Expertise
                    <span class="text-gradient">Areas</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <x-heroicon-o-megaphone class="w-6 h-6 text-green-600" />
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Digital Marketing</h3>
                    <p class="text-gray-600 text-sm">Crafting successful marketing campaigns using SEO, social media,
                        email marketing and more</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <x-heroicon-o-play class="w-6 h-6 text-blue-600" />
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Video Production</h3>
                    <p class="text-gray-600 text-sm">Creating high-quality video content for businesses, events, and
                        personal brands</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-sm">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <x-heroicon-o-code-bracket class="w-6 h-6 text-purple-600" />
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Development</h3>
                    <p class="text-gray-600 text-sm">Building scalable and efficient solutions tailored to your business
                        needs</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-blue-500 to-green-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Ready to grow your business?</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            Let's discuss how we can help you achieve your digital marketing goals.
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4 items-center">
                        <a href="{{ route('contact') }}"
                            class="bg-white border-2 border-white text-green-500 hover:bg-gray-100 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Contact Us
                        </a>

                        <a href="#"
                            class="border-2 border-white text-white hover:bg-gray-100/20 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
