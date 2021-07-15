<nav class="items-center justify-between hidden text-xs text-gray-400 md:flex ">
    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
        <li>
            <a wire:click.prevent="setStatus('All')" href="{{ route('idea.index', ['status' => 'All']) }}" class="pb-3
            @if ($status==='All' ) text-gray-900 border-blue @endif hover:border-blue border-b-4 ">Toutes les idées({{ $statusCount['all_statuses'] }})</a>
        </li>
        <li>
            <a wire:click.prevent=" setStatus('Examination')" href="{{ route('idea.index', ['status' => 'Examination']) }}" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue  @if ($status==='Examination' ) text-gray-900  border-blue @endif">
                examiné({{ $statusCount['examination'] }})
            </a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('En cours')" href="{{ route('idea.index', ['status' => 'En cours']) }}" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue @if ($status==='En cours' ) text-gray-900 border-blue @endif">
                En Traitement({{ $statusCount['encours'] }})
            </a>
        </li>
    </ul>
    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
        <li>
            <a wire:click.prevent="setStatus('Mis en place')" href="{{ route('idea.index', ['status' => 'Mis en place']) }}" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue @if ($status==='Mis en place' ) text-gray-900 border-blue @endif">
                Implementé({{ $statusCount['implementation'] }})
            </a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Clos')" href="{{ route('idea.index', ['status' => 'Clos']) }}" class="pb-3 transition duration-150 ease-in border-b-4 hover:border-blue @if ($status==='Clos' ) text-gray-900 border-blue @endif">
                Cloturé({{ $statusCount['clos'] }})
            </a>
        </li>
    </ul>
</nav>
