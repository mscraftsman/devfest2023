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
					<a href="" class="ml-1 text-sm font-medium text-gray-700 hover:text-mustard md:ml-2 dark:text-gray-400">Speakers</a>
				</div>
				</li>
				<li aria-current="page">
				<div class="flex items-center">
					<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
					<span class="ml-1 text-sm font-medium text-gray-800 md:ml-2 dark:text-gray-400">Joomun</span>
				</div>
				</li>
			</ol>
		</nav>

		<div class="speaker__container mt-10">
			<img class="w-64 h-64 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/128174208?v=4">
			<div class="pt-6 text-center space-y-3">
				<figcaption class="font-large">
					<div class="font-astronomus uppercase text-2xl font-bold text-slate-800 mb-1">
						Joomun Muddathir
					</div>
					<div class="font-dm text-md font-bold text-slate-500 max-w-2xl mx-auto">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.
					</div>

					<hr class="mt-5 px-20"/>
					<div class="font-dm text-md font-regular leading-normal mt-5 text-slate-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, magnam dignissimos repellendus adipisci rerum minima magni necessitatibus pariatur deserunt harum odio saepe, impedit nesciunt consequatur ab laboriosam aliquid ipsa quia?
					</div>
<!-- 
                    <div class="social--icons">

						<a href="" target="_blank" class="icon">
							
							<img src="{{ asset('images/svg/twitter.svg') }}" alt="">

							<img src="{{ asset('images/svg/meta.svg') }}" alt="">
	
							<img src="{{ asset('images/svg/instagram.svg') }}" alt="">

							<img src="{{ asset('images/svg/linkedin.svg') }}" alt="">
	
							<img src="{{ asset('images/svg/website.svg') }}" alt="">

							<img src="{{ asset('./public/images/svg/website.svg') }}" alt="">

						</a>

					</div> -->
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
