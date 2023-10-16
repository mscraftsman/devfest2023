@extends('layout.main')
@section('content')
<section class="bg-slate-100">
		<section class="pt-20 pb-10 max-w-4xl px-3 mb-7 mx-auto ">
			<h2 class="text-center uppercase text-2xl md:text-3xl font-bold mb-3 md:mb-4">Unleashing Tech Brilliance Together</h2>
			<div class="flex justify-center">
                <span class="text-center uppercase text-4xl md:text-6xl font-bold border-b-4 border-green-600">Speakers</span>
            </div>
            <br>
            <div class="flex justify-center">
			    <p class="text-center text-slate-400 font-dm max-w-3xl text-sm sm:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, laudantium. Ex, natus corrupti iusto beatae consectetur eveniet temporibus cupiditate recusandae, culpa modi dolores pariatur distinctio, dignissimos autem unde alias nostrum!</p>
            </div>
        </section>
	</section>

    <section class="mt-10 pt-8 max-w-6xl px-3 mx-auto">
        <div class="grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
					<a href="/speaker" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/128174208?s=96&v=4">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									Name
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
								</div>
							</figcaption>
						</div>
					</a>
                    <a href="" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/106345544?v=4">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									Name
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
								</div>
							</figcaption>
						</div>
					</a>
                    <a href="" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/128174208?s=96&v=4">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									Name
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
								</div>
							</figcaption>
						</div>
					</a>
                    <a href="" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/106345544?v=4">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									Name
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
								</div>
							</figcaption>
						</div>
					</a>
                    <a href="" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/128174208?s=96&v=4">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									Name
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
								</div>
							</figcaption>
						</div>
					</a>
                    <a href="" class="p-5 transition-all hover:scale-110 hover:bg-slate-100">
						<img class="w-28 h-28 rounded-full mx-auto drop-shadow-xl" src="https://avatars.githubusercontent.com/u/106345544?v=4">
						<div class="pt-6 text-center space-y-3">
							<figcaption class="font-medium">
								<div class="font-astronomus uppercase font-bold text-slate-800 mb-2">
									Name
								</div>
								<div class="font-dm text-sm font-bold text-slate-400">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
								</div>
							</figcaption>
						</div>
					</a>
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
