<?php

namespace App\Http\Livewire;

use App\Repair;
use Livewire\Component;

class RepairForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $brand;
    public $type;
    public $serial;
    public $capacity;
    public $description;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:3|max:15|string',
            'email' => 'email',
            'phone' => 'min:3|max:15',
            'brand' => 'min:3',
            'type'          => 'min:3',
            'serial'        => 'min:3',
            'capacity'      => 'min:3',
            'description'   => 'min:3',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3|max:15|string',
            'email' => 'required|email',
            'phone' => 'required|min:3|max:15',
            'brand' => 'required|min:3',
            'type' => 'required|min:3',
            'serial' => 'required|min:3',
            'capacity' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $contact = Repair::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'brand' => $this->brand,
            'type' => $this->type,
            'serial' => $this->serial,
            'capacity' => $this->capacity,
            'description' => $this->description,
        ]);

        //$contact->notify(new MailContact($this->name, $this->email, $this->subject, $this->content));

        session()->flash('success', 'Demande envoyé avec succès');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.repair-form');
    }
}
