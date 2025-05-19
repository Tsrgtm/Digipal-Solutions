@extends('layouts.app')

@section('content')
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Let's Start Your
                    <span class="text-gradient">Digital Journey</span>
                </h1>
                <p class="text-gray-600 text-lg max-w-xl mx-auto">
                    Have questions or ready to begin? Reach out to us - we're here to help you grow digitally.
                </p>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
                <!-- Contact Info -->
                <div class="p-4 sm:p-8 space-y-8">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-blue-100 p-3 rounded-lg">
                                    <x-heroicon-o-map-pin class="w-6 h-6 text-blue-600" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Our Office</h3>
                                <p class="text-gray-600 mt-1">
                                    Kalika Marg 4-32,<br>
                                    Kathmandu 44600
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-green-100 p-3 rounded-lg">
                                    <x-heroicon-o-phone class="w-6 h-6 text-green-600" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Call Us</h3>
                                <p class="text-gray-600 mt-1">
                                    {{-- +977 9841 234567<br> --}}
                                    +977 01-5912819
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-blue-100 p-3 rounded-lg">
                                    <x-heroicon-o-envelope class="w-6 h-6 text-blue-600" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-800">Email Us</h3>
                                <p class="text-gray-600 mt-1">
                                    info@digipalsolutions.com.np
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="rounded-lg overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.393321818564!2d85.3274953!3d27.705139799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ee9a63911f%3A0xdf64d2a0058c159b!2sDigipal%20Solutions%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1747280991135!5m2!1sen!2snp"
                            class="w-full
                            h-64 border-0" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-gray-50">

                    @livewire('app.contact-form')
                    {{-- <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Full Name</label>
                            <input type="text" name="name"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Email</label>
                            <input type="email" name="email"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Phone</label>
                            <input type="tel" name="phone"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Services Interested In</label>
                            <select name="service"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select a service</option>
                                <option value="seo">SEO Optimization</option>
                                <option value="ppc">PPC Advertising</option>
                                <option value="web-design">Web Design</option>
                                <option value="social-media">Social Media Marketing</option>
                                <option value="email">Email Marketing</option>
                                <option value="analytics">Analytics</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Message</label>
                            <textarea name="message" rows="3"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-green-400 text-white py-3 px-8 rounded-lg font-semibold uppercase hover:opacity-90 transition duration-300">
                            Send Message
                        </button>
                    </form> --}}
                </div>

            </div>
        </div>
    </section>
@endsection
