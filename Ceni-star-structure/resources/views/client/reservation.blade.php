<x-client-layout>
    <div class="bg-gray-900 text-white flex flex-col items-center justify-center min-h-screen w-screen font-sans">

        <!-- Carousel -->
        <div class="carousel-container relative">
            <div class="bg-cover bg-center h-full" style="background-image: url('carousel-background.jpg');"></div>
        
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <img src="{{ asset('imgs/zeyech.jpeg') }}" alt="Slide 1">
                        </li>
                        <li class="glide__slide">
                            <img src="{{ asset('imgs/zeyech.jpeg') }}" alt="Slide 2">
                        </li>
                        <li class="glide__slide">
                            <img src="{{ asset('imgs/zeyech.jpeg') }}" alt="Slide 3">
                        </li>
                    </ul>
                </div>
            </div>
        
            <div class="absolute bottom-0 w-full text-center pb-8">
                <h1 class="text-4xl font-bold">{{ $film->title }}</h1>
                <p class="mt-2">{{ $film->description }}</p>
            </div>
        </div>

        <!-- Legend for seat status -->
        <ul class="showcase mb-8 flex items-center justify-center space-x-10">
            <li class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gray-600 rounded-lg"></div>
                <small class="text-gray-400">Available</small>
            </li>
            <li class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-yellow-400 rounded-lg"></div>
                <small class="text-gray-400">Selected</small>
            </li>
            <li class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-white border border-gray-300 rounded-lg"></div>
                <small class="text-gray-400">Reserved</small>
            </li>
        </ul>

        <div class="container perspective mb-8">
            <div class="screen bg-white h-24 w-full mb-4"></div>
        
            <div class="grid grid-cols-8 gap-4">
                @foreach ($chairs as $chair)
                <form action="{{ route('reserve-chair', ['filmId' => $film->id, 'chairId' => $chair->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="film_id" value="{{ $film->id }}">
                    <button type="submit" class="seat w-12 h-12 rounded-lg
                        @if ($chair->status == 1)
                            bg-yellow-400
                        @else
                            bg-gray-600
                        @endif"
                        @if ($chair->status == 0)
                            name="reserve"
                        @else
                            disabled
                        @endif
                    ></button>
                </form>
                @endforeach
            </div>
        </div>
        
        



        <!-- Seat Selection Summary -->
        <p class="text">
            You have selected <span id="count" class="text-yellow-400">0</span> seat(s) for a price of RS.<span
                id="total" class="text-yellow-400">0</span>
        </p>
    </div>
</x-client-layout>
