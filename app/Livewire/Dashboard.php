<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Admin Dashboard')]
class Dashboard extends Component {
	public function render() {
		return view('livewire.dashboard')
			->layout('components.layouts.admin');
	}
}
