@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/smm-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Social Media
                    <span class="text-gradient">Excellence</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Transform your social presence with data-driven strategies that engage and convert
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Strategic Social
                        <span class="text-gradient">Management</span>
                    </h2>
                    <p class="text-gray-600 mb-8">
                        Our social media management services will help you develop a robust online presence by creating and
                        curating engaging content, managing your social media profiles, and increasing your online
                        visibility and reach.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-chart-bar class="w-6 h-6 text-blue-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Performance Analytics</p>
                                <p class="text-sm text-gray-600">Real-time campaign tracking</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-camera class="w-6 h-6 text-green-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Content Creation</p>
                                <p class="text-sm text-gray-600">Platform-optimized media</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-user-group class="w-6 h-6 text-purple-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Community Management</p>
                                <p class="text-sm text-gray-600">24/7 engagement</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-currency-dollar class="w-6 h-6 text-blue-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Ad Management</p>
                                <p class="text-sm text-gray-600">Targeted social ads</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/smm-strategy.png') }}" alt="SMM Strategy"
                        class="rounded-xl w-full max-w-lg" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Our SMM
                    <span class="text-gradient">Methodology</span>
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto">Proven strategies that deliver measurable results</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-chart-bar class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Performance Analytics</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Real-time campaign tracking
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Data-driven insights
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Custom reporting
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-camera class="w-8 h-8 text-green-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Content Creation</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Platform-optimized media
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            High-quality visuals
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Captions and copywriting
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-user-group class="w-8 h-8 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Community Management</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            24/7 engagement
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Content moderation
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Crises management
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gradient-to-r from-blue-400 to-green-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-gray-100">
                <div>
                    <p class="text-4xl font-bold mb-2">10K+</p>
                    <p class="text-blue-100">Followers Gained</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">20%</p>
                    <p class="text-blue-100">Engagement Rate</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">4.8/5</p>
                    <p class="text-blue-100">Client Satisfaction</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">1h</p>
                    <p class="text-blue-100">Average Response Time</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Frequently Asked
                    <span class="text-gradient">Questions</span>
                </h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">How do you increase social media engagement?</h4>
                    <p class="text-gray-600">We use tailored strategies including content optimization, audience targeting,
                        and interactive campaigns to boost engagement.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">What platforms do you specialize in?</h4>
                    <p class="text-gray-600">We specialize in all major platforms including Facebook, Instagram, Twitter,
                        and LinkedIn.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">Can you manage paid social media campaigns?</h4>
                    <p class="text-gray-600">Yes, we offer comprehensive ad management services to ensure the best ROI for
                        your campaigns.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-blue-500 to-green-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Ready to Elevate Your Social Media?</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            Let's strategize and create a compelling social media presence together.
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4 items-center">
                        <a href="{{ route('contact') }}"
                            class="bg-white border-2 border-white text-green-500 hover:bg-gray-100 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Start Project
                        </a>
                        <a href="#"
                            class="border-2 border-white text-white hover:bg-gray-100/20 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            See Examples
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
