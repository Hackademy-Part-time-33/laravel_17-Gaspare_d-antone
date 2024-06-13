<?php

namespace App\Livewire\Products;
use Livewire\WithPagination;
use App\Models\Product;
use Livewire\Component;



class Table extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    
    {
        
        return view('livewire.products.table', ['products' => Product::paginate(10),
    ]);
    }
}
