<?php

use Illuminate\Support\Facades\Route;
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
//Empresas
/*
Route::get('empresas', ['as' => 'site.company', 'uses' => 'Site\CompanyController@create']);
Route::post('empresas/store', ['as' => 'site.company.store', 'uses' => 'Site\CompanyController@store']);
*/

//participantes

Route::get('participantes', ['as' => 'site.registration', 'uses' => 'Site\RegistrationController@create']);
Route::post('participantes/store', ['as' => 'site.registration.store', 'uses' => 'Site\RegistrationController@store']);
Route::get('participantes/invoice/{code}', ['as' => 'site.registration.invoice', 'uses' => 'Site\RegistrationController@invoice']);

/**Esta rota rediriciona a pagina home do nosso site */
Route::get('/', [SiteController::class,'index'])->name('site.home');



Route::get('/sobre', ['as' => 'site.about.index', 'uses' => 'Site\AboutController@index']);

/**speaker */
Route::get('/oradores', ['as' => 'site.speaker', 'uses' => 'Site\SpeakerController@index']);
Route::get('/oradores/{name}', ['as' => 'site.speaker.show', 'uses' => 'Site\SpeakerController@show']);

/**speaker */
Route::get('/moderadores', ['as' => 'site.moderators', 'uses' => 'Site\ModeratorsController@index']);

/* faq */
Route::get('/perguntas-frequentes', ['as' => 'site.faq', 'uses' => 'Site\FaqController@index']);

/* gallery */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);

/* contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/* Adicionar Moldura */
Route::get('/Moldura', ['as' => 'site.frame', 'uses' => 'Site\FrameController@index']);

/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);
/* inclui as rotas de autenticação do ficheiro auth.php */

/* Eventos */
Route::get('/eventos', ['as' => 'site.event', 'uses' => 'Site\EventController@index']);
Route::get('/evento/{title}', ['as' => 'site.event.show', 'uses' => 'Site\EventController@show']);
/**End Eventos */

//**Social Bodies */
Route::get('/orgaos-sociais', ['as' => 'site.socialBodies', 'uses' => 'Site\SocialBodiesController@index']);

/**Organizational Chart  */
Route::get('/organograma', ['as' => 'site.organizationalChart', 'uses' => 'Site\OrganizationalChartController@index']);


/**history*/
Route::get('/historia', ['as' => 'site.history', 'uses' => 'Site\HistoryController@index']);

/**history*/
Route::get('/missao-visao-valores', ['as' => 'site.mission', 'uses' => 'Site\MissionController@index']);

/**Actovity Planes */
Route::get('/plano-de-actividades', ['as' => 'site.activityPlanes', 'uses' => 'Site\ActivityPlanesController@index']);

/**Report */
Route::get('/relatorios', ['as' => 'site.report', 'uses' => 'Site\ReportController@index']);

/* advertisement*/
Route::get('/comunicados', ['as' => 'site.advertisement', 'uses' => 'Site\AdvertisementController@index']);

/* agenda */
Route::get('/agenda-de-reunioes', ['as' => 'site.schedule', 'uses' => 'Site\ScheduleController@index']);

/* Map and Quotes */
Route::get('/mapas-de-quotas-e-joias', ['as' => 'site.mapAndQuote', 'uses' => 'Site\MapAndQuotesController@index']);

/* Map and Quotes */
Route::get('/apresentacoes', ['as' => 'site.presentation', 'uses' => 'Site\PresentationController@index']);


/* Meetings Acts */
Route::get('/actas-de-reunioes', ['as' => 'site.meetingActs', 'uses' => 'Site\MeetingActsController@index']);

/* Rules*/
Route::get('/regulamentos', ['as' => 'site.rules', 'uses' => 'Site\RulesController@index']);

/*Assoc Rules*/
Route::get('/lei-das-associacoes', ['as' => 'site.assocRules', 'uses' => 'Site\AssocRulesController@index']);

/*Anpere Statue*/
Route::get('/estatuto-da-anpere', ['as' => 'site.anpereStatue', 'uses' => 'Site\AnpereStatueController@index']);


require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';

/*
Route::get('credenciamento/verify/{code}', ['as' => 'admin.credencial.verify', 'uses' => 'Admin\RegistrationController@verify']);
*/