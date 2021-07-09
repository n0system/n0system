<x-app-layout>
    <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row filters ">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category 1">Categorie 1</option>
                <option value="Category 2">Categorie 2</option>
                <option value="Category 3">Categorie 3</option>
                <option value="Category 4">Categorie 4</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Filtre 1">Filtre 1</option>
                <option value="Filtre 2">Filtre 2</option>
                <option value="Filtre 3">Filtre 3</option>
                <option value="Filtre 4">Filtre 4</option>
            </select>
        </div>
        <div class="relative w-full md:w-2/3">
            <input type="search" name="" id="" placeholder="Trouver une idée"
                class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl" />
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

        </div>

    </div> <!-- fin des filtres -->
    <div class="my-6 space-y-6 ideas-container">

        @foreach ($ideas as $idea)
        <livewire:idea-index
        :idea="$idea"
        :votesCount="$idea->votes_count"
        />
        @endforeach
    </div>
    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
