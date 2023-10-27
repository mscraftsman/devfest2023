@extends('layout.main')
@section('content')
    <div class="px-4 lg:px-0 mt-3 lg:mt-12 mb-10 max-w-6xl mx-auto">
        @foreach($agenda as $a)
            <div class="flex flex-col lg:flex-row justify-between gap-4 lg:gap-6">
                @foreach($a['rooms'] as $room)
                        <div>
                            <h3 class="py-4 text-2xl font-bold text-green-600 text-center lg:text-left">
                                {{ $room['name'] }}
                            </h3>

                            <div class="space-y-6">
                                @foreach($room['sessions'] as $index => $session)
                                 
                                    @if ($room['name']  != 'Lecture Theatre 1' && $index == 0  )
                                        <div class="relative p-2 lg:h-[200px]">
                                        <div class="absolute top-0 left-0 w-full h-full p-2 bg-green-500 rounded-md transform -rotate-2 z-0 opacity-10 md:hidden lg:block"></div>
                                        <div class="absolute top-0 left-0 w-full h-full p-2 bg-indigo-500 rounded-md transform rotate-2 z-0 opacity-10 md:hidden lg:block"></div>
                                        <div class="p-2 rounded-md md:bg-gray-100 lg:bg-white">
                                            <p class="text-lg font-bold text-gray-700">Sessions will start after Opening Ceremony</p>
                                            <p class="mt-1 text-md font-semibold text-gray-600">08:30 - {{ date('H:i', strtotime($session['startsAt'])) }}</p>   
                                        </div>
                                        </div>
                                    @endif
                                        @if ($room['name'] == 'Lecture Theatre 1' && $index == 8)
                                        <div class="relative p-2 lg:h-[210px]">
                                        @else
                                        <div class="relative p-2">
                                        @endif
                                        <div class="absolute top-0 left-0 w-full h-full p-2 bg-green-500 rounded-md transform -rotate-2 z-0 opacity-10 md:hidden lg:block"></div>
                                        <div class="absolute top-0 left-0 w-full h-full p-2 bg-indigo-500 rounded-md transform rotate-2 z-0 opacity-10 md:hidden lg:block"></div>

                                        <div class="p-2 rounded-md md:bg-gray-100 lg:bg-white">
                                            <p class="text-lg font-bold text-gray-700">{{ $session['title'] }}</p>
                                            <p class="mt-1 text-md font-semibold text-gray-600">{{ date('H:i', strtotime($session['startsAt'])) }} - {{ date('H:i', strtotime($session['endsAt'])) }}</p>
                                            @if(isset($session['speakers'][0]))
                                                <p class="font-bold text-gray-700"><span class="font-semibold">By</span> {{ $session['speakers'][0]['name'] }}</p>
                                            @endif
                                        </div>
                                        </div>
                                    @if (($room['name'] != 'Lecture Theatre 1' && $room['name'] != 'Room G6' && $index == 5) || ($room['name'] == 'Room G6' && $index == 4))
                                        @if ($room['name'] == 'Room G1')
                                        <div class="relative p-2 lg:h-[120px]">
                                        @elseif ($room['name'] == 'Room G2')
                                        <div class="relative p-2 lg:h-[260px]">
                                        @elseif ($room['name'] == 'Room G6')
                                        <div class="relative p-2 lg:h-[320px]">
                                        @endif
                                        <div class="absolute top-0 left-0 w-full h-full p-2 bg-green-500 rounded-md transform -rotate-2 z-0 opacity-10 md:hidden lg:block"></div>
                                        <div class="absolute top-0 left-0 w-full h-full p-2 bg-indigo-500 rounded-md transform rotate-2 z-0 opacity-10 md:hidden lg:block"></div>
                                        <div class="p-2 rounded-md md:bg-gray-100 lg:bg-white">
                                            <p class="text-lg font-bold text-gray-700">Redirect to Lecture Theatre 1 for Closing Ceremony</p>
                                            <p class="mt-1 text-md font-semibold text-gray-600">{{ date('H:i', strtotime($session['endsAt'])) }} - 16:00</p>   
                                        </div>
                                        </div>
                                    @endif
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
