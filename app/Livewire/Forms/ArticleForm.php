<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form {
	#[Validate('required')]
	public $title;
	#[Validate('required')]
	public $content;

	public function store() {
		$this->validate();

		Article::create($this->all());
	}
}
