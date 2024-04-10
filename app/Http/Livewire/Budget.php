<?php

namespace App\Http\Livewire;

use App\Mail\NewBudget;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Budget extends Component
{
    public $fullName;
    public $phone;
    public $address;
    public $provinceId;
    public $locality;
    public $email;
    public $long;
    public $wide;
    public $high;
    public $amount;
    public $industry;
    public $contentWeight;
    public $compression;
    public $bursting;
    public $pattern;
    public $other;

    public $thankYou = false;
    public $expandForm = false;

    protected $listeners = ['expandBudgetForm' => 'expandForm'];

    public function expandForm()
    {
        $this->expandForm = true;

        $this->dispatchBrowserEvent('scroll-into-budget');
    }

    public function mount()
    {
        $this->provinceId = 1; // Capital Federal
    }

    public function render()
    {
        return view('livewire.budget');
    }

    public function save()
    {
        $this->validate([
            'provinceId' => 'in:' . collect(config('cajas.provinces'), 'id')->pluck('id')->implode(','),
            'fullName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'locality' => 'required',
            'email' => 'required|email',
            'long' => 'required|integer|min:1|gte:wide',
            'wide' => 'required|integer|min:1',
            'high' => 'required|integer|min:1',
            'amount' => 'required|integer|min:1000',
            'industry' => 'required',
            'contentWeight' => 'nullable|integer|min:1',
            'compression' => 'nullable|integer|min:1',
            'bursting' => 'nullable|integer|min:1',
        ]);

        $budget = \App\Models\Budget::create([
            'full_name' => $this->fullName ?? null,
            'phone' => $this->phone ?? null,
            'address' => $this->address ?? null,
            'province_id' => $this->provinceId ?? null,
            'locality' => $this->locality ?? null,
            'email' => $this->email ?? null,
            'long' => $this->long ?? null,
            'wide' => $this->wide ?? null,
            'high' => $this->high ?? null,
            'amount' => $this->amount ?? null,
            'industry' => $this->industry ?? null,
            'content_weight' => $this->contentWeight ?? null,
            'compression' => $this->compression ?? null,
            'bursting' => $this->bursting ?? null,
            'pattern' => $this->pattern ?? null,
            'other' => $this->other ?? null,
        ]);

        Mail::to(config('cajas.email.to'))
            ->send(new NewBudget($budget));

        $this->dispatchBrowserEvent('budget-requested');
        $this->thankYou = true;
    }
}
