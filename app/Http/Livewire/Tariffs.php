<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Tariffs extends Base
{
    public $category;
    public $sortBy = 'name';
    public $serviceId;
    public $category_id;
    public $name;
    public $price;
    public $qty;

    public function selectTariff($id)
    {
        $tariff = Service::find($id);
        $this->category_id = $tariff->category_id;
        $this->name = $tariff->name;
        $this->price = $tariff->price;
        $this->qty = $tariff->qty;
        $this->serviceId = $tariff->id;
        // dd($this->name);
         $this->dispatchBrowserEvent('TariffEditModal');
    }

    public function updateTariff()
    {
        Service::where('id', $this->serviceId)->update([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'price' => $this->price,
            'qty' => $this->qty
        ]);

        redirect()->route('app.settings.index')->with('success', 'HMO Plan Updated');
    }
    public function render()
    {
        if ($this->search) {
            $tariffs = Service::query()
                ->where('category_id', '=', $this->category)
                ->where('name', 'like', '%' . $this->search . '%')
                // ->Orwhere('email', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.tariffs',
                ['tariffs' => $tariffs]
            );
        } else {
            $tariffs = Service::query()->where('category_id', '=', $this->category)->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.tariffs',
                ['tariffs' => $tariffs]
            );
        }
    }
}
