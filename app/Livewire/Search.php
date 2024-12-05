<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component {
	#[Url]
	public $searchText = '';
	public $placeholder;


	#[On('search:clear-results')]
	public function clear() {
		$this->reset('results', 'searchText');
	}

	public function render() {
		return view('livewire.search', [
			'results' => Article::where('title', 'LIKE', "%{$this->searchText}%")->get()
		]);
	}
}
