<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/speakers', function () {
    $speakersFromSessionize = file_get_contents(base_path('storage/database/speakers.json'));
    $speakers = json_decode($speakersFromSessionize, true);
    return view('speakers', ['speakers' => collect($speakers)]);
});

Route::get('/speaker/{id}', function ($id) {
    $speakersFromSessionize = file_get_contents(base_path('storage/database/speakers.json'));
    $speakersToArray = json_decode($speakersFromSessionize, true);
    $foundSpeaker = collect($speakersToArray)->firstWhere('id', $id);
    if (!$foundSpeaker) {
        abort(404, 'Speaker not found');
    }
   
    return view('speaker', ['speakerBio' => collect($foundSpeaker)]);
});

Route::get('/agenda', function () {
    $agendaData = file_get_contents(base_path('storage/database/agenda.json'));
    $agenda = json_decode($agendaData, true);
    return view('agenda', ['agenda' => collect($agenda)]);
});
