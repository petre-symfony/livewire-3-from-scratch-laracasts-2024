<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component {
	public $name = 'Joe';

	public function changeName() {
		$this->name = 'Jeffrey';
	}

	public function render() {
		return view('livewire.greeter');
	}
}
