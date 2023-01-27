<?php

namespace App\Http\Livewire;

use App\Models\HmoGroup;
use Livewire\Component;

class HmoGroups extends Base
{
    public $sortBy = 'name';
    public function render()
    {
        if ($this->search) {
            $hmos = HmoGroup::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.hmo-groups',
                ['hmos' => $hmos]
            );
        } else {
            $hmos = HmoGroup::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.hmo-groups',
                ['hmos' => $hmos]
            );
        }
    }
}
