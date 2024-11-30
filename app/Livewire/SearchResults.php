<?php

namespace App\Livewire;

use Livewire\Component;

class SearchResults extends Component {
	public $results;

	public function render() {
		return view('livewire.search-results');
	}
}
