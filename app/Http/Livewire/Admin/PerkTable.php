<?php

namespace App\Http\Livewire\Admin;

use App\Models\Perk;
use Livewire\Component;
use Livewire\WithPagination;

class PerkTable extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '15']
    ];

    public $search = '';
    public $perPage = '15';

    public function render()
    {
        $perks = Perk::where('perkname','LIKE',"%$this->search%")
            ->orWhere('description','LIKE',"%$this->search%")
            ->orWhere('price','LIKE',"%$this->search%")
            ->orderByRaw('length(price),price')
            ->paginate($this->perPage);
        return view('livewire.admin.perks-table', compact('perks'));
    }

    public function clear(){
        $this->search = '';
        $this->page = 1;
        $this->perPage = '15';
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
