<div class="idea-and-buttons-container">
    <!-- debut idea -container  -->
    <div class="flex mt-4 bg-white idea-container rounded-xl">
        <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
            <div class="flex-none mx-2 md:mx-4">
                <a href="#" class="l">
                    <img src="https://i.pravatar.cc/150?img=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                    {{ $idea->title }}
                </h4>
                <div class="mt-3 text-gray-600">
                    {{ $idea->description }}
                </div>
                <div class="flex flex-col justify-between mt-6 md:items-center md:flex-row">
                    <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                        <div class="hidden font-bold text-gray-900 md:block">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div class="">{{ $idea->created_at->diffForHumans() }}</div>
                        <div class="">&bull;</div>
                        <div class="">{{ $idea->category->name }}</div>
                        <div class="">&bull;</div>
                        <div class="text-gray-900">3 commentaires</div>
                    </div>
                    <div class="flex items-center mt-4 space-x-2 md:mt-0 ">
                        <div
                            class="{{ $idea->status->classes }} px-4 py-2 font-bold leading-none text-center uppercase  rounded-full text-xxs w-28 h-7">
                            {{ $idea->status->name }}
                        </div>
                        <div class="relative" x-data="{isOpen: false}">
                            <button @click="isOpen = !isOpen"
                                class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;

                            </button>
                            <ul x-show.transition.origin.top.left="isOpen" x-cloak
                                @keydown.escape.window="isOpen = false" @click.away="isOpen = false"
                                class="absolute z-30 py-3 font-semibold text-left bg-white -right-16 w-44 md:ml-8 md:top-6 md:left-0 shadow-dialog rounded-xl">
                                @can('update', $idea)
                                    <li>
                                        <a href="#" @click=" isOpen = false $dispatch('edit-modal')"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Réviser
                                        </a>
                                    </li>
                                @endcan
                                @can('delete', $idea)
                                    <li>
                                        <a href="#" @click="
                                        isOpen = false
                                        $dispatch('delete-modal')"
                                            class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Supprimer
                                        </a>
                                    </li>
                                @endcan
                                <li>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                        Spam
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 md:mt-0 md:hidden">
                        <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                            <div class="text-sm font-bold leading-none @if ($hasVoted) text-blue @endif">
                                {{ $votesCount }}</div>
                            <div class="font-semibold leading-none text-gray-400 text-xxs">Votes</div>
                        </div>
                        @if ($hasVoted)
                            <button
                                class="w-20 px-4 py-3 -m-5 font-bold uppercase transition duration-150 ease-in border bg-blue rounded-xl text-xxs hover:bg-blue-hover">
                                Voté
                            </button>

                        @else
                            <button
                                class="w-20 px-4 py-3 -m-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border rounded-xl text-xxs hover:border-gray-400">
                                Voter
                            </button>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin idea-container -->
    <!-- debut buttons-container -->
    <div class="flex items-center justify-between mt-6 buttons-container">
        <div class="flex flex-col ml-6 md:items-center md:space-x-4 md:flex-row">
            <div x-data="{isOpen: false}" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                    <span class="ml-1">Répondre</span>
                </button>
                <div x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false"
                    @click.away="isOpen = false"
                    class="absolute z-10 mt-2 text-sm font-semibold text-left bg-white w-68 md:w-104 shadow-dialog rounded-xl">
                    <form action="#" method="post" class="px-4 py-6 space-y-4">
                        <div class="">
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Partagez vos pensées sur le sujet ..."></textarea>
                            <div class="flex flex-col items-center mt-2 md:space-x-3 md:flex-row">
                                <button type="button"
                                    class="flex items-center justify-center w-full px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border md:w-1/2 bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                                    Commenter
                                </button>
                                <button type="button"
                                    class="flex items-center justify-center w-full px-6 py-3 mt-2 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 md:mt-0 md:w-32 h-11 rounded-xl hover:border-gray-400">
                                    <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-2">Pièce jointe</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @auth
                @if (auth()->user()->isAdmin())
                    <livewire:set-status :idea="$idea" />
                @endif
            @endauth
        </div>
        <!-- fin buttons-container -->
        <div class="items-center hidden space-x-3 md:flex">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
                <div class="text-xl leading-snug  @if ($hasVoted) text-blue @endif">{{ $votesCount }}</div>
                <div class="text-xs leading-none text-gray-400">Votes </div>
            </div>
            @if ($hasVoted)
                <button type="button" wire:click.prevent="vote"
                    class="w-32 px-6 py-3 ml-2 text-xs font-semibold text-white uppercase transition duration-150 ease-in border bg-blue border-blue-hover h-11 rounded-xl hover:bg-blue-hover">
                    <span class="">Voté </span>
                </button>
            @else
                <button type="button" wire:click.prevent="vote"
                    class="w-32 px-6 py-3 ml-2 text-xs font-semibold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                    <span class="">Voter </span>
                </button>
            @endif


        </div>
    </div><!-- fin buttons-container -->
</div><!-- fin idea-and-buttons-container -->
