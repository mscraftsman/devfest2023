@extends('layout.main')
@section('content')
<div class="page--agenda">
    <section class="pt-20 pb-10 max-w-4xl px-3 mb-7 mx-auto ">
        <div class="flex justify-center">
            <span class="text-center uppercase text-4xl md:text-6xl font-bold border-b-4 border-green-600">Agenda</span>
        </div>
        <br>
        <div class="flex justify-center">
            <p class="text-center text-slate-400 font-dm max-w-3xl text-sm sm:text-lg">Join us for a transformative experience as our distinguished speakers, industry pioneers, and thought leaders converge to illuminate the latest frontiers of technology</p>
        </div>
    </section>

    <section class="mt-10 max-w-7xl px-2 mx-auto flex">
        <div class="sessions__column">
            <div class="tracks__container grid grid-cols-4 gap-2 mb-10 ml-20 h-12" id="rooms-bar">
                <div class="track__title text-center bg-purple text-black py-4 uppercase font-bold rounded-md">
                    Room #1
                </div>
                <div class="track__title text-center bg-purple text-black py-4 uppercase font-bold rounded-md">
                    Room #2
                </div>
                <div class="track__title text-center bg-purple text-black py-4 uppercase font-bold rounded-md">
                    Room #3
                </div>
                <div class="track__title text-center bg-purple text-black py-4 uppercase font-bold rounded-md">
                    Room #4
                </div>
            </div>
            <div class="day--agenda" id="agenda">
                <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIds) }}">
                    @foreach($time_range as $time)
                    <div 
                        class="time__track"
                        style="grid-area: {{ calculateTimePlacement($time) }}"
                    ><span class="time__tag px-2 py-2 bg-mustard font-bold center rounded-md inline-flex">
                        {{$time}}
                        </span>
                        <div class="line"></div>
                    </div>
                    @endforeach
                
                    @foreach($groupedSessions as $key => $value)
                    @if($key == 'Thursday')
                        @foreach($value as $key => $session)
                        <a
                            class="session__wrapper px-4 py-3 rounded-md bg-slate-100 block mb-3 hover:bg-slate-200 hover:drop-shadow-md transition-all hover:scale-105" 
                            style="grid-row: {{ calculatePlacementGridRow($session, $time_range) }}; grid-column: {{ calculatePlacementGridColumn($session, $roomNames) }}"
                            data-room="{{ $session['room'] }}"
                            href="/agenda/{{ $session['id'] }}"
                            >
                            <div class="tile_start text-sm text-slate-500 mb-1 font-medium">
                            {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                            </div>
                            <h3 class="font-bold text-md mb-2 text-purple ">{{ $session['title'] }}</h3>
                            <div class="speaker text-sm mt-2">
                            @foreach($session['speakers'] as $key => $speaker)
                                <div class="speaker--headshot flex items-center mb-1">
                                <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                                <div href="/speaker/{{ $speaker['id'] }}">{{ $speaker['name'] }}</div>
                                </div>
                            @endforeach
                            </div>
                        </a>
                        @endforeach
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
  </div>
@endsection

@section('html-title')
    <title>{{ config('app.name', 'Google DevFest 2023') }}</title>
@endsection

@section('meta-tags')
    <meta name="description" content="DevFest (Developers Festival) Mauritius is a single-day, multiple-track, inclusive conference for all developers using Google technology stack. It is an annual community-run event that offers keynote speakers who are very influential, speaker sessions across multiple product areas, including hackathons, codelabs, and more."/>
    <meta property="og:site_name" content="Google DevFest 2023"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Google DevFest 2023"/>
    <meta property="og:description" content="DevFest (Developers Festival) Mauritius is a single-day, multiple-track, inclusive conference for all developers using Google technology stack. It is an annual community-run event that offers keynote speakers who are very influential, speaker sessions across multiple product areas, including hackathons, codelabs, and more."/>
    <meta property="og:url" content="https://devfest.mscc.mu"/>
    <meta property="og:image" content="https://devfest.mscc.mu/images/hero-2023.png"/>
@endsection
