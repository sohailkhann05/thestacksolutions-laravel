<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false, 'login' => 'false']);

Route::controller(App\Http\Controllers\HomeController::class)->group(
    function () {
        Route::get('/', 'home')->name('home');
        Route::get('/agency', 'agency')->name('agency');
        Route::get('/expertise', 'expertise')->name('expertise');
        Route::get('/expertise/web-design', 'expertise_web_design')->name('expertise_web_design');
        Route::get('/expertise/web-development', 'expertise_web_development')->name('expertise_web_development');
        Route::get('/expertise/ecommerce-solution', 'expertise_ecommerce_solution')->name('expertise_ecommerce_solution');
        Route::get('/expertise/content-writing', 'expertise_content_writing')->name('expertise_content_writing');
        Route::get('/projects', 'projects')->name('projects');
        Route::get('/projects/{slug}', 'project_details')->name('project_details');
        Route::get('/people', 'people')->name('people');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blog/{slug}', 'blog_details')->name('blog_details');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/about', 'about')->name('about');
    }
);
