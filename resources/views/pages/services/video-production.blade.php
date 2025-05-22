@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/video-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Professional
                    <span class="text-gradient">Video Production</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Cinematic storytelling that captivates audiences and drives action
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Full-Service
                        <span class="text-gradient">Production</span>
                    </h2>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-light-bulb class="w-8 h-8 text-blue-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Concept Development</h3>
                                <p class="text-gray-600">Creative storytelling & script writing</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-film class="w-8 h-8 text-green-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Professional Filming</h3>
                                <p class="text-gray-600">4K/8K resolution with cinematic equipment</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                <x-heroicon-o-scissors class="w-8 h-8 text-purple-600" />
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Post-Production</h3>
                                <p class="text-gray-600">Editing, color grading & motion graphics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative w-full max-w-lg">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-green-400 opacity-20 rounded-xl">
                        </div>
                        <video class="rounded-xl relative z-10" controls
                            poster="{{ asset('assets/images/video-poster.jpg') }}">
                            <source src="{{ asset('assets/videos/showreel.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Production
                    <span class="text-gradient">Capabilities</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-video-camera class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Corporate Videos</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Brand documentaries
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Training videos
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Product demos
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-sparkles class="w-8 h-8 text-green-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Commercial Production</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            TV commercials
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Social media ads
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Explainer videos
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-photo class="w-8 h-8 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Event Coverage</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Conference filming
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Live streaming
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Highlight reels
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
                    Our Production
                    <span class="text-gradient">Process</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-5 gap-8">
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Consultation</h3>
                    <p class="text-gray-600">Understanding your vision</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-green-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pre-Production</h3>
                    <p class="text-gray-600">Scripting & planning</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-purple-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Filming</h3>
                    <p class="text-gray-600">High-quality capture</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Post-Production</h3>
                    <p class="text-gray-600">Editing & effects</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-green-600 font-bold text-2xl">5</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Delivery</h3>
                    <p class="text-gray-600">Final files & formats</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-blue-400 to-green-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Start Your Video Project</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            Let's create visual content that makes an impact
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4 items-center">
                        <a href="{{ route('contact') }}"
                            class="bg-white border-2 border-white text-green-500 hover:bg-gray-100 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            Discuss Project
                        </a>
                        <a href="#"
                            class="border-2 border-white text-white hover:bg-gray-100/20 px-6 py-3 rounded-md font-semibold uppercase transition duration-300">
                            View Showreel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
