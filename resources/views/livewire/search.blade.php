<div>
  <form>
    <div class="mt-2">
      <input
          type="text" class="p-4 w-full border rounded-md bg-gray-700 text-white"
          placeholder="{{ $placeholder }}"
          wire:model.live.debounce="searchText"
          wire:offline.attr="disabled"
      >
    </div>
  </form>

  <livewire:search-results :results="$results" :show="!empty($searchText)">
</div>
