<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;

class IdeasIndex extends Component
{

    use WithPagination;
    public $status = 'All';
    public $category;
    public $filter;
    public $search;
    protected $queryString = [
        'status',
        'category',
        'filter',
        'search'
    ];

    protected $listeners = ['queryStringUpdatedStatus'];
    public function updatingCategory()
    {
        $this->resetPage();
    }
    public function updatingFilter()
    {
        $this->resetPage();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatedFilter()
    {
        if ($this->filter == 'myideas') {
            if (!auth()->check()) {
                return redirect()->route('login');
            }
        }
    }

    public function queryStringUpdatedStatus($newStatus)
    {
        $this->resetPage();
        $this->status = $newStatus;
    }

    public function render()
    {
        $statuses = Status::all()->pluck('id', 'name');
        $categories = Category::all();
        return view(
            'livewire.ideas-index',
            [
                'ideas' => Idea::with('user', 'category', 'status')
                    ->when($this->status && $this->status != 'All', function ($query) use ($statuses) {
                        return $query->where('status_id', $statuses->get($this->status));
                    })
                    ->when($this->category && $this->category != 'Toutes', function ($query) use ($categories) {
                        return $query
                            ->where('category_id', $categories->pluck('id', 'name')
                                ->get($this->category));
                    })
                    ->when($this->filter && $this->filter == 'best', function ($query) {
                        return $query
                            ->orderByDesc('votes_count');
                    })
                    ->when($this->filter && $this->filter == 'last', function ($query) {
                        return $query
                            ->orderByDesc('created_at');
                    })
                    ->when($this->filter && $this->filter == 'myideas', function ($query) {
                        return $query
                            ->where('user_id', auth()->id());
                    })
                    ->when(strlen($this->search) >= 3, function ($query) {
                        return $query
                            ->where('title', 'like', '%' . $this->search . '%');
                    })
                    ->addSelect([
                        'voted_by_user' => Vote::select('id')
                            ->where('user_id', auth()->id())
                            ->whereColumn('idea_id', 'ideas.id')
                    ])
                    ->withCount('votes')
                    ->orderBy('created_at', 'desc')
                    ->simplePaginate(10),
                'categories' => $categories,
            ]
        );
    }
}
