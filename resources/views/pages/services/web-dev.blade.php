@extends('layouts.app')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('assets/images/webdev-hero.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Web Development
                    <span class="text-gradient">Solutions</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Crafting high-performance websites that drive results and elevate your digital presence
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Transformative Web
                        <span class="text-gradient">Development</span>
                    </h2>
                    <p class="text-gray-600 mb-8">
                        We create custom web solutions that combine cutting-edge technology with user-centric design.
                        Our full-stack development services ensure your website not only looks stunning but performs
                        exceptionally across all devices and platforms.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-clock class="w-6 h-6 text-blue-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Fast Loading</p>
                                <p class="text-sm text-gray-600">Optimized performance</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-device-phone-mobile class="w-6 h-6 text-green-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Responsive</p>
                                <p class="text-sm text-gray-600">Mobile-first approach</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-shield-check class="w-6 h-6 text-purple-600" />
                            </div>
                            <div>
                                <p class="font-semibold">Secure</p>
                                <p class="text-sm text-gray-600">HTTPS &amp; encryption</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <x-heroicon-o-cog class="w-6 h-6 text-blue-600" />
                            </div>
                            <div>
                                <p class="font-semibold">SEO Ready</p>
                                <p class="text-sm text-gray-600">Optimized structure</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('assets/images/webdev-feature.png') }}" alt="Web Development"
                        class="rounded-xl w-full max-w-lg">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Our Web Development
                    <span class="text-gradient">Stack</span>
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto">Modern technologies powering exceptional digital experiences</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-paint-brush class="w-8 h-8 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Frontend Development</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            React.js / Next.js
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Vue.js / Nuxt.js
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Tailwind CSS
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            TypeScript
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-server class="w-8 h-8 text-green-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Backend Development</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Node.js / Express
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Laravel / PHP
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            Python / Django
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-blue-500 mr-2" />
                            RESTful APIs
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <x-heroicon-o-wrench-screwdriver class="w-8 h-8 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-4">CMS & E-commerce</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            WordPress
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Shopify
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            WooCommerce
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-purple-500 mr-2" />
                            Custom CMS
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
                    Development
                    <span class="text-gradient">Process</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Discovery & Planning</h3>
                    <p class="text-gray-600">Requirements analysis and project scoping</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-green-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Design & Prototyping</h3>
                    <p class="text-gray-600">UI/UX design and interactive prototypes</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-purple-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Development & Testing</h3>
                    <p class="text-gray-600">Agile development and quality assurance</p>
                </div>
                <div class="process-step text-center p-6">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-blue-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Launch & Support</h3>
                    <p class="text-gray-600">Deployment and ongoing maintenance</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gradient-to-r from-blue-400 to-green-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-gray-100">
                <div>
                    <p class="text-4xl font-bold mb-2">500+</p>
                    <p class="text-blue-100">Websites Built</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">99.9%</p>
                    <p class="text-blue-100">Uptime Guarantee</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">4.8/5</p>
                    <p class="text-blue-100">Client Rating</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">24h</p>
                    <p class="text-blue-100">Support Response</p>
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
                    <h4 class="font-semibold text-lg mb-2">What's your development timeline?</h4>
                    <p class="text-gray-600">Typical projects take 4-8 weeks depending on complexity. We provide detailed
                        timelines after requirements analysis.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">Do you offer maintenance services?</h4>
                    <p class="text-gray-600">Yes, we provide ongoing support packages including updates, backups, and
                        security monitoring.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="font-semibold text-lg mb-2">Can you migrate existing websites?</h4>
                    <p class="text-gray-600">Absolutely! We specialize in website migrations with zero downtime guarantee.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="rounded-lg bg-gradient-to-r from-blue-500 to-green-400 p-12 shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="text-center">
                        <h3 class="text-4xl font-bold mb-4">Ready to Build Your Website?</h3>
                        <p class="text-lg leading-relaxed mt-4">
                            Let's discuss your project and create something amazing together
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
