<div x-data="{isOpen: false}" x-init="window.livewire.on('statusWasUpdated',() => {isOpen =false })" class="relative">
    <button @click="isOpen = !isOpen" type="button"
        class="flex items-center justify-center px-6 py-3 mt-2 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 md:ml-2 md:mt-0 h-11 rounded-xl hover:border-gray-400">
        <span class="">Changer le status </span>
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false" @click.away="isOpen = false" class="absolute z-30 mt-2 text-sm font-semibold bg-white w-68 md:w-76 shadow-dialog rounded-xl">
        <form wire:submit.prevent="setStatus" action="#" method="post" class="px-4 py-6 space-y-4">
            <div class="space-y-2">
                <div>
                    <label for="" class="inline-flex items-center">
                        <input wire:model="status" type="radio" name="status_post[]" checked value="1" class="text-black bg-gray-200 border-none" />
                        <span class="ml-2">Ouvert</span>
                    </label>
                </div>
                <div>
                    <label for="" class="inline-flex items-center">
                        <input wire:model="status" type="radio" name="status_post[]" value="2" class="bg-gray-200 border-none text-purple" />
                        <span class="ml-2">Examiné</span>
                    </label>
                </div>
                <div>
                    <label for="" class="inline-flex items-center">
                        <input wire:model="status" type="radio" name="status_post[]" value="3" class="bg-gray-200 border-none text-yellow" />
                        <span class="ml-2">En Traitement</span>
                    </label>
                </div>
                <div>
                    <label for="" class="inline-flex items-center">
                        <input wire:model="status" type="radio" name="status_post[]" value="4" class="bg-gray-200 border-none text-green" />
                        <span class="ml-2">Validé</span>
                    </label>
                </div>
                <div>
                    <label for="" class="inline-flex items-center">
                        <input wire:model="status" type="radio" name="status_post[]" value="5" class="bg-gray-200 border-none text-red" />
                        <span class="ml-2">Cloturé</span>
                    </label>
                </div>

                <textarea name="status_comment" id="" cols="30" rows="2" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Partagez vos pensées sur le sujet ..."></textarea>
                <div class="flex items-center mt-2 space-x-3">
                    <button type="button" class="flex items-center justify-center w-32 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                        <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span class="ml-2">Pièce jointe</span>
                    </button>
                    <button x type="submit" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border disabled:opacity-50 bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                        Mettre à jour
                    </button>
                </div>
                <div>
                    <label for="notify_voters" class="inline-flex items-center">
                        <input wire:model="notifyAllVoters" type="checkbox" name="notify_voters" id="notify_voters" class="bg-gray-200 rounded-xl">
                        <span class="ml-2 font-semibold text-xxs"> notifier les voteurs </span>
                    </label>

                </div>
            </div>
        </form>
    </div>
</div>
