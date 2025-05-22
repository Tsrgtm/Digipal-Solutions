@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/podcast-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Professional
                    <span class="text-gradient">Podcast Production</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Launch and grow your podcast with full-service production and distribution solutions
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/podcast-studio.png') }}" alt="Podcast Studio"
                        class="rounded-xl w-full max-w-lg" loading="lazy">
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Complete Podcast
                        <span class="text-gradient">Solutions</span>
                    </h2>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-microphone class="w-8 h-8 text-blue-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Professional Recording</h3>
                                <p class="text-gray-600">Studio-quality audio production & editing</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-musical-note class="w-8 h-8 text-green-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Audio Branding</h3>
                                <p class="text-gray-600">Custom music beds & sound design</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-globe-alt class="w-8 h-8 text-purple-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Global Distribution</h3>
                                <p class="text-gray-600">Automated publishing to all major platforms</p>
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
                    Podcast Success
                    <span class="text-gradient">Metrics</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-blue-600 mb-2">500+</p>
                    <p class="font-semibold">Episodes Produced</p>
                    <p class="text-sm text-gray-600">Monthly output</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-green-600 mb-2">1M+</p>
                    <p class="font-semibold">Weekly Downloads</p>
                    <p class="text-sm text-gray-600">Across our network</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-purple-600 mb-2">95%</p>
                    <p class="font-semibold">Client Retention</p>
                    <p class="text-sm text-gray-600">Year-over-year</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm">
                    <p class="text-4xl font-bold text-blue-600 mb-2">24/7</p>
                    <p class="font-semibold">Production Support</p>
                    <p class="text-sm text-gray-600">Expert assistance</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Creation
                    <span class="text-gradient">Process</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Concept Development</h3>
                    <p class="text-gray-600">Show formatting & branding</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-green-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Recording</h3>
                    <p class="text-gray-600">Studio or remote sessions</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-purple-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Post-Production</h3>
                    <p class="text-gray-600">Editing & sound design</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Distribution</h3>
                    <p class="text-gray-600">Multi-platform publishing</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Podcast
                    <span class="text-gradient">Services</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-user-group class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Interview Shows</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Guest coordination
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Multi-track recording
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Episode show notes
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-book-open class="w-8 h-8 text-green-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Narrative Series</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Script writing
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Voiceover recording
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Soundscaping
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-megaphone class="w-8 h-8 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Promotion</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Social media clips
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            SEO-optimized show notes
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Email marketing
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
                    Podcast FAQs
                    <span class="text-gradient">Answered</span>
                </h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">How long does production take?</h4>
                    <p class="text-gray-600">Typical turnaround is 3-5 business days post-recording</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">Do you provide equipment?</h4>
                    <p class="text-gray-600">Yes, we offer full studio access or remote recording kits</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">Can you help with marketing?</h4>
                    <p class="text-gray-600">We offer complete promotion packages including social media and email
                        campaigns</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-purple-400 to-blue-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Launch Your Podcast</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            Amplify your voice and reach your audience effectively
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4 items-center">
                        <a href="{{ route('contact') }}"
                            class="bg-white border-2 border-white text-blue-500 hover:bg-gray-100 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Start Now
                        </a>
                        <a href="#"
                            class="border-2 border-white text-white hover:bg-gray-100/20 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Hear Samples
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
