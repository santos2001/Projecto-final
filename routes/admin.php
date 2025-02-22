<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Grupo de Rotas Autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);
        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);;
        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });

    /* Events */
    Route::get('admin/event/index', ['as' => 'admin.event.index', 'uses' => 'Admin\EventController@list']);
    Route::get('admin/event/show/{id}', ['as' => 'admin.event.show', 'uses' => 'Admin\EventController@show']);
    Route::get('admin/event/create', ['as' => 'admin.event.create', 'uses' => 'Admin\EventController@create']);
    Route::post('admin/event/store', ['as' => 'admin.event.store', 'uses' => 'Admin\EventController@store']);
    Route::get('admin/event/edit/{id}', ['as' => 'admin.event.edit', 'uses' => 'Admin\EventController@edit']);
    Route::put('admin/event/update/{id}', ['as' => 'admin.event.update', 'uses' => 'Admin\EventController@update']);
    Route::get('admin/event/delete/{id}', ['as' => 'admin.event.delete', 'uses' => 'Admin\EventController@destroy'])->withoutMiddleware(['EditorAnalist'])->middleware(['Editor']);
    /* end Events */


    /* faq */
    Route::get('admin/faq/index', ['as' => 'admin.faq.index', 'uses' => 'Admin\FaqController@list']);
    Route::get('admin/faq/show/{id}', ['as' => 'admin.faq.show', 'uses' => 'Admin\FaqController@show']);
    Route::get('admin/faq/create', ['as' => 'admin.faq.create', 'uses' => 'Admin\FaqController@create']);
    Route::post('admin/faq/store', ['as' => 'admin.faq.store', 'uses' => 'Admin\FaqController@store']);
    Route::get('admin/faq/edit/{id}', ['as' => 'admin.faq.edit', 'uses' => 'Admin\FaqController@edit']);
    Route::put('admin/faq/update/{id}', ['as' => 'admin.faq.update', 'uses' => 'Admin\FaqController@update']);
    Route::get('admin/faq/delete/{id}', ['as' => 'admin.faq.delete', 'uses' => 'Admin\FaqController@destroy']);
    /* end faq */

    /* gallery */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
    /* end gallery */

    /* imageGallery */
    Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* End imageGallery */

        /* imageGallery */
        Route::get('admin/About/edit/{id}', ['as' => 'admin.about.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/About/store/{id}', ['as' => 'admin.about.store', 'uses' => 'Admin\ImageGalleryController@store']);
        Route::get('admin/About/show/{id}', ['as' => 'admin.about.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */


    /* speaker */
    Route::get('admin/speaker/index', ['as' => 'admin.speaker.index', 'uses' => 'Admin\SpeakerController@index']);
    Route::get('admin/speaker/show/{id}', ['as' => 'admin.speaker.show', 'uses' => 'Admin\SpeakerController@show']);
    Route::get('admin/speaker/create', ['as' => 'admin.speaker.create', 'uses' => 'Admin\SpeakerController@create']);
    Route::post('admin/speaker/store', ['as' => 'admin.speaker.store', 'uses' => 'Admin\SpeakerController@store']);
    Route::get('admin/speaker/edit/{id}', ['as' => 'admin.speaker.edit', 'uses' => 'Admin\SpeakerController@edit']);
    Route::put('admin/speaker/update/{id}', ['as' => 'admin.speaker.update', 'uses' => 'Admin\SpeakerController@update']);
    Route::get('admin/speaker/delete/{id}', ['as' => 'admin.speaker.delete', 'uses' => 'Admin\SpeakerController@destroy']);
    Route::get('admin/speaker/credencial/{code}', ['as' => 'admin.speaker.print', 'uses' => 'Admin\SpeakerController@print']);


    /* moderador */
    Route::get('admin/moderador/index', ['as' => 'admin.moderators.index', 'uses' => 'Admin\ModeratorsController@index']);
    Route::get('admin/moderador/show/{id}', ['as' => 'admin.moderators.show', 'uses' => 'Admin\ModeratorsController@show']);
    Route::get('admin/moderador/create', ['as' => 'admin.moderators.create', 'uses' => 'Admin\ModeratorsController@create']);
    Route::post('admin/moderador/store', ['as' => 'admin.moderators.store', 'uses' => 'Admin\ModeratorsController@store']);
    Route::get('admin/moderador/edit/{id}', ['as' => 'admin.moderators.edit', 'uses' => 'Admin\ModeratorsController@edit']);
    Route::put('admin/moderador/update/{id}', ['as' => 'admin.moderators.update', 'uses' => 'Admin\ModeratorsController@update']);
    Route::get('admin/moderador/delete/{id}', ['as' => 'admin.moderators.delete', 'uses' => 'Admin\ModeratorsController@destroy']);
    Route::get('admin/moderador/credencial/{code}', ['as' => 'admin.moderators.print', 'uses' => 'Admin\ModeratorsController@print']);


    Route::get('admin/registration/create', ['as' => 'admin.registration.create', 'uses' => 'Admin\RegistrationController@create']);
    Route::post('admin/registration/store', ['as' => 'admin.registration.store', 'uses' => 'Admin\RegistrationController@store']);

    Route::get('admin/registration/index', ['as' => 'admin.registration.index', 'uses' => 'Admin\RegistrationController@index']);
    Route::get('admin/registration/show/{id}', ['as' => 'admin.registration.show', 'uses' => 'Admin\RegistrationController@show']);
    Route::get('admin/registration/edit/{id}', ['as' => 'admin.registration.edit', 'uses' => 'Admin\RegistrationController@edit']);
    Route::put('admin/registration/update/{id}', ['as' => 'admin.registration.update', 'uses' => 'Admin\RegistrationController@update']);
    Route::get('admin/registration/credencial/{code}', ['as' => 'admin.credencial.guest.print', 'uses' => 'Admin\RegistrationController@print']);
    Route::get('admin/registration/list', ['as' => 'admin.registration.list', 'uses' => 'Admin\RegistrationController@list']);

    /* company */
    Route::get('/admin/Empresas/list', ['as' => 'admin.company.list', 'uses' => 'Admin\CompanyController@list']);
    Route::get('/admin/Empresas/index', ['as' => 'admin.company.index', 'uses' => 'Admin\CompanyController@index']);
    Route::get('/admin/Empresas/show/{id}', ['as' => 'admin.company.show', 'uses' => 'Admin\CompanyController@show']);
    Route::get('/admin/Empresas/edit/{id}', ['as' => 'admin.company.edit', 'uses' => 'Admin\CompanyController@edit']);
    Route::put('/admin/Empresas/update/{id}', ['as' => 'admin.company.update', 'uses' => 'Admin\CompanyController@update']);
});
