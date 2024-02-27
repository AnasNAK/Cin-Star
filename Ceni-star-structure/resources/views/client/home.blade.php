
<x-client-layout>
    <form action="{{ route('films.search') }}" method="GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex items-center">
        <input type="text" name="search" id="search" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter film name, genre, actor, or salle">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m0 0l-6-6m6 6l-6 6m6-6l6 6"></path></svg>
        </button>
    </form>
</x-client-layout>
