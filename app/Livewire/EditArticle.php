<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Validate;

class EditArticle extends AdminComponent {
	public ArticleForm $form;

	public function mount(Article $article) {
		$this->form->setArticle($article);
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
