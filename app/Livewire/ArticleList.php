<?php

namespace App\Livewire;

use App\Models\Article;

class ArticleList extends AdminComponent {
	public function delete(Article $article) {
		$article->delete();
	}

	public function render() {
		return view('livewire.article-list', [
			'articles' => Article::all()
		]);
	}
}
