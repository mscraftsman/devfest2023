@extends('layout.main')
@section('content')
    <div class="px-4 lg:px-0 mt-3 lg:mt-12 mb-10 max-w-6xl mx-auto">

    <div class="mt-6 lg:mt-10">
        <h2 class="text-center text-xl md:text-2xl text-gray-600 font-bold">Site Map — University of Mauritius</h2>
    </div>

    <div class="mt-6 lg:mt-10 mx-auto grid place-items-center">
        <img src="/images/uom-devfest-location.png" alt="Location Map" class="w-full lg:w-[80%]">
    </div>

    </div>
@endsection

@section('html-title')
    <title>Site Map | University of Mauritius | Google DevFest 2023</title>
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
