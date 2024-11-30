<div>
  <form>
    <div class="mt-2">
      <input
          type="text" class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"
          placeholder="Type something to search"
          wire:model.live.debounce="searchText"
      >

      <button class="text-white font-medium rounded-md p-4 bg-indigo-600 disabled:bg-indigo-400"
              wire:click.prevent="clear()"
              {{empty($searchText) ? 'disabled' : ''}}
      >
        Clear
      </button>
    </div>
  </form>

  <div class="mt-4">
    @foreach($results as $result)
      <div class="pt-2">
        <a href="/articles/{{ $result->id }}">
          {{ $result->title }}
        </a>
      </div>
    @endforeach
  </div>
</div>
