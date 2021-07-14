<div>
    <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row filters ">
        <div class="w-full md:w-1/3">
            <select wire:model='category' name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Toutes">Toutes Catégories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>

                @endforeach
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select wire:model="filter" name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="last">Récents</option>
                <option value="best">Les Meilleurs</option>
                <option value="myideas">Mes idées</option>
                <option value="Filtre 4">Filtre 4</option>
            </select>
        </div>
        <div class="relative w-full md:w-2/3">
            <input wire:model="search" type="search" name="" id="" placeholder="Trouver une idée" class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl" />
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

        </div>

    </div> <!-- fin des filtres -->
    <div class="my-6 space-y-6 ideas-container">

        @foreach ($ideas as $idea)
            <livewire:idea-index :key="$idea->id" :idea="$idea" :votesCount="$idea->votes_count" />
        @endforeach
    </div>
    <div class="my-8">
        {{-- {{ $ideas->links() }} --}}
        {{ $ideas->appends(request()->query())->links() }}
    </div>
</div>
