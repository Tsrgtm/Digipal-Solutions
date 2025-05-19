@extends('layouts.app')

@section('content')
    <section class="relative">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 text-center relative">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6 leading-tight">
                Terms of <span class="text-gradient">Service</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Governing your use of our digital services and website
            </p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto prose-lg text-gray-600">
                <div class="bg-gray-50 p-6 rounded-lg mb-12">
                    <p class="text-sm text-gray-500">Effective Date: 15th May 2025</p>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">1. Acceptance of Terms</h2>
                <p class="mb-8">
                    By accessing or using any services provided by {{ config('app.name') }} ("we", "us", or "our"),
                    including our website {{ config('app.url') }}, you agree to be bound by these Terms of Service.
                </p>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">2. Service Description</h2>
                <p class="mb-8">
                    We provide digital solutions including but not limited to:
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <li class="flex items-start">
                        <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Website development services</span>
                    </li>
                    <li class="flex items-start">
                        <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Digital marketing solutions</span>
                    </li>
                    <li class="flex items-start">
                        <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Consulting services</span>
                    </li>
                    <li class="flex items-start">
                        <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Technical support</span>
                    </li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">3. User Obligations</h2>
                <div class="space-y-6 mb-8">
                    <div class="flex items-start">
                        <x-heroicon-o-shield-check class="w-6 h-6 text-blue-500 mr-3 mt-1 flex-shrink-0" />
                        <div>
                            <h3 class="font-semibold mb-2">Lawful Use</h3>
                            <p>You agree not to use our services for any unlawful purpose or in violation of any applicable
                                regulations</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <x-heroicon-o-document-text class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0" />
                        <div>
                            <h3 class="font-semibold mb-2">Accurate Information</h3>
                            <p>You must provide truthful information when using our services</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">4. Intellectual Property</h2>
                <div class="space-y-6 mb-8">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="font-semibold mb-3">Company Materials</h3>
                        <p>All content on our website including logos, text, and graphics are our exclusive property</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="font-semibold mb-3">User Content</h3>
                        <p>You retain ownership of materials you provide, but grant us a non-exclusive license to use them
                            for service delivery</p>
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">5. Third-Party Services</h2>
                <p class="mb-8">
                    Our services may integrate with or link to third-party platforms. We are not responsible for:
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex">
                        <x-heroicon-o-x-mark class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Content accuracy of third-party services</span>
                    </li>
                    <li class="flex">
                        <x-heroicon-o-x-mark class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Technical issues with external platforms</span>
                    </li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">6. Service Modifications</h2>
                <div class="bg-blue-50 p-6 rounded-lg mb-8">
                    <p class="text-sm">
                        We reserve the right to modify or discontinue services at any time without notice
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">7. Disclaimer of Warranties</h2>
                <p class="mb-8">
                    Our services are provided "as is" without any warranties, expressed or implied. We do not guarantee:
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex">
                        <x-heroicon-o-x-mark class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Error-free operation of our website</span>
                    </li>
                    <li class="flex">
                        <x-heroicon-o-x-mark class="w-5 h-5 text-red-500 mr-2 mt-1 flex-shrink-0" />
                        <span>Continuous availability of services</span>
                    </li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-6">8. Governing Law</h2>
                <div class="flex items-center mb-8">
                    <x-heroicon-o-building-library class="w-6 h-6 text-gray-600 mr-3" />
                    <span>These terms are governed by the laws of Nepal without regard to conflict of law
                        principles</span>
                </div>

                <div class="bg-gray-50 p-8 rounded-lg mt-12">
                    <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                    <p class="mb-4">For questions about these Terms:</p>
                    <div class="flex flex-col md:flex-row gap-6">
                        <a href="mailto:legal@digipalsolutions.com.np"
                            class="text-blue-600 hover:text-blue-700 flex items-center">
                            <x-heroicon-o-envelope class="w-5 h-5 mr-2" />
                            legal@digipalsolutions.com.np
                        </a>
                        <span class="hidden md:block text-gray-400">|</span>
                        <a href="{{ url('/contact') }}" class="text-blue-600 hover:text-blue-700 flex items-center">
                            <x-heroicon-o-chat-bubble-left-ellipsis class="w-5 h-5 mr-2" />
                            Contact Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.partials.cta')
@endsection
