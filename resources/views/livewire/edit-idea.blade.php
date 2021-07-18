<div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen">
        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
        <div
            class="py-4 overflow-hidden transition-all transform bg-white rounded-tl-lg rounded-tr-lg modal sm:max-w-lg sm:w-full">

            <div class="absolute top-0 right-0 pt-4 pr-4">
                <button class="text-gray-400 hover:text-gray-500">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                <h3 class="text-lg font-medium text-center text-gray-900">Mettre à jour </h3>
                <p class="px-5 mt-4 text-xs leading-5 text-center text-gray-500">Vous avez une 1h pour mettre à jour votre idée</p>
                <form wire:submit.prevent="createIdea" action="#" method="post" class="px-4 py-6 space-y-4 ">
                    <div>
                        <input wire:model.defer="title" required type="text"
                            class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                            placeholder="Votre idée">
                        @error('title')
                        <p class="mt-1 text-xs text-red">{{$message}}</p>
                        @enderror

                    </div>
                    <div>
                        <select wire:model.defer="category" name="category_add" id="category_add"
                            class="w-full px-4 py-2 bg-gray-100 border-none rounded-xl">
                            {{-- @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                            @endforeach --}}
                            <option value="1"> catégorie 1</option>
                            <option value="2"> catégorie 2</option>
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
                            <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
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
                </form>
            </div>
        </div>
    </div>
</div>
