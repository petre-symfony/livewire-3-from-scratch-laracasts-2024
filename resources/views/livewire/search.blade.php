<div>
  <form>
    <div class="mt-2">
      <input
          type="text" class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"
          placeholder="Type something to search"
          wire:model.live.debounce="searchText"
      >

      <button class="text-white font-medium rounded-md p-4 bg-indigo-600"
              wire:click.prevent="clear()"
      >
        Clear
      </button>
    </div>
  </form>

  <div class="mt-4">
    @foreach($results as $result)
      <div class="pt-2">
        {{ $result->title }}
      </div>
    @endforeach
  </div>
</div>
