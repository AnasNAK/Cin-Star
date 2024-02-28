
<x-client-layout>
<div class=" bg-gray-50 flex items-center">
	<section class="bg-cover bg-center py-16 md:py-32 w-full" style="background-image: url('https://source.unsplash.com/random');">
        <div class="container p-16 mx-auto text-center md:text-left text-white">
            <div class="flex flex-col md:flex-row space-x-8 items-center">
                <div class="w-full md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-3xl md:text-5xl font-medium mb-4 md:mb-6">Welcome to My Agency</h1>
                    <p class="text-base md:text-xl mb-4 md:mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    <form action="{{route('films.search')}}" method="GET" class="max-w-md mx-auto">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" name="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Search</button>
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-1/2">
                    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
                <div
                id="carouselExampleIndicators"
                class="relative"
                data-te-carousel-init
                data-te-ride="carousel">
               
                <!--Carousel items-->
                <div
                class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div
                    class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item
                    data-te-carousel-active>
                    <img
                    src="{{asset('imgs/zeyech.jpeg')}}"
                    class="block w-full"
                    alt="Wild Landscape" />
                </div>
                <!--Second item-->
                <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <img
                    src="{{asset('imgs/logo.png')}}"
                    class="block w-full"
                    alt="Camera" />
                </div>
                <!--Third item-->
                <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                    class="block w-full"
                    alt="Exotic Fruits" />
                </div>
                </div>

               
            </div>
                   {{-- <img src="https://source.unsplash.com/random?ux" class="h-48 md:h-64 w-full object-cover rounded-xl" alt="Layout Image"> --}}
                 </div>
            </div>
        </div>
    </section>
    
</div>
<div class="bg-black ">
<div class="mt-5 text-white font-semibold  ">
    <h1 class="text-4xl mb-3 md:ml-7 ml-2 p-2 ">Trending</h1>
    <div class="border-2 border-red-600 w-full"></div>
</div>
<div class="flex flex-wrap justify-center gap-4 mt-10 p-16">
    @if(isset($filmsSearch))
    @if(count($filmsSearch) > 0)
    @foreach ( $filmsSearch as $film ) 
        <div class="relative group w-72 h-96 rounded-xl border border-red-800 overflow-hidden bg-black m-auto ">
                <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
                <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">{{$film->name}}</p>
                </div>
                <div class="absolute w-full flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-white mt-5">{{$film->genre->name}}</p>
                </div>
                <a href="{{route('film.show', ['film' => $film ])}}" class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48x">book this film</a>
                </div>
        </div>
        @endforeach
    @else
    <h1>not found {{$searchData}}</h1>
    @endif
    @else
        @foreach ( $films as $film )            
        <div class="relative group w-72 h-96 rounded-xl border border-red-800 overflow-hidden bg-black m-auto ">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
            <div class="absolute w-full flex place-content-center">
                <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">{{$film->name}}</p>
            </div>
            <div class="absolute w-full flex place-content-center mt-20">
                <p class="font-sans text-center w-4/5 text-white mt-5">{{$film->genre->name}}</p>
            </div>
            <a href="{{route('film.show', ['film' => $film ])}}" class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 ">book this film</a>
            </div>
        </div>
       
       
        @endforeach
    @endif
</div>
</div>
</x-client-layout>
