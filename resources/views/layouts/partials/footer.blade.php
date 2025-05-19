<footer class="bg-gray-800 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-10 mr-4">
                </div>
                <p class="text-gray-400 mb-4">Helping businesses grow digitally since 2015.</p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/digipalsolution" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/diigipal/" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/digipalsolutions/" target="_blank"
                        class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Services</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">SEO
                            Optimization</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">PPC
                            Advertising</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Web Design</a>
                    </li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Social
                            Media</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Email
                            Marketing</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Company</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-white transition duration-300">About Us</a>
                    </li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Our Team</a>
                    </li>
                    <li>
                        <a href="{{ route('careers') }}"
                            class="text-gray-400 hover:text-white transition duration-300 flex items-center gap-2">
                            Careers
                            <span
                                class="inline-block bg-green-500 text-white text-[10px] px-1 py-.5 rounded-full">New</span>
                        </a>
                    </li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Contact</a>
                    </li>
                </ul>
            </div>

            @livewire('app.newsletter-form')
        </div>

        <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 mb-4 md:mb-0">© {{ date('Y') }} Digipal. All rights reserved.</p>
            <div class="flex space-x-6">
                <a href="{{ route('privacy') }}" class="text-gray-400 hover:text-white transition duration-300">Privacy
                    Policy</a>
                <a href="{{ route('terms') }}" class="text-gray-400 hover:text-white transition duration-300">Terms of
                    Service</a>
                <a href="#" class="text-gray-400 hover:text-white transition duration-300">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
