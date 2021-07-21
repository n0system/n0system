<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class MarkIdeaAsSpam extends Component
{
    public $idea;
    public $title;


    public function markAsSpam()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        //Vote::where('idea_id', $this->idea->id)->delete();
        //Idea::destroy($this->idea->id);
        $this->idea->spam_counter++;
        $this->idea->save();
        $this->emit('ideaWasMarkedAsSpam');

        //return redirect()->route('idea.index');
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
        return view('livewire.mark-idea-as-spam');
    }
}
