<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticle extends Component {
	#[Validate('required')]
	public $title;
	#[Validate('required')]
	public $content;

	public function save() {
		$this->validate();

		Article::create($this->all());

		$this->redirect('/dashboard/articles');
	}

	public function render() {
		return view('livewire.create-article');
	}
}
