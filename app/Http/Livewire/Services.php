<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class Services extends Base
{
    public $sortBy = 'name';
    public function render()
    {
        if ($this->search) {
            $categories = ServiceCategory::query()
                ->where('name', 'like', '%' . $this->search . '%')
                // ->Orwhere('email', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.services',
                ['categories' => $categories]
            );
        } else {
            $categories = ServiceCategory::orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.services',
                ['categories' => $categories]
            );
        }
    }
}
