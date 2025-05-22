<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/career/apply', function () {
    return view('pages.single-career');
})->name('single.career');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog/show', function () {
    return view('pages.single-blog');
})->name('blog.show');

Route::group(['prefix' => 'services'], function () {
    Route::get('/', function () {
        return view('pages.services');
    })->name('services');

    Route::get('web-devlopment', function () {
        return view('pages.services.web-dev');
    })->name('services.web-dev');

    Route::get('search-engine-optimization', function () {
        return view('pages.services.seo');
    })->name('services.seo');

    Route::get('social-media-marketing', function () {
        return view('pages.services.smm');
    })->name('services.smm');

    Route::get('influencer-marketing', function () {
        return view('pages.services.influencer');
    })->name('services.influencer');

    Route::get('video-production', function () {
        return view('pages.services.video-production');
    })->name('services.video');

    Route::get('podcast-creation', function () {
        return view('pages.services.podcast-creation');
    })->name('services.podcast');
});
