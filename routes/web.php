<?php

use App\Http\Livewire\Home;
use App\Mail\NewBudget;
use App\Mail\NewContact;
use App\Models\Budget;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

// Route::get('mensaje-contacto-recibido', Home::class);

////////////////////////////////////////////////////

if (app()->isLocal()) {
    Route::get('test/budget', function () {
        return new NewBudget(Budget::make([
            'long' => 100,
            'wide' => 100,
            'high' => 100,
            'amount' => 100,
            'content_weight' => 100,
            'material' => 100,
            'pattern' => 100,
            'other' => null,
            'created_at' => now(),
        ]));
    });

    Route::get('test/contact', function () {
        return new NewContact(Contact::make([
            'name' => 'Taylor Otwell',
            'phone' => '1168637776',
            'email' => 'test@example.com',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, molestiae blanditiis! Voluptas voluptatem illo, vel tempora eum inventore magni nesciunt dolorem minus sed, expedita, ipsam quisquam veniam unde quam facilis!',
            'created_at' => now(),
        ]));
    });
}
