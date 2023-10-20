@extends('layout.main')
@section('content')

<section class="mt-20 max-w-5xl py-5 px-3 mx-auto speaker">


		<nav class="flex" aria-label="Breadcrumb">
			<ol class="inline-flex items-center space-x-1 md:space-x-3 ">
				<li class="inline-flex items-center">
				<a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-mustard dark:text-gray-400">
					Home
				</a>
				</li>
				<li>
				<div class="flex items-center">
					<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
					<a href="/speakers" class="ml-1 text-sm font-medium text-gray-700 hover:text-mustard md:ml-2 dark:text-gray-400">Speakers</a>
				</div>
				</li>
				<li aria-current="page">
				<div class="flex items-center">
					<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
					<span class="ml-1 text-sm font-medium text-gray-800 md:ml-2 dark:text-gray-400">{{ $speakerBio['fullName'] }}</span>
				</div>
				</li>
			</ol>
		</nav>

		<div class="speaker__container mt-10">
			<img class="w-64 h-64 rounded-full mx-auto drop-shadow-xl" src="{{ $speakerBio['profilePicture'] }}">
			<div class="pt-6 text-center space-y-3">
				<figcaption class="font-large">
					<div class="font-astronomus uppercase text-2xl font-bold text-slate-800 mb-1">
                        {{ $speakerBio['fullName'] }}
					</div>
					<div class="font-dm text-md font-bold text-slate-500 max-w-2xl mx-auto">
                        {{ $speakerBio['tagLine'] }}
					</div>
                    
					@if ($speakerBio['links'])
					<section class="mt-5 flex justify-center " >
						@foreach ($speakerBio['links'] as $link)
							<a href="{{ $link['url'] }}" target="_blank" class="m-2 inline-block bg-green-600 rounded-full p-2 transition-transform duration-200 transform hover:bg-green-500 hover:scale-110">
							@switch($link['title'])
								@case('Twitter')
									<img src="{{ asset('images/svg/twitter.svg') }}" alt="Twitter" class="w-4 h-4">
									@break

								@case('Facebook')
									<img src="{{ asset('images/svg/meta.svg') }}" alt="Facebook" class="w-4 h-4">
									@break

								@case('Instagram')
									<img src="{{ asset('images/svg/instagram.svg') }}" alt="Instagram" class="w-4 h-4">
									@break

								@case('LinkedIn')
									<img src="{{ asset('images/svg/linkedin.svg') }}" alt="LinkedIn" class="w-4 h-4">
									@break
								@case('Blog')
								@case('Company Website')
									<img src="{{ asset('images/svg/website.svg') }}" alt="Blog/Website" class="w-4 h-4">
									@break
								@default
									<img src="{{ asset('images/svg/website.svg') }}" alt="Link" class="w-4 h-4">
									@break

							@endswitch
							</a>
						@endforeach

					</section>
					@endif



					<hr class="mt-5 px-20"/>
					<div class="font-dm text-md font-regular leading-normal mt-5 text-slate-400">
                        {{ $speakerBio['bio'] }}
					</div>


				</figcaption>
			</div>
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
