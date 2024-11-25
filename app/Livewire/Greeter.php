<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component {
	private $name = 'Joe';

	public function render() {
		return view('livewire.greeter');
	}
}
