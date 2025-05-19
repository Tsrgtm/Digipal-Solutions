{{-- careers.blade.php (Archive) --}}
@extends('layouts.app')

@section('content')
    <section class="relative">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-100 mb-6">
                    Join Our <span class="text-gradient">Creative Team</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    We're always looking for talented individuals to join our team. If you're passionate about digital
                    innovation and want to make a difference, send us your resume!
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <x-heroicon-o-briefcase class="w-8 h-8 text-blue-600" />
                            </div>
                            <div>
                                <h2 class="text-xl font-bold">UI/UX Designer</h2>
                                <p class="text-gray-600 text-sm">Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                                Full-time
                            </span>
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">
                                Design
                            </span>
                        </div>

                        <p class="text-gray-600 mb-6 line-clamp-3">We are looking for a highly skilled UI/UX Designer
                            to join our team. The ideal candidate will have a strong portfolio showcasing their
                            skills and experience in designing clean, user-centered interfaces. You will be
                            responsible for creating wireframes, prototypes, and high-fidelity designs for our web
                            applications and mobile applications.</p>

                        <a href="{{ route('single.career') }}"
                            class="w-full inline-flex justify-center items-center text-white bg-blue-600 font-semibold px-4 py-2 rounded-md shadow-sm hover:bg-blue-700 transition-colors group uppercase">
                            Apply Now
                            <x-heroicon-o-arrow-right class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <x-heroicon-o-briefcase class="w-8 h-8 text-blue-600" />
                            </div>
                            <div>
                                <h2 class="text-xl font-bold">Software Engineer</h2>
                                <p class="text-gray-600 text-sm">Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                                Full-time
                            </span>
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">
                                Engineering
                            </span>
                        </div>

                        <p class="text-gray-600 mb-6 line-clamp-3">We are looking for a highly skilled Software
                            Engineer to join our team. The ideal candidate will have a strong background in computer
                            science, software engineering, or a related field, with 2+ years of experience in
                            developing web applications.</p>

                        <a href="{{ route('single.career') }}"
                            class="w-full inline-flex justify-center items-center text-white bg-blue-600 font-semibold px-4 py-2 rounded-md shadow-sm hover:bg-blue-700 transition-colors group uppercase">
                            Apply Now
                            <x-heroicon-o-arrow-right class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <x-heroicon-o-briefcase class="w-8 h-8 text-blue-600" />
                            </div>
                            <div>
                                <h2 class="text-xl font-bold">Digital Marketing Specialist</h2>
                                <p class="text-gray-600 text-sm">Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                                Full-time
                            </span>
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">
                                Marketing
                            </span>
                        </div>

                        <p class="text-gray-600 mb-6 line-clamp-3">We are looking for a highly skilled Digital
                            Marketing Specialist to join our team. The ideal candidate will have a strong background in
                            digital marketing, with 2+ years of experience in developing and implementing successful
                            digital marketing campaigns.</p>

                        <a href="{{ route('single.career') }}"
                            class="w-full inline-flex justify-center items-center text-white bg-blue-600 font-semibold px-4 py-2 rounded-md shadow-sm hover:bg-blue-700 transition-colors group uppercase">
                            Apply Now
                            <x-heroicon-o-arrow-right class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="text-center mt-16 min-h-[40vh] flex flex-col justify-center">
                <h2 class="text-2xl font-bold text-gray-600 mb-4">No current openings</h2>
                <p class="text-gray-500">We don't have any job openings at the moment. Please check back later or send us
                    your resume to keep it on file.</p>
            </div> --}}
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-to-r from-blue-500 to-green-400 p-12 rounded-xl">
                <h2 class="text-4xl font-bold mb-4 text-white">Don't See Your Perfect Role?</h2>
                <p class="text-white mb-8">We're always looking for talented individuals. Send us your resume!</p>
                <a href="mailto:careers@digipalsolutions.com"
                    class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:opacity-90">
                    Send Unsolicited Application
                </a>
            </div>
        </div>
    </section>
@endsection
