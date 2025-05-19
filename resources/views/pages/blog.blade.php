{{-- blog/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/blog-bg.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Latest <span class="text-gradient">Insights</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Discover expert perspectives on digital marketing, technology trends, and business growth strategies.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                {{-- Main Content --}}
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <article
                            class="blog-card bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog-post-1.jpg') }}" alt="Blog Post"
                                    class="w-full h-48 object-cover rounded-t-xl">
                            </a>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">Digital
                                        Marketing</span>
                                    <span class="text-sm text-gray-500"><x-heroicon-o-calendar
                                            class="w-4 h-4 inline mr-1" />Jun 10, 2022</span>
                                </div>
                                <h2 class="text-xl font-bold mb-3">
                                    <a href="#" class="hover:text-blue-600 transition-colors">5 Ways to Boost Your
                                        Online Presence</a>
                                </h2>
                                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                                <a href="#" class="text-blue-600 font-medium flex items-center group">
                                    Read More <x-heroicon-o-arrow-right
                                        class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" />
                                </a>
                            </div>
                        </article>
                        <article
                            class="blog-card bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog-post-2.jpg') }}" alt="Blog Post"
                                    class="w-full h-48 object-cover rounded-t-xl">
                            </a>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm bg-green-100 text-green-600 px-3 py-1 rounded-full">Web
                                        Development</span>
                                    <span class="text-sm text-gray-500"><x-heroicon-o-calendar
                                            class="w-4 h-4 inline mr-1" />May 15, 2022</span>
                                </div>
                                <h2 class="text-xl font-bold mb-3">
                                    <a href="#" class="hover:text-blue-600 transition-colors">10 Best Practices for
                                        Building a Scalable E-commerce Website</a>
                                </h2>
                                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                                <a href="#" class="text-blue-600 font-medium flex items-center group">
                                    Read More <x-heroicon-o-arrow-right
                                        class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" />
                                </a>
                            </div>
                        </article>
                        <article
                            class="blog-card bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog-post-3.jpg') }}" alt="Blog Post"
                                    class="w-full h-48 object-cover rounded-t-xl">
                            </a>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full">SEO</span>
                                    <span class="text-sm text-gray-500"><x-heroicon-o-calendar
                                            class="w-4 h-4 inline mr-1" />Apr 20, 2022</span>
                                </div>
                                <h2 class="text-xl font-bold mb-3">
                                    <a href="#" class="hover:text-blue-600 transition-colors">How to Optimize Your
                                        Website
                                        for Voice Search</a>
                                </h2>
                                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                                <a href="#" class="text-blue-600 font-medium flex items-center group">
                                    Read More <x-heroicon-o-arrow-right
                                        class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" />
                                </a>
                            </div>
                        </article>
                        <article
                            class="blog-card bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog-post-4.jpg') }}" alt="Blog Post"
                                    class="w-full h-48 object-cover rounded-t-xl">
                            </a>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">Digital
                                        Marketing</span>
                                    <span class="text-sm text-gray-500"><x-heroicon-o-calendar
                                            class="w-4 h-4 inline mr-1" />Mar 10, 2022</span>
                                </div>
                                <h2 class="text-xl font-bold mb-3">
                                    <a href="#" class="hover:text-blue-600 transition-colors">7 Essential Tools for
                                        Digital
                                        Marketing</a>
                                </h2>
                                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
                                <a href="#" class="text-blue-600 font-medium flex items-center group">
                                    Read More <x-heroicon-o-arrow-right
                                        class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" />
                                </a>
                            </div>
                        </article>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h3 class="text-lg font-bold mb-4">Categories</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-blue-600 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <span>Digital Marketing</span>
                                    <span class="bg-gray-200 px-2 rounded-full text-sm">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-blue-600 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <span>Web Development</span>
                                    <span class="bg-gray-200 px-2 rounded-full text-sm">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-between text-gray-600 hover:text-blue-600 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <span>SEO</span>
                                    <span class="bg-gray-200 px-2 rounded-full text-sm">3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.partials.cta')
@endsection
