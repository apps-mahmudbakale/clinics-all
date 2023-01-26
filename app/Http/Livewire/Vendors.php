<?php

namespace App\Http\Livewire;

use App\Models\Vendor;
use Livewire\Component;

class Vendors extends Base
{
    public function render()
    {
        if ($this->search) {
            $vendors = Vendor::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('category', 'like', '%'. $this->search . '%')
                ->orWhere('phone', 'like', '%'. $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.vendors',
                ['vendors' => $vendors]
            );
        } else {
            $vendors = Vendor::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.vendors',
                ['vendors' => $vendors]
            );
        }
    }
}
