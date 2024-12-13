<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component {
	#[Validate('required|email')]
	public $email = '';
	public $password = '';

	public function render() {
		return view('livewire.login');
	}
}
