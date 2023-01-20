<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Backend\MessagesController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Backend\SliderImageController;
use App\Http\Controllers\Backend\AnnouncementsController;
use App\Http\Controllers\Backend\ClientsController;


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/blogs', [PagesController::class, 'blogs'])->name('blogs');
Route::post('/contact-form', [PagesController::class, 'ajaxContactForm'])->name('contact.form');
Route::get('/blogs/{blog}/show', [PagesController::class, 'blogsShow'])->name('blogs.show');
Route::get('/blogs/{category}', [PagesController::class, 'blogsShowCategory'])->name('blogs.showcat');
Route::get('/services/{service}/show', [PagesController::class, 'servicesShow'])->name('services.show');
Route::get('/announcements/{announcement}/show', [PagesController::class, 'announcementsShow'])->name('announcements.show');

Auth::routes(['register' => false]);
Route::get('/home', [PagesController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'backend'], function () {

    Route::get('/pages/dashboard', function () { return view('backend.pages.dashboard'); })->name('backend.dashboard');

    // Blogs routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('backend.blogs');
    Route::get('/blogs/trashed', [BlogController::class, 'getTrashed'])->name('backend.blogs.trashed');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('backend.blogs.create');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('backend.blogs.store');
    Route::get('/blogs/{blog}/show', [BlogController::class, 'show'])->name('backend.blogs.show');
    Route::get('/blogs/{blog}/restore', [BlogController::class, 'restore'])->name('backend.blogs.restore');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('backend.blogs.edit');
    Route::patch('/blogs/{blog}/update', [BlogController::class, 'update'])->name('backend.blogs.update');
    Route::get('/blogs/{blog}/trash', [BlogController::class, 'trash'])->name('backend.blogs.trash');
    Route::get('/blogs/{blog}/delete', [BlogController::class, 'delete'])->name('backend.blogs.delete');
    Route::get('/blogs/delete-all', [BlogController::class, 'deleteAll'])->name('backend.blogs.delete-all');
    Route::get('/blogs/trash-all', [BlogController::class, 'trashAll'])->name('backend.blogs.trash-all');
    Route::get('/blogs/restore-all', [BlogController::class, 'restoreAll'])->name('backend.blogs.restore-all');

    // Categories routes
    Route::get('/categories', [CategoriesController::class, 'index'])->name('backend.categories');
    Route::get('/categories/trashed', [CategoriesController::class, 'getTrashed'])->name('backend.categories.trashed');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('backend.categories.create');
    Route::post('/categories/store', [CategoriesController::class, 'store'])->name('backend.categories.store');
    Route::get('/categories/{category}/show', [CategoriesController::class, 'show'])->name('backend.categories.show');
    Route::get('/categories/{category}/restore', [CategoriesController::class, 'restore'])->name('backend.categories.restore');
    Route::get('/categories/{category}/edit', [CategoriesController::class, 'edit'])->name('backend.categories.edit');
    Route::patch('/categories/{category}/update', [CategoriesController::class, 'update'])->name('backend.categories.update');
    Route::get('/categories/{category}/trash', [CategoriesController::class, 'trash'])->name('backend.categories.trash');
    Route::get('/categories/{category}/delete', [CategoriesController::class, 'delete'])->name('backend.categories.delete');

    // Announcements Routes
    Route::get('/announcements', [AnnouncementsController::class, 'index'])->name('backend.announcements');
    Route::get('/announcements/create', [AnnouncementsController::class, 'create'])->name('backend.announcements.create');
    Route::post('/announcements/store', [AnnouncementsController::class, 'store'])->name('backend.announcements.store');
    Route::get('/announcements/{announcement}/show', [AnnouncementsController::class, 'show'])->name('backend.announcements.show');
    Route::get('/announcements/{announcement}/edit', [AnnouncementsController::class, 'edit'])->name('backend.announcements.edit');
    Route::patch('/announcements/{announcement}/update', [AnnouncementsController::class, 'update'])->name('backend.announcements.update');
    Route::get('/announcements/{announcement}/delete', [AnnouncementsController::class, 'delete'])->name('backend.announcements.delete');

    // Update Password
    Route::get('/changepassword', [AccountController::class, 'password'])->name('backend.accounts.changepassword');
    Route::patch('/updatepassword', [AccountController::class, 'updateAccountPassword'])->name('backend.accounts.updatepassword');
    Route::get('/changeprofile', [AccountController::class, 'profile'])->name('backend.accounts.profile');
    Route::patch('/updateprofile', [AccountController::class, 'updateAccountProfile'])->name('backend.accounts.updateproflie');
    Route::get('/changeabout', [AboutController::class, 'aboutUs'])->name('backend.accounts.about');
    Route::patch('/updateabout/{about}', [AboutController::class, 'updateAboutUs'])->name('backend.accounts.updateabout');

    // Contacts Routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('backend.contacts');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('backend.contacts.create');
    Route::post('/contacts/store', [ContactController::class, 'store'])->name('backend.contacts.store');
    Route::get('/contacts/{contact}/show', [ContactController::class, 'show'])->name('backend.contacts.show');
    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('backend.contacts.edit');
    Route::patch('/contacts/{contact}/update', [ContactController::class, 'update'])->name('backend.contacts.update');
    Route::get('/contacts/{contact}/delete', [ContactController::class, 'delete'])->name('backend.contacts.delete');

    // Messages Routes
    Route::get('/messages', [MessagesController::class, 'index'])->name('backend.messages');
    Route::get('/messages/show/{id}', [MessagesController::class, 'show'])->name('backend.messages.show');
    Route::get('/messages/destroy/{id}', [MessagesController::class, 'destroy'])->name('backend.messages.destroy');

    // Gallery Routes
    Route::get('/gallery', [GalleryController::class, 'index'])->name('backend.gallery');
    Route::get('/gallery/manage', [GalleryController::class, 'manage'])->name('backend.gallery.manage');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('backend.gallery.create');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('backend.gallery.edit');
    Route::patch('/gallery/{id}/update', [GalleryController::class, 'update'])->name('backend.gallery.update');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('backend.gallery.store');
    Route::get('/gallery/{id}/delete', [GalleryController::class, 'destroy'])->name('backend.gallery.destroy');

    // Services Routes
    Route::get('/services', [ServicesController::class, 'index'])->name('backend.services');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('backend.services.create');
    Route::post('/services/store', [ServicesController::class, 'store'])->name('backend.services.store');
    Route::get('/services/show/{service}', [ServicesController::class, 'show'])->name('backend.services.show');
    Route::get('/services/edit/{service}', [ServicesController::class, 'edit'])->name('backend.services.edit');
    Route::patch('/services/update/{service}', [ServicesController::class, 'update'])->name('backend.services.update');
    Route::get('/services/destroy/{service}', [ServicesController::class, 'destroy'])->name('backend.services.destroy');

    // Team Routes
    Route::get('/teams', [TeamController::class, 'index'])->name('backend.teams');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('backend.teams.create');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('backend.teams.store');
    Route::get('/teams/show/{id}', [TeamController::class, 'show'])->name('backend.teams.show');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('backend.teams.edit');
    Route::patch('/teams/update/{id}', [TeamController::class, 'update'])->name('backend.teams.update');
    Route::get('/teams/destroy/{id}', [TeamController::class, 'destroy'])->name('backend.teams.destroy');

    // Slider Images
    Route::get('/sliders', [SliderImageController::class, 'sliderImage'])->name('backend.sliders');
    Route::get('/sliders/show/{id}', [SliderImageController::class, 'showImage'])->name('backend.sliders.show');
    Route::get('/sliders/create', [SliderImageController::class, 'createImage'])->name('backend.sliders.create');
    Route::post('/sliders/store', [SliderImageController::class, 'storeImage'])->name('backend.sliders.store');
    Route::get('/sliders/edit/{id}', [SliderImageController::class, 'editImage'])->name('backend.sliders.edit');
    Route::patch('/sliders/update/{id}', [SliderImageController::class, 'updateImage'])->name('backend.sliders.update');
    Route::get('/sliderimages/destroy/{id}', [SliderImageController::class, 'destroyImage'])->name('backend.sliders.destroy');


    // Clients Section
    Route::get('/clients', [ClientsController::class, 'clients'])->name('backend.clients');
    Route::get('/clients/show/{id}', [ClientsController::class, 'showClient'])->name('backend.clients.show');
    Route::get('/clients/create', [ClientsController::class, 'createClient'])->name('backend.clients.create');
    Route::post('/clients/store', [ClientsController::class, 'storeClient'])->name('backend.clients.store');
    Route::get('/clients/edit/{id}', [ClientsController::class, 'editClient'])->name('backend.clients.edit');
    Route::patch('/clients/update/{id}', [ClientsController::class, 'updateClient'])->name('backend.clients.update');
    Route::get('/clients/destroy/{id}', [ClientsController::class, 'destroyClient'])->name('backend.clients.destroy');
});

Route::get('/register', function() {
    return redirect('/');
});
