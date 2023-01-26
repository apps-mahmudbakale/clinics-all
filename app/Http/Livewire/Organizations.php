<?php

namespace App\Http\Livewire;

use App\Models\Organization;
use Livewire\Component;

class Organizations extends Base
{
    public function render()
    {
        if ($this->search) {
            $organizations = Organization::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('category', 'like', '%'. $this->search . '%')
                ->orWhere('phone', 'like', '%'. $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.organizations',
                ['organizations' => $organizations]
            );
        } else {
            $organizations = Organization::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.organizations',
                ['organizations' => $organizations]
            );
        }
    }
}
