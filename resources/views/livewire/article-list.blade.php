<div class="m-auto w-1/2 mb-4">
  <table>
    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
      <tr>
        <th class="px-6 py-3">Title</th>
        <th class="px-6 py-3"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr wire:key="{{ $article->id }}" class="border-b bg-gray-800 border-gray-700">

        </tr>
      @endforeach
    </tbody>
  </table>
</div>
