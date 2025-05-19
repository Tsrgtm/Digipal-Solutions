{{-- blog/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <section class="relative bg-gradient-to-r from-blue-500 to-green-400 min-h-[30vh] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-16">
            <div class="text-center max-w-3xl mx-auto">
                <p class="text-gray-200 uppercase text-sm font-semibold tracking-wider mb-6">Blog</p>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Post Title</h1>
                <div class="flex items-center justify-center space-x-4 text-gray-200">
                    <span><x-heroicon-o-user-circle class="w-5 h-5 inline mr-1" />John Doe</span>
                    <span>•</span>
                    <span><x-heroicon-o-clock class="w-5 h-5 inline mr-1" />5 min read</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto prose lg:prose-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed,
                    convallis ex. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus
                    et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed,
                    convallis ex. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus
                    et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>
    </section>
@endsection
