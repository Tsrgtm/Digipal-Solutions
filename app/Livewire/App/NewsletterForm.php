<?php

namespace App\Livewire\App;

use Livewire\Component;

class NewsletterForm extends Component
{
    public $name;
    public $email;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email|unique:newsletter_forms,email',
        ]);

        \App\Models\NewsletterForm::create([
            'name' => $this->name,
            'email' => $this->email,
            'subscribed' => true
        ]);

        session()->flash('success', 'Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.app.newsletter-form');
    }
}
