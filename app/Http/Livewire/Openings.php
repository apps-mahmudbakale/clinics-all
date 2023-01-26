<?php

namespace App\Http\Livewire;

use App\Models\Opening;
use Livewire\Component;

class Openings extends Base
{
    public $sortBy = 'title';
    public function render()
    {
        if ($this->search) {
            $openings = Opening::query()
                ->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%'. $this->search . '%')
                ->orWhere('time_limit', 'like', '%'. $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.openings',
                ['openings' => $openings]
            );
        } else {
            $openings = Opening::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.openings',
                ['openings' => $openings]
            );
        }
    }
}
