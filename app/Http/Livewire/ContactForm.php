<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:3|max:15|string',
            'email' => 'email',
            'phone' => 'min:3|max:15',
            'message' => 'min:3'
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3|max:15|string',
            'email' => 'required|email',
            'phone' => 'required|min:3|max:15',
            'message' => 'required|min:3'
        ]);

        $contact = Contact::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message
        ]);

        //$contact->notify(new MailContact($this->name, $this->email, $this->subject, $this->content));

        session()->flash('success', 'Message envoyé avec succès');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
