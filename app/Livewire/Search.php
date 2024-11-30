<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component {
	#[Validate('required')]
	public $searchText = '';
	public $results = [];

	public function render() {
		return view('livewire.search');
	}
}
