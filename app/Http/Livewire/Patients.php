<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class Patients extends Base
{
    public $sortBy = 'hospital_no';
    public function render()
    {
        if ($this->search) {
            $patients = Patient::query()
                ->where('hospital_no', 'like', '%' . $this->search . '%')
                // ->Orwhere('email', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.patients',
                ['patients' => $patients]
            );
        } else {
            $patients = Patient::orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.patients',
                ['patients' => $patients]
            );
        }
    }
}
