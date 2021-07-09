<div x-data @click="
const clicked = $event.target
const target = clicked.tagName.toLowerCase()
const ignores = ['button','svg','path','a']
    if(! ignores.includes(target))
    { clicked.closest('.idea-container').querySelector('.idea-link').click() }
    " class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container rounded-xl hover:shadow-card">
    <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
        <div class="text-center">
            <div class="text-2xl font-semibold">{{$votesCount}}</div>
            <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
            <button
                class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border text-xxs hover:border-gray-400 rounded-xl">
                Voter</button>
        </div>
    </div>
    <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
        <div class="flex-none mx-2 md:mx-4">
            <a href="#" class="">
                <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="flex flex-col justify-between w-full mx-2 md:mx-4">
            <h4 class="mt-2 text-xl font-semibold md:mt-0">
                <a href="{{ route('idea.show', $idea) }}" class="hover:underline idea-link">{{ $idea->title }} </a>
            </h4>
            <div class="mt-3 text-gray-600 line-clamp-3">
                {{ $idea->description }}
            </div>
            <div class="flex flex-col justify-between mt-6 md:items-center md:flex-row">
                <div class="flex items-center text-xs font-semibold text-gray-400 md:space-x-2">
                    <div class="">{{ $idea->created_at->diffForHumans() }}</div>
                    <div class="">&bull;</div>
                    <div class="">{{ $idea->category->name }}</div>
                    <div class="">&bull;</div>
                    <div class="">3 commentaires</div>
                </div>
                <div x-data="{isOpen: false}" class="flex items-center mt-4 space-x-2 md:mt-0">
                    <div
                        class="{{ $idea->status->classes }} px-4 py-2 font-bold leading-none text-center uppercase  rounded-full text-xxs w-28 h-7">
                        {{ $idea->status->name }}
                    </div>
                    <button @click="isOpen = !isOpen"
                        class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;

                        <ul x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false"
                            @click.away="isOpen = false"
                            class="absolute py-3 font-semibold text-left bg-white -right-16 md:ml-8 md:top-6 md:left-0 w-44 shadow-dialog rounded-xl">
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
