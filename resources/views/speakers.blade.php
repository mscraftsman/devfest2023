@extends('layout.main')
@section('content')
<section class="bg-slate-100">
		<section class="pt-20 pb-10 max-w-4xl px-3 mb-7 mx-auto ">
			<div class="flex justify-center">
                <span class="text-center uppercase text-4xl md:text-6xl font-bold border-b-4 border-green-600">Speakers</span>
            </div>
            <br>
            <div class="flex justify-center">
			    <p class="text-center text-slate-400 font-dm max-w-3xl text-sm sm:text-lg">Join us for a transformative experience as our distinguished speakers, industry pioneers, and thought leaders converge to illuminate the latest frontiers of technology</p>
            </div>
        </section>
	</section>

    <section class="mt-10 pt-8 max-w-6xl px-3 mx-auto">
        <div class="grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($speakers as $speaker)
					<a href="/speaker/{{ $speaker['id'] }}" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="{{ $speaker['profilePicture'] }}">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
                                    {{ $speaker['fullName'] }}
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
                                    {{ $speaker['tagLine'] }}
								</div>
							</figcaption>
						</div>
					</a>
                @endforeach
        </div>
    </section>


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
