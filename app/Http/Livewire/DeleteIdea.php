<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Vote;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class DeleteIdea extends Component
{
    public $idea;
    public $title;
    public $category;
    public $description;
    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer|exists:categories,id',
        'description' => 'required|min:4',
    ];

    public function deleteIdea()
    {
        if (auth()->guest() || auth()->user()->cannot('delete', $this->idea)) {
            abort(Response::HTTP_FORBIDDEN);
        }
        Vote::where('idea_id', $this->idea->id)->delete();
        Idea::destroy($this->idea->id);

        return redirect()->route('idea.index');
    }

    public function mount(Idea $idea)
    {
        $this->idea = $idea;
        $this->title = $idea->title;
        $this->category = $idea->category_id;
        $this->description = $idea->description;
    }
    public function render()
    {
        return view('livewire.delete-idea');
    }
}
