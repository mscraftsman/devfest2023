@extends('layout.main')
@section('content')

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
