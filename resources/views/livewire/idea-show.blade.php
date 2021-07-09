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
                    <a href="#" class="hover:underline">{{ $idea->title }} </a>
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
                        <button x-data="{isOpen: false}" @click="isOpen = !isOpen"
                            class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;
                            <ul x-show.transition.origin.top.left="isOpen" x-cloak
                                @keydown.escape.window="isOpen = false" @click.away="isOpen = false"
                                class="absolute z-30 py-3 font-semibold text-left bg-white -right-16 w-44 md:ml-8 md:top-6 md:left-0 shadow-dialog rounded-xl">
                                <li>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                        Spam
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                        Supprimer post
                                    </a>
                                </li>
                            </ul>
                        </button>

                    </div>
                    <div class="flex items-center mt-4 md:mt-0 md:hidden">
                        <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-xl">
                            <div class="text-sm font-bold leading-none">{{$votesCount}}</div>
                            <div class="font-semibold leading-none text-gray-400 text-xxs">Votes</div>
                        </div>
                        <button
                            class="w-20 px-4 py-3 -m-5 font-bold uppercase transition duration-150 ease-in bg-gray-200 border rounded-xl text-xxs hover:border-gray-400">
                            Voter</button>
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
            <div x-data="{isOpen: false}" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center px-6 py-3 mt-2 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 md:ml-2 md:mt-0 h-11 rounded-xl hover:border-gray-400">
                    <span class="">Changer le status </span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false"
                    @click.away="isOpen = false"
                    class="absolute z-30 mt-2 text-sm font-semibold bg-white w-68 md:w-76 shadow-dialog rounded-xl">
                    <form action="#" method="post" class="px-4 py-6 space-y-4">
                        <div class="space-y-2">
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="status_post[]" checked value="Ouvert"
                                        class="text-black bg-gray-200 border-none" />
                                    <span class="ml-2">Ouvert</span>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="status_post[]" value="Examiné"
                                        class="bg-gray-200 border-none text-purple" />
                                    <span class="ml-2">Examiné</span>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="status_post[]" value="Traitement"
                                        class="bg-gray-200 border-none text-yellow" />
                                    <span class="ml-2">En Traitement</span>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="status_post[]" value="Implémenté"
                                        class="bg-gray-200 border-none text-green" />
                                    <span class="ml-2">Validé</span>
                                </label>
                            </div>
                            <div>
                                <label for="" class="inline-flex items-center">
                                    <input type="radio" name="status_post[]" value="Cloturé"
                                        class="bg-gray-200 border-none text-red" />
                                    <span class="ml-2">Cloturé</span>
                                </label>
                            </div>

                            <textarea name="status_comment" id="" cols="30" rows="2"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Partagez vos pensées sur le sujet ..."></textarea>
                            <div class="flex items-center mt-2 space-x-3">
                                <button type="button"
                                    class="flex items-center justify-center w-32 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                    <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-2">Pièce jointe</span>
                                </button>
                                <button type="button"
                                    class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                                    Mettre à jour
                                </button>
                            </div>
                            <div>
                                <label for="notify_voters" class="inline-flex items-center">
                                    <input type="checkbox" name="notify_voters" id="notify_voters"
                                        class="bg-gray-200 rounded-xl">
                                    <span class="ml-2 font-semibold text-xxs"> notifier les voteurs </span>
                                </label>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="items-center hidden space-x-3 md:flex">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
                <div class="text-xl leading-snug">{{$votesCount}}</div>
                <div class="text-xs leading-none text-gray-400">Votes </div>
            </div>
            <button type="button"
                class="w-32 px-6 py-3 ml-2 text-xs font-semibold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                <span class="">Voter </span>
            </button>

        </div>
    </div><!-- fin buttons-container -->
</div><!-- fin idea-and-buttons-container -->
