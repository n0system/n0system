<x-app-layout>
    <div class="">
        <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">Toutes les idées </span>
        </a>
    </div>
    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />
    <!-- comments-container -->
    <div class="relative pt-4 my-8 mt-1 space-y-6 comments-container md:ml-22">
        <!-- comment-container -->
        <div class="relative flex mt-4 bg-white comment-container rounded-xl">
            <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
                <div class="flex-none mx-2 md:mx-4">
                    <a href="#" class="">
                        <img src="https://i.pravatar.cc/150?img=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">Lorem ipsum dolor sit amet </a>
                     </h4> --}}
                    <div class="mt-3 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, autem, aliquid quae quisquam
                        consequuntur a earum quos quam fugit voluptate voluptatem necessitatibus quod adipisci
                        assumenda. Nisi eveniet illo officiis quidem nulla, commodi sunt eaque id maxime quis blanditiis
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div class="">&bull;</div>
                            <div class="">il y a 10h</div>
                        </div>
                        <div x-data="{isOpen: false}" class="flex items-center space-x-2">
                            <button @click="isOpen = !isOpen" class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;
                                <ul x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false" @click.away="isOpen = false"
                                    class="absolute z-30 w-64 py-3 ml-8 font-semibold text-left bg-white shadow-dialog rounded-xl">
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Marquer comme spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Supprimer post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin comment-container -->
        <!-- comment-container -->
        <div class="relative flex mt-4 bg-white border is-admin comment-container rounded-xl border-blue-hover">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://i.pravatar.cc/150?img=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="font-semibold text-center uppercase text-blue text-xxs">
                        Admin
                    </div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Le status a changé : en cours d'examination </a>
                    </h4>
                    <div class="mt-3 text-gray-600 ">
                        L earum quos quam fugit voluptate voluptatem necessitatibus quod adipisci
                        assumenda. Nisi eveniet illo officiis quidem nulla, commodi sunt eaque id maxime quis blanditiis

                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div class="font-bold text-blue">Adrih romano</div>
                            <div class="">&bull;</div>
                            <div class="">il y a 10h</div>

                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;
                                <ul class="absolute hidden w-64 py-3 ml-8 font-semibold text-left bg-white shadow-dialog rounded-xl">
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Marquer comme spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Supprimer post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin comment-container -->
        <!-- comment-container -->
        <div class="relative flex mt-4 bg-white comment-container rounded-xl">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="">
                        <img src="https://i.pravatar.cc/150?img=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">Lorem ipsum dolor sit amet </a>
          </h4> --}}
                    <div class="mt-3 text-gray-600 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, autem, aliquid quae quisquam
                        consequuntur a earum
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div class="font-bold text-gray-900">Harry Poser</div>
                            <div class="">&bull;</div>
                            <div class="">il y a 10h</div>

                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;
                                <ul class="absolute hidden w-64 py-3 ml-8 font-semibold text-left bg-white shadow-dialog rounded-xl">
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Marquer comme spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 ease-in hover:bg-gray-100">
                                            Supprimer post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin comment-container -->
    </div>
    <!-- fin comments-container -->
</x-app-layout>
