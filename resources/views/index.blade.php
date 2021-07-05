<x-app-layout>
  <div class="flex space-x-6 filters">
    <div class="w-1/3">
      <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
        <option value="Category 1">Categorie 1</option>
        <option value="Category 2">Categorie 2</option>
        <option value="Category 3">Categorie 3</option>
        <option value="Category 4">Categorie 4</option>
      </select>
    </div>
    <div class="w-1/3">
      <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
        <option value="Filtre 1">Filtre 1</option>
        <option value="Filtre 2">Filtre 2</option>
        <option value="Filtre 3">Filtre 3</option>
        <option value="Filtre 4">Filtre 4</option>
      </select>
    </div>
    <div class="relative w-2/3">
      <input type="search" name="" id="" placeholder="Trouver une idée" class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl" />
      <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="w-4 text-gray-700" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>

    </div>

  </div> <!-- fin des filtres -->
  <div class="my-6 space-y-6 ideas-container">
    <!-- debut idea -container  -->
    <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container rounded-xl hover:shadow-card ">
      <div class="px-5 py-8 border-r border-gray-100">
        <div class="text-center">
          <div class="text-2xl font-semibold">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border text-xxs hover:border-gray-400 rounded-xl">
            Voter</button>
        </div>
      </div>
      <div class="flex flex-1 px-2 py-6">
        <div class="flex-none">
          <a href="#" class="">
            <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="avatar" class="w-14 h-14 rounded-xl">
          </a>
        </div>
        <div class="w-full mx-4">
          <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">Lorem ipsum dolor sit amet </a>
          </h4>
          <div class="mt-3 text-gray-600 line-clamp-3">
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
              <div class="">il y a 10h</div>
              <div class="">&bull;</div>
              <div class="">Categorie 1</div>
              <div class="">&bull;</div>
              <div class="">3 commentaires</div>
            </div>
            <div x-data="{isOpen: false}" class="flex items-center space-x-2">
              <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">
                Ouvrir
              </div>
              <button @click="isOpen = !isOpen" class="relative px-4 py-2 transition duration-150 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">&bull;&bull;&bull;

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
      <!-- fin idea-container -->
    </div>

</x-app-layout>
