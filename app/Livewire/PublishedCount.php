<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class PublishedCount extends Component {
	public $count = 0;

	public function mount() {
		sleep(3);

		$this->count = Article::where('published', 1)->count();
	}

	public function placeholder() {
		return 'Published count is loaded';
	}

	public function render() {
		return view('livewire.published-count');
	}
}
