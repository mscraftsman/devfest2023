@extends('layout.main')
@section('content')
    <div class="px-4 lg:px-0 mt-3 lg:mt-12 mb-10 max-w-6xl mx-auto">
        @foreach($agenda as $a)
            <div class="flex flex-col lg:flex-row justify-between gap-4 lg:gap-6">
                @foreach($a['rooms'] as $room)

                        <div>
                            <h3 class="py-4 text-xl font-bold text-green-600">
                                @if ( $room['name']  == 'Lecture Theatre 1' || $room['name']  == 'Lecture Theatre 2')
                                    <span class="text-2xl font-bold text-green-600">{{ $room['name'] }}</span>
                                @else
                                    <span class="text-2xl font-bold text-green-600">Room {{ $room['name'] }}</span>
                                @endif
                            </h3>

                            <div class="space-y-6">
                                @foreach($room['sessions'] as $session)
                                    <div class="p-2 bg-gray-100 rounded-md">
                                        <p class="text-lg font-bold text-gray-700">{{ $session['title'] }}</p>
                                        <p class="mt-1 text-md font-semibold text-gray-600">{{ date('H:i', strtotime($session['startsAt'])) }} - {{ date('H:i', strtotime($session['endsAt'])) }}</p>
                                        @if(isset($session['speakers'][0]))
                                            <p class="font-bold text-gray-700"><span class="font-semibold">By</span> {{ $session['speakers'][0]['name'] }}</p>
                                        @endif
                                    </div>
                                @endforeach
                            </div>

                        </div>

                @endforeach
            </div>
        @endforeach
    </div>
@endsection

@section('html-title')
    <title>Agenda | Google DevFest 2023</title>
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
