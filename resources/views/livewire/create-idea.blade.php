<form wire:submit.prevent="createIdea" action="#" method="post" class="px-4 py-6 space-y-4 ">
    <div>
        <input wire:model.defer="title"  required type="text"
            class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
            placeholder="Votre idée">
        @error('title')
        <p class="mt-1 text-xs text-red">{{$message}}</p>
        @enderror

    </div>
    <div>
        <select wire:model.defer="category" name="category_add" id="category_add"
            class="w-full px-4 py-2 bg-gray-100 border-none rounded-xl">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    @error('category')
    <p class="mt-1 text-xs text-red">{{$message}}</p>
    @enderror
    <div>
        <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4"
            class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 rounded-xl"
            placeholder="Description" required></textarea>
        @error('description')
        <p class="mt-1 text-xs text-red">{{$message}}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between space-x-3">
        <button type="button"
            class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
            <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
            </svg>
            <span class="ml-0">Pièce jointe</span>
        </button>
        <button type="submit"
            class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
            <span class="ml-0">Transmettre</span>
        </button>
    </div>
    <div class="">
        @if (session('success_message'))
        <div x-data="{isVisible:true}" x-init="setTimeout(() =>{
                isVisible = false
            },5000)" x-show.transition.duration.1000ms="isVisible" class="mt-4 text-green">
            {{ session('success_message') }}
        </div>
        @endif
    </div>
</form>
