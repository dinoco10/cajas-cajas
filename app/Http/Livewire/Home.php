<?php

namespace App\Http\Livewire;

use App\Mail\NewBudget;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Home extends Component
{
    public $long;
    public $wide;
    public $high;
    public $amount;
    public $contentWeight;
    public $material;
    public $pattern;
    public $other;

    public $thankYou;

    public function mount(Request $request)
    {
        $this->thankYou = match (trim($request->getRequestUri(), '/')) {
            'solicitud-presupuesto-recibida' => 'budget',
            'mensaje-contacto-recibido' => 'contact',
            default => null,
        };
    }

    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app');
    }

    public function saveBudget()
    {
        $this->validate([
            'long' => 'required|integer|min:1|gte:wide',
            'wide' => 'required|integer|min:1',
            'high' => 'required|integer|min:1',
            'amount' => 'required|integer|min:1000',
            'contentWeight' => 'nullable|integer|min:1',
            // material?
            // patttern no validation?
            // other free text? yes
        ]);

        $budget = Budget::create([
            'long' => $this->long,
            'wide' => $this->wide,
            'high' => $this->high,
            'amount' => $this->amount,
            'content_weight' => $this->contentWeight,
            'material' => $this->material,
            'pattern' => $this->pattern,
            'other' => $this->other,
        ]);

        Mail::to('cmasc@riocuartosa.com.ar')
            ->send(new NewBudget($budget));

        return redirect('solicitud-presupuesto-recibida');
    }

    public function saveMessage()
    {
        dd(2);
    }
}
