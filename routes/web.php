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
    $speakersPath = base_path('storage/database/speakers.json');
    $speakers = is_file($speakersPath)
        ? (json_decode(file_get_contents($speakersPath), true) ?? [])
        : [];
    return view('speakers', ['speakers' => collect($speakers)]);
});

Route::get('/speaker/{id}', function ($id) {
    $speakersPath = base_path('storage/database/speakers.json');
    $speakersToArray = is_file($speakersPath)
        ? (json_decode(file_get_contents($speakersPath), true) ?? [])
        : [];
    $foundSpeaker = collect($speakersToArray)->firstWhere('id', $id);
    if (!$foundSpeaker) {
        abort(404, 'Speaker not found');
    }

    return view('speaker', ['speakerBio' => collect($foundSpeaker)]);
});

Route::get('/agenda', function () {
    $agendaPath = base_path('storage/database/agenda.json');
    $agenda = is_file($agendaPath)
        ? (json_decode(file_get_contents($agendaPath), true) ?? [])
        : [];
    return view('agenda', ['agenda' => collect($agenda)]);
});

Route::get('/location', function () {
    return view('location');
});
