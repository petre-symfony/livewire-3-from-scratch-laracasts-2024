<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends AdminComponent {
	public function render() {
		return view('livewire.article-list', [
			'articles' => Article::all()
		]);
	}
}
