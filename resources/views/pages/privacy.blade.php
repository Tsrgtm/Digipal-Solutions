@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/privacy-bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 text-center relative">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6 leading-tight">
                Privacy <span class="text-gradient">Policy</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Your privacy is important to us. This policy explains how we collect, use, and protect your personal
                information in connection with our digital marketing services.
            </p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div class="prose-lg text-gray-600">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Information We Collect</h2>
                    <p class="mb-6">
                        We may collect personal information when you interact with our services, including:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Contact information (name, email, phone number)</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Business information (company name, website URL)</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Usage data and website analytics</span>
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4">How We Use Information</h2>
                    <p class="mb-6">
                        The information we collect helps us to:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Provide and improve our services</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Communicate with clients about projects</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Analyze website performance and user behavior</span>
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Data Protection</h2>
                    <p class="mb-6">
                        We implement appropriate security measures to protect your information, including:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <x-heroicon-o-shield-check class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                            <span>SSL encrypted communication</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-shield-check class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Regular security audits</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-shield-check class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Limited access to sensitive data</span>
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Third-Party Services</h2>
                    <p class="mb-6">
                        We may use third-party services that collect information to help us:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold mb-2">Google Analytics</h3>
                            <p class="text-sm">Website usage tracking and analytics</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold mb-2">Email Services</h3>
                            <p class="text-sm">Client communication and support</p>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Your Rights</h2>
                    <p class="mb-6">
                        You have the right to:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <x-heroicon-o-user-circle class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Access your personal information</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-user-circle class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Request correction of inaccurate data</span>
                        </li>
                        <li class="flex items-start">
                            <x-heroicon-o-user-circle class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" />
                            <span>Request deletion of your personal data</span>
                        </li>
                    </ul>

                    <div class="bg-gray-50 p-8 rounded-lg mt-12">
                        <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                        <p class="mb-4">For privacy-related inquiries, please contact us at:</p>
                        <div class="flex items-center gap-4">
                            <a href="mailto:privacy@digipalsolutions.com"
                                class="text-blue-600 hover:text-blue-700 flex items-center">
                                <x-heroicon-o-envelope class="w-5 h-5 mr-2" />
                                privacy@digipalsolutions.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.partials.cta')
@endsection
