@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/smm-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative">
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
    {{-- Additional sections similar to previous templates --}}
@endsection
