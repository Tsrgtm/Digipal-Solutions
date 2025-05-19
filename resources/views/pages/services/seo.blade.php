@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/seo-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Search Engine
                    <span class="text-gradient">Optimization</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Boost your organic visibility and drive sustainable growth with our data-driven SEO strategies
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <img src="{{ asset('assets/images/seo-analytics.png') }}" alt="SEO Analysis" class="rounded-xl w-full"
                        loading="lazy">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Comprehensive
                        <span class="text-gradient">SEO Solutions</span>
                    </h2>
                    <p class="text-gray-600 mb-8">
                        Our holistic approach combines technical excellence with content optimization to help you:
                    </p>
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-magnifying-glass class="w-5 h-5 text-blue-600" />
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Increase Organic Visibility</h3>
                                <p class="text-gray-600">Improve search rankings for targeted keywords</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-arrow-trending-up class="w-5 h-5 text-green-600" />
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Drive Qualified Traffic</h3>
                                <p class="text-gray-600">Attract high-intent visitors ready to convert</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-currency-dollar class="w-5 h-5 text-purple-600" />
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Improve ROI</h3>
                                <p class="text-gray-600">Maximize your marketing budget efficiency</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Our SEO
                    <span class="text-gradient">Methodology</span>
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto">Proven strategies that deliver measurable results</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-document-magnifying-glass class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Technical SEO Audit</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Site Health Analysis
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Crawl Error Resolution
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Speed Optimization
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-key class="w-8 h-8 text-green-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Keyword Strategy</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Competitor Analysis
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Long-Tail Targeting
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Search Intent Mapping
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-pencil-square class="w-8 h-8 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Content Optimization</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            On-Page SEO
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Semantic Content
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Structured Data
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    SEO Results
                    <span class="text-gradient">That Matter</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <p class="text-4xl font-bold text-blue-600 mb-2">300%+</p>
                    <p class="font-semibold">Organic Traffic Growth</p>
                    <p class="text-sm text-gray-600">Average client increase</p>
                </div>
                <div class="text-center p-6">
                    <p class="text-4xl font-bold text-green-600 mb-2">85%</p>
                    <p class="font-semibold">Keyword Ranking Improvement</p>
                    <p class="text-sm text-gray-600">First page rankings</p>
                </div>
                <div class="text-center p-6">
                    <p class="text-4xl font-bold text-purple-600 mb-2">2.3x</p>
                    <p class="font-semibold">ROI Increase</p>
                    <p class="text-sm text-gray-600">Compared to PPC</p>
                </div>
                <div class="text-center p-6">
                    <p class="text-4xl font-bold text-blue-600 mb-2">24/7</p>
                    <p class="font-semibold">Performance Monitoring</p>
                    <p class="text-sm text-gray-600">Real-time tracking</p>
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
                    <h4 class="font-semibold text-lg mb-2">How do you increase website traffic?</h4>
                    <p class="text-gray-600">We use proven SEO strategies, such as keyword research, on-page optimization,
                        and link building to increase traffic.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">What is your approach to link building?</h4>
                    <p class="text-gray-600">We use a combination of guest posting, resource pages, and PR to acquire high
                        quality links that improve our clients' online presence.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">How do you measure SEO success?</h4>
                    <p class="text-gray-600">We use a combination of metrics, such as organic traffic, keyword rankings,
                        and
                        conversion rates to measure SEO success.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-blue-500 to-green-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Get you free SEO Audit</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            We'll analyze your website and provide actionable suggestions for improvement
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4 items-center">
                        <input type="text" placeholder="Enter your email"
                            class="w-full px-4 py-3 rounded-lg outline-none bg-gray-200 text-gray-800 focus:ring-2 focus:ring-green-500">
                        <button
                            class="inline-block whitespace-nowrap px-6 py-3 bg-white text-green-500 hover:bg-gray-100 rounded-md font-semibold uppercase transition duration-300">
                            Get Audit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
