@extends('layout.main')
@section('content')
<div class="max-w-6xl mx-auto mt-4 md:mt-8 mb-10 px-4 lg:px-0">
    <img src="/images/hero-2023.png" class="rounded-lg shadow-md mb-2 md:mb-8" />
    <h2 class="text-2xl md:text-3xl font-bold mb-3 md:mb-4">About GDG Mauritius</h2>
    <div class="flex flex-col md:flex-row">
        <div class="md:mr-6 md:w-1/2">
            <p class="mb-2 md:mb-4 text-sm md:text-lg">Google Developer Groups (GDG) - is an open and volunteer geek community who create exciting projects and share their experience about Google technologies with a passion.</p>
            <p class="mb-2 md:mb-4 text-sm md:text-lg">DevFest (Developers Festival) Mauritius is a single-day, two-track, inclusive conference for all developers. It is an annual community-run event that offers keynote speakers who are very influential, speaker sessions across multiple product areas, including hackathons, codelabs, and more.</p>
            <p class="text-sm md:text-lg mb-4">Come and join us at the DevFest 2023! Let's get together and end this year on a Google note!</p>
        </div>
        <div class="mt-4 md:mt-0 md:ml-6 md:w-1/2 grid grid-cols-2">
            <div class="w-1/2 flex flex-col">
                <span class="text-4xl md:text-6xl font-bold border-b-4 border-green-600">200</span>
                <span class="text-xl md:text-2xl">attendees</span>
            </div>
            <div class="w-1/2 flex flex-col">
                <span class="text-4xl md:text-6xl font-bold border-b-4 border-green-600">1</span>
                <span class="text-xl md:text-2xl">day</span>
            </div>
            <div class="mt-2 md:mt-0 w-1/2 flex flex-col">
                <span class="text-4xl md:text-6xl font-bold border-b-4 border-green-600">12</span>
                <span class="text-xl md:text-2xl">sessions</span>
            </div>
            <div class="mt-2 md:mt-0 w-1/2 flex flex-col">
                <span class="text-4xl md:text-6xl font-bold border-b-4 border-green-600">2</span>
                <span class="text-xl md:text-2xl">tracks</span>
            </div>
        </div>
    </div>

    {{-- The Event --}}
    <div class="mt-8 md:mt-20 flex flex-col md:flex-row">
        <div class="md:mr-2 lg:mr-6 md:w-1/2">
            <img class="rounded-md md:rounded-lg md:mt-2" src="/images/uom.jpg" />
        </div>
        <div class="mt-6 md:mt-0 md:ml-2 lg:ml-6 md:w-1/2">
            <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4">The Event</h2>
            <p class="mb-2 md:mb-4 text-sm md:text-lg">
                This is a gathering of developers and technology enthusiasts who will cover multiple product areas such as Android, Firebase, Kotlin, Flutter, Google Cloud Platform, ARCore, Google Assistant, Design Sprint, IoT, Machine Learning, Mobile Web and Artificial Intelligence.
            </p>
            <p class="mb-2 md:mb-4 text-sm md:text-lg">
                Key sponsors will be present on that day. Do not hesitate to meet them at their booths to learn more about them. See what they have waiting for you 🙂.
            </p>
        </div>
    </div>

    {{-- Location Map --}}
    <div class="mt-8 md:mt-20 grid place-items-center">
        <iframe class="rounded-lg w-[100%] md:h-[405px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.6971584351688!2d57.49581617446246!3d-20.23453614617368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5afaa35aa48b%3A0xc387b21d27e98e29!2sFaculty%20of%20Law%20%26%20Management!5e1!3m2!1sen!2smu!4v1694943570988!5m2!1sen!2smu" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    {{-- Partners --}}
    <div class="grid place-items-center md:place-items-start">
        <h2 class="mt-8 md:mt-10 text-3xl font-bold">Partners</h2>
    </div>

    <div class="md:hidden sm:block lg:block">
        <div class="flex flex-col lg:flex-row md:gap-4 items-center">
            <img class="h-12 md:mr-4 mt-10 md:mt-0" src="/images/Google.svg" />
            <img class="h-16" src="/images/liquid-intelligent-technologies.png" />
        </div>
    </div>

    <div class="hidden md:block lg:hidden">
        <div class="flex flex-row gap-4 items-center">
            <img class="h-12 md:mx-4 mt-10 md:mt-0" src="/images/Google.svg" />
            <img class="h-32" src="/images/novity.jpg" />
            <img class="h-32" src="/images/sdworx.svg" />
            <img class="h-12 md:ml-4 md:mr-6 mt-3 md:mt-0" src="/images/cloud-mu.svg" />
        </div>
        <div class="flex flex-row gap-4 items-center">

            <img class="h-32 mt-3 md:mt-0" src="/images/ios.png" />
        </div>
    </div>

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
