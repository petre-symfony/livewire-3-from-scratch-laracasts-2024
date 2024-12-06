<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;

class ArticleList extends AdminComponent {
	use WithPagination;

	public $showOnlyPublished = false;

	#[Computed(persist: false)]
	public function articles() {
		$query = Article::query();

		if ($this->showOnlyPublished) {
			$query->where('published', 1);
		}

		return $query->paginate(10, pageName: 'articles-page');
	}

	public function delete(Article $article) {
		if ($this->articles->count() < 10) {
			throw new \Exception("Nope");
		}

		$article->delete();
		unset($this->articles);
		cache()->forget('published-count');
	}

	public function showAll() {
		$this->showOnlyPublished = false;
		$this->resetPage('articles-page');
	}

	public function showPublished() {
		$this->showOnlyPublished = true;
		$this->resetPage('articles-page');
	}
}
