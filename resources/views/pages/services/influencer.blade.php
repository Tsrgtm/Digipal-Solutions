@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/influencer-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Influencer
                    <span class="text-gradient">Marketing</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Strategic brand partnerships that drive authentic engagement and measurable results
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/influencer-network.png') }}" alt="Influencer Network"
                        class="rounded-xl w-full max-w-lg" loading="lazy">
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Strategic
                        <span class="text-gradient">Collaborations</span>
                    </h2>
                    <p class="text-gray-600 mb-8">We connect brands with authentic voices that resonate with target
                        audiences</p>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-magnifying-glass class="w-8 h-8 text-green-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Influencer Discovery</h3>
                                <p class="text-gray-600">AI-powered matching based on audience demographics and brand values
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-document-text class="w-8 h-8 text-blue-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Campaign Management</h3>
                                <p class="text-gray-600">End-to-end coordination from contract to content delivery</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-presentation-chart-line class="w-8 h-8 text-purple-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Performance Analytics</h3>
                                <p class="text-gray-600">Comprehensive ROI tracking and reporting</p>
                            </div>
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
                    Our Influencer
                    <span class="text-gradient">Network</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-green-600 mb-2">10K+</p>
                    <p class="font-semibold">Verified Creators</p>
                    <p class="text-sm text-gray-600">Across all major platforms</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-blue-600 mb-2">500M+</p>
                    <p class="font-semibold">Combined Reach</p>
                    <p class="text-sm text-gray-600">Global audience access</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-purple-600 mb-2">85%</p>
                    <p class="font-semibold">Engagement Rate</p>
                    <p class="text-sm text-gray-600">Average increase</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-green-600 mb-2">24h</p>
                    <p class="font-semibold">Campaign Launch</p>
                    <p class="text-sm text-gray-600">Quick turnaround</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Campaign
                    <span class="text-gradient">Process</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-green-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Strategy Development</h3>
                    <p class="text-gray-600">Audience analysis & KPI definition</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Influencer Matching</h3>
                    <p class="text-gray-600">AI-powered creator selection</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-purple-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Content Creation</h3>
                    <p class="text-gray-600">Authentic story development</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-green-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Launch & Analyze</h3>
                    <p class="text-gray-600">Performance tracking & optimization</p>
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
                    <h4 class="font-semibold text-lg mb-2">How do you measure campaign success?</h4>
                    <p class="text-gray-600">We track engagement rates, conversions, and brand sentiment through advanced
                        analytics tools.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">What platforms do you work with?</h4>
                    <p class="text-gray-600">Instagram, TikTok, YouTube, Twitter, and emerging platforms.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">Can we approve content before posting?</h4>
                    <p class="text-gray-600">Yes, we facilitate full content review while maintaining authentic creator
                        voice.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-green-400 to-blue-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Start Your Influencer Campaign</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            Connect with authentic voices that amplify your brand
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4 items-center">
                        <a href="{{ route('contact') }}"
                            class="bg-white border-2 border-white text-blue-500 hover:bg-gray-100 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Launch Campaign
                        </a>
                        <a href="#"
                            class="border-2 border-white text-white hover:bg-gray-100/20 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            See Case Studies
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
