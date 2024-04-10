<?php

namespace App\Http\Livewire;

use App\Mail\NewContact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $phone;
    public $address;
    public $email;
    public $message;

    public $thankYou = false;

    public function render()
    {
        return view('livewire.contact');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = \App\Models\Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        Mail::to(config('cajas.email.to'))
            ->send(new NewContact($contact));


        $this->thankYou = true;
    }
}
