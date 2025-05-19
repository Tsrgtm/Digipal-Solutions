<?php

namespace App\Livewire\App;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $service;
    public $message;


    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);

        $contact = \App\Models\ContactForm::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'service' => $this->service,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Your message has been sent successfully!. We will get back to you soon.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.app.contact-form');
    }
}
