<?php

namespace App\Livewire;

use App\Models\Article;

class ArticleList extends AdminComponent {
	public $articles = [];

	public function mount() {
		$this->articles = Article::all();
	}

	public function delete(Article $article) {
		$article->delete();
	}

	public function render() {
		return view('livewire.article-list');
	}
}
