<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;

class EditArticle extends AdminComponent {
	public function mount(Article $article) {
		
	}

	public function save() {
		$this->validate();

		$this->article->update($this->only(['title', 'content']));

		$this->redirect('/dashboard/articles', navigate: true);
	}

	public function render() {
		return view('livewire.edit-article');
	}
}
