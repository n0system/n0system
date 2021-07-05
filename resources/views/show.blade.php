<x-app-layout>
  <div class="">
    <a href="/" class="flex items-center font-semibold hover:underline">
      <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      <span class="ml-2">Toutes les idées </span>
    </a>
  </div>
  <!-- debut idea -container  -->
  <div class="flex mt-4 bg-white idea-container rounded-xl">
    <div class="flex flex-1 px-4 py-6">
      <div class="flex-none">
        <a href="#" class="l">
          <img src="https://i.pravatar.cc/150?img=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
      </div>
      <div class="w-full mx-4">
        <h4 class="text-xl font-semibold">
          <a href="#" class="hover:underline">Lorem ipsum dolor sit amet </a>
        </h4>
        <div class="mt-3 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, autem, aliquid quae quisquam
          consequuntur a earum quos quam fugit voluptate voluptatem necessitatibus quod adipisci
          assumenda. Nisi eveniet illo officiis quidem nulla, commodi sunt eaque id maxime quis blanditiis
          quisquam velit, fuga rerum nostrum mollitia laboriosam eos exercitationem, tenetur possimus
          error ipsa deserunt. Maxime neque doloremque vitae sed provident saepe a nihil enim soluta,
          rerum natus molestias, facilis asperiores delectus reiciendis quibusdam illo iure, ea quos
          quaerat. Vel nesciunt illo eius. Quasi laudantium commodi totam, distinctio fugit veritatis.
          Quia nemo similique culpa dolorem, eveniet sed perspiciatis nisi voluptatibus officia, expedita
          veritatis!
        </div>
        <div class="flex items-center justify-between mt-6">
          <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
            <div class="font-bold text-gray-900">John Doe</div>
            <div class="">&bull;</div>
            <div class="">il y a 10h</div>
            <div class="">&bull;</div>
            <div class="">Categorie 1</div>
            <div class="">&bull;</div>
            <div class="text-gray-900">3 commentaires</div>
          </div>
          <div class="flex items-center space-x-2">
            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">
              Ouvrir
            </div>
            <button x-data="{isOpen: false}" @click="isOpen = !isOpen" class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;
              <ul x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false" @click.away="isOpen = false" class="absolute w-64 py-3 ml-8 font-semibold text-left bg-white shadow-dialog rounded-xl">
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
  <!-- fin idea-container -->
  <!-- debut buttons-container -->
  <div class="flex items-center justify-between mt-6 buttons-container">
    <div class="flex items-center ml-6 space-x-4">
      <div x-data="{isOpen: false}" class="relative">
        <button @click="isOpen = !isOpen" type="button" class="flex items-center justify-center px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
          <span class="ml-1">Répondre</span>
        </button>
        <div x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false" @click.away="isOpen = false" class="absolute z-10 mt-2 text-sm font-semibold text-left bg-white w-104 shadow-dialog rounded-xl">
          <form action="#" method="post" class="px-4 py-6 space-y-4">
            <div class="">
              <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" placeholder="Partagez vos pensées sur le sujet ...">
            </textarea>
              <div class="flex items-center mt-2 space-x-3">
                <button type="button" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                  Commenter
                </button>
                <button type="button" class="flex items-center justify-center w-32 px-6 py-3 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                  <svg class="flex-none w-5 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                  </svg>
                  <span class="ml-2">Pièce jointe</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="relative" x-data="{isOpen: false}">
        <button @click="isOpen = !isOpen" type="button" class="flex items-center justify-center px-6 py-3 ml-2 text-xs font-semibold transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
          <span class="">Changer le status </span>
          <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false" @click.away="isOpen = false" class="absolute z-30 mt-2 text-sm font-semibold bg-white w-76 shadow-dialog rounded-xl">
          <form action="#" method="post" class="px-4 py-6 space-y-4">
            <div class="space-y-2">
              <div>
                <label for="" class="inline-flex items-center">
                  <input type="radio" name="status_post[]" checked value="Ouvert" class="text-black bg-gray-200 border-none" />
                  <span class="ml-2">Ouvert</span>
                </label>
              </div>
              <div>
                <label for="" class="inline-flex items-center">
                  <input type="radio" name="status_post[]" value="Examiné" class="bg-gray-200 border-none text-purple" />
                  <span class="ml-2">Examiné</span>
                </label>
              </div>
              <div>
                <label for="" class="inline-flex items-center">
                  <input type="radio" name="status_post[]" value="Traitement" class="bg-gray-200 border-none text-yellow" />
                  <span class="ml-2">En Traitement</span>
                </label>
              </div>
              <div>
                <label for="" class="inline-flex items-center">
                  <input type="radio" name="status_post[]" value="Implémenté" class="bg-gray-200 border-none text-green" />
                  <span class="ml-2">Validé</span>
                </label>
              </div>
              <div>
                <label for="" class="inline-flex items-center">
                  <input type="radio" name="status_post[]" value="Cloturé" class="bg-gray-200 border-none text-red" />
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
                <button type="button" class="flex items-center justify-center w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 ease-in border bg-blue border-blue h-11 rounded-xl hover:bg-blue-hover">
                  Mettre à jour
                </button>
              </div>
              <div>
                <label for="notify_voters" class="inline-flex items-center">
                  <input type="checkbox" name="notify_voters" id="notify_voters" class="bg-gray-200 rounded-xl">
                  <span class="ml-2 font-semibold text-xxs"> notifier les voteurs </span>
                </label>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="flex items-center space-x-3">
      <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
        <div class="text-xl leading-snug">12</div>
        <div class="text-xs leading-none text-gray-400">Votes </div>
      </div>
      <button type="button" class="w-32 px-6 py-3 ml-2 text-xs font-semibold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
        <span class="">Voter </span>
      </button>

    </div>
  </div><!-- fin buttons-container -->
  <!-- comments-container -->
  <div class="relative pt-4 my-8 mt-1 space-y-6 comments-container ml-22">
    <!-- comment-container -->
    <div class="relative flex mt-4 bg-white comment-container rounded-xl">
      <div class="flex flex-1 px-4 py-6">
        <div class="flex-none">
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
                <ul x-show.transition.origin.top.left="isOpen" x-cloak @keydown.escape.window="isOpen = false" @click.away="isOpen = false" class="absolute z-30 w-64 py-3 ml-8 font-semibold text-left bg-white shadow-dialog rounded-xl">
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