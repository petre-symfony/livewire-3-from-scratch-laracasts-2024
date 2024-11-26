<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component {
	public $name = '';
	public $greeting = '';
	public $greetingMessage = '';

	public function changeGreeting() {
		$this->greetingMessage = "{$this->greeting}, {$this->name}!";
	}

	public function render() {
		return view('livewire.greeter');
	}
}
