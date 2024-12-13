<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('login')]
class Login extends Component {
	#[Validate('required|email')]
	public $email = '';
	public $password = '';

	public $loginMessage = '';

	public function authenticate() {
		$this->validate();

		$valid = \Auth::attempt(['email' => $this->email, 'password' => $this->password]);

		if ($valid) {
			$this->redirectIntended('/dashboard');
		} else {
			$this->loginMessage = 'Incorrect email or/and password';
		}
	}

	public function render() {
		return view('livewire.login');
	}
}
