<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component {
	#[Url(as: 'q', except: '')]
	public $searchText = '';
	public $placeholder;

	protected function queryString() {
		return [
			'searchText' => [
				'as' => 'q',
				'history' => true,
				'except' => ''
			]
		];
	}

	#[On('search:clear-results')]
	public function clear() {
		$this->reset('searchText');
	}

	public function render() {
		return view('livewire.search', [
			'results' => Article::where('title', 'LIKE', "%{$this->searchText}%")->get()
		]);
	}
}
