<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::post("refresh", [\App\Http\Controllers\AuthController::class, "refreshToken"]);

Route::get('pages/{page}', [\App\Http\Controllers\Api\PagesController::class, 'show'])->name('pages.show');
Route::get('/logos', [\App\Http\Controllers\Api\EventLogoController::class, 'index'])->name('logos.index');
Route::get('/events/case_studies/{per_page?}', [\App\Http\Controllers\Api\EventController::class, 'index'])->name('events.index');
Route::get('/event/case_study/{id}',[\App\Http\Controllers\Api\EventController::class, 'show'])->name('events.show');
Route::get('/events/categories/{cat?}', [\App\Http\Controllers\Api\CategoryController::class, 'events'])->name('events.categories');
Route::get('/services', [\App\Http\Controllers\Api\ServiceController::class, 'index'])->name('services.index');
Route::get('/clients', [\App\Http\Controllers\Api\ClientsController::class, 'index'])->name('clients.index');
Route::get('testimonials', [\App\Http\Controllers\Api\TestimonialsController::class, 'index'])->name('testimonials.index');
Route::get('testimonial/{id}', [\App\Http\Controllers\Api\TestimonialsController::class, 'getOne'])->name('testimonials.getOne');
Route::get('/blog/posts/{per_page?}', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts.index');
Route::get('/blog/post/{id}',[\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');
Route::get('/blog/categories', [\App\Http\Controllers\Api\CategoryController::class, 'index'])->name('categories.index');
Route::get('gallery/{per_page?}', [\App\Http\Controllers\Api\GalleryController::class, 'index'])->name('gallery.index');
Route::get('team', [\App\Http\Controllers\Api\TeamController::class, 'index'])->name('team.index');
Route::get('/process', [\App\Http\Controllers\Api\ProcessController::class, 'index'])->name('process.index');

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('pages/{page}', [\App\Http\Controllers\Api\PagesController::class, 'update'])->name('pages.update');
    Route::post('/logos', [\App\Http\Controllers\Api\EventLogoController::class, 'store'])->name('logos.store');
    Route::delete('/logos/{id}', [\App\Http\Controllers\Api\EventLogoController::class, 'delete'])->name('logos.delete');
    Route::delete('/event/case_study/{id}', [\App\Http\Controllers\Api\EventController::class, 'delete'])->name('events.delete');
    Route::post('/event/case_study/edit', [\App\Http\Controllers\Api\EventController::class, 'createOrUpdate'])->name('events.createOrUpdate');
    Route::delete('/event/case_study/{type}/{eventID}/{photoID}', [\App\Http\Controllers\Api\EventController::class, 'deletePhoto']);
    Route::post('/services', [\App\Http\Controllers\Api\ServiceController::class, 'store'])->name('services.store');
    Route::delete('/services/{id}', [\App\Http\Controllers\Api\ServiceController::class, 'delete'])->name('services.remove');
    Route::post('/clients', [\App\Http\Controllers\Api\ClientsController::class, 'store'])->name('clients.store');
    Route::delete('/clients/{id}', [\App\Http\Controllers\Api\ClientsController::class, 'delete'])->name('clients.remove');
    Route::post('testimonial', [\App\Http\Controllers\Api\TestimonialsController::class, 'store'])->name('testimonials.store');
    Route::post('testimonial/attach', [\App\Http\Controllers\Api\TestimonialsController::class, 'attach'])->name('testimonials.attach');
    Route::delete('/testimonial/{id}', [\App\Http\Controllers\Api\TestimonialsController::class, 'delete'])->name('testimonials.delete');
    Route::post('/blog/posts/edit', [\App\Http\Controllers\Api\PostController::class, 'createOrUpdate'])->name('posts.create');
    Route::delete('/blog/post/{id}', [\App\Http\Controllers\Api\PostController::class, 'delete'])->name('posts.delete');
    Route::post('/categories/', [\App\Http\Controllers\Api\CategoryController::class, 'store'])->name('categories.store');
    Route::post('/categories/delete', [\App\Http\Controllers\Api\CategoryController::class, 'delete'])->name('categories.delete');
    Route::post('gallery', [\App\Http\Controllers\Api\GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/{id}', [\App\Http\Controllers\Api\GalleryController::class, 'delete'])->name('gallery.delete');
    Route::post('team', [\App\Http\Controllers\Api\TeamController::class, 'store'])->name('team.store');
    Route::post('/process', [\App\Http\Controllers\Api\ProcessController::class, 'store'])->name('process.store');
    Route::delete('/event/{id}', [\App\Http\Controllers\Api\EventController::class, 'deleteTemplate'])->name('template.delete');
});
