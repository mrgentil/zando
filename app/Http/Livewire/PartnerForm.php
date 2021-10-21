<?php

namespace App\Http\Livewire;

use App\Repair;
use Livewire\Component;

class PartnerForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $type;
    public $organisation;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:3|max:15|string',
            'email' => 'email',
            'phone' => 'min:3|max:15',
            'type'          => 'min:3',
            'organisation'        => 'min:3',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3|max:15|string',
            'email' => 'required|email',
            'phone' => 'required|min:3|max:15',
            'type' => 'required|min:3',
            'organisation' => 'required|min:3',
        ]);

        $contact = Repair::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'type' => $this->type,
            'organisation' => $this->organisation,
        ]);

        //$contact->notify(new MailContact($this->name, $this->email, $this->subject, $this->content));

        session()->flash('success', 'Demande envoyé avec succès');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.partner-form');
    }
}
