<nav class="items-center justify-between hidden text-xs text-gray-400 md:flex ">
    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
        <li>
            <a wire:click.prevent="setStatus('All')" href="#" class="pb-3
            @if ($status==='All' ) text-gray-900 border-blue @endif hover:border-blue border-b-4 ">Toutes les idées(87)</a>
        </li>
        <li>
            <a wire:click.prevent=" setStatus('Examination')" href="#" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue  @if ($status==='Examination' ) text-gray-900  border-blue @endif">examiné(7)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('En cours')" href="#" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue @if ($status==='En cours' ) text-gray-900 border-blue @endif">En Traitement(1)</a>
        </li>
    </ul>
    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
        <li>
            <a wire:click.prevent="setStatus('Mis en place')" href="#" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue @if ($status==='Mis en place' ) text-gray-900 border-blue @endif">Implementé(10)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Clos')" href="#" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue @if ($status==='Clos' ) text-gray-900 border-blue @endif">Cloturé(54)</a>
        </li>
    </ul>
</nav>
