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
    $speakersToArray = json_decode($speakersFromSessionize, true);
    $speakersToCollection = collect($speakersToArray)->map(function ($speaker) {
        return [
            'id' => $speaker['id'],
            'fullName' => $speaker['fullName'],
            'profilePicture' => $speaker['profilePicture'],
            'tagLine' => $speaker['tagLine'],
        ];
    });
    return view('speakers', ['speakers' => $speakersToCollection]);
});


Route::get('/speaker', function () {
    return view('speaker');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/speaker/{id}', function ($id) {
    $speakersFromSessionize = file_get_contents(base_path('storage/database/speakers.json'));
    $speakersToArray = json_decode($speakersFromSessionize, true);
    $foundSpeaker = collect($speakersToArray)->firstWhere('id', $id);
    if (!$foundSpeaker) {
        abort(404, 'Speaker not found');
    }
    $speakerBio = collect([
        'fullName' => $foundSpeaker['fullName'],
        'profilePicture' => $foundSpeaker['profilePicture'],
        'tagLine' => $foundSpeaker['tagLine'],
        'bio' => $foundSpeaker['bio'],
    ]);
    return view('speaker', ['speakerBio' => $speakerBio]);
});

Route::get('/agenda', function () {
    $agendaData = file_get_contents(base_path('storage/database/agenda.json'));
    $agenda = json_decode($agendaData, true);
    return view('agenda', ['agenda' => collect($agenda)]);
});
