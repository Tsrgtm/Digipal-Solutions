{{-- careers-show.blade.php (Single) --}}
@extends('layouts.app')

@section('content')
    <section class="relative bg-gradient-to-r from-blue-500 to-green-400 min-h-[30vh] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">UI/UX Designer</h1>
                <div class="flex items-center justify-center space-x-4 text-gray-200">
                    <div class="flex items-center">
                        <x-heroicon-o-map-pin class="w-5 h-5 mr-2" />
                        Kathmandu, Nepal
                    </div>
                    <div class="flex items-center">
                        <x-heroicon-o-clock class="w-5 h-5 mr-2" />
                        Full-time
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                {{-- Main Content --}}
                <div class="md:col-span-2">
                    <article class="prose max-w-none">
                        <h2 class="text-2xl font-bold mb-6">Job Description</h2>
                        <p>
                            We are looking for a highly skilled UI/UX Designer to join our team. The ideal candidate will
                            have a strong background in user experience design, with 2+ years of experience in developing
                            and implementing successful user experiences.
                        </p>

                        <h2 class="text-2xl font-bold mt-12 mb-6">Requirements</h2>
                        <ul class="list-disc list-inside">
                            <li>Bachelor's degree in Design, Human-Computer Interaction, or related field;</li>
                            <li>2+ years of experience in user experience design;</li>
                            <li>Strong understanding of user-centered design principles, human-computer interaction, and
                                usability;</li>
                            <li>Proficient in design tools such as Sketch, Figma, Adobe XD, or InVision;</li>
                            <li>Strong communication and collaboration skills.</li>
                        </ul>

                        <h2 class="text-2xl font-bold mt-12 mb-6">What We Offer</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-lg mr-4">
                                    <x-heroicon-o-check-circle class="w-6 h-6 text-green-600" />
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold">Competitive Salary</h3>
                                    <p class="text-gray-600 text-sm">We offer a competitive salary to our team members.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-lg mr-4">
                                    <x-heroicon-o-check-circle class="w-6 h-6 text-green-600" />
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold">Flexible Work Environment</h3>
                                    <p class="text-gray-600 text-sm">We offer a flexible work environment to our team
                                        members.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-lg mr-4">
                                    <x-heroicon-o-check-circle class="w-6 h-6 text-green-600" />
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold">Opportunities for Growth</h3>
                                    <p class="text-gray-600 text-sm">We offer opportunities for growth to our team members.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <div class="mt-16">
                        <h2 class="text-2xl font-bold mb-6">Apply Now</h2>
                        <form action="#" method="POST" class="space-y-6 bg-white p-8 rounded-xl shadow-lg">
                            @csrf
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Full Name</label>
                                <input type="text" name="name"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required />
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Email</label>
                                <input type="email" name="email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required />
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2 font-medium">Resume</label>
                                <input type="file" name="resume"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required />
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                Apply Now
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="space-y-8">
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <h3 class="text-xl font-bold mb-6">Job Overview</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <x-heroicon-o-calendar class="w-5 h-5 text-gray-500 mr-4" />
                                <div>
                                    <p class="text-sm text-gray-600">Posted Date</p>
                                    <p class="font-medium">February 22, 2023</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <x-heroicon-o-currency-dollar class="w-5 h-5 text-gray-500 mr-4" />
                                <div>
                                    <p class="text-sm text-gray-600">Salary</p>
                                    <p class="font-medium">Negotiable</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-8 rounded-xl">
                        <h3 class="text-xl font-bold mb-6">Have Questions?</h3>
                        <p class="text-gray-600 mb-6">Contact our HR team for more information:</p>
                        <a href="mailto:hr@digipalsolutions.com"
                            class="inline-flex items-center text-blue-600 font-semibold">
                            <x-heroicon-o-envelope class="w-5 h-5 mr-2" />
                            hr@digipalsolutions.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
