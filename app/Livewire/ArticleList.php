<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\WithPagination;

class ArticleList extends AdminComponent {
	use WithPagination;

	public function delete(Article $article) {
		$article->delete();
	}

	public function render() {
		return view('livewire.article-list', [
			'articles' => Article::paginate(10)
		]);
	}
}
