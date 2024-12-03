<div class="m-auto w-1/2 mb-4">
  <h3 class="text-lg text-gray-200 mb-3">Create Article</h3>
  <form wire:submit="save">
    <div class="mb-3">
      <label wire:dirty.class="text-orange-400" wire:target="form.title" class="block" for="article-title">
        Title<span wire:dirty wire:target="form.title">*</span>
      </label>
      <input
          type="text"
          class="p-2 w-full border rounded-md bg-gray-700 text-white"
          wire:model="form.title"
      >
      <div>
        @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
      </div>
    </div>
    <div class="mb-3">
      <label wire:dirty.class="text-orange-400" wire:target="form.content" class="block" for="article-content">
        Content<span wire:dirty wire:target="form.content">*</span>
      </label>
      <textarea
          id="article-content"
          class="p-2 w-full border rounded-md bg-gray-700 text-white"
          wire:model="form.content"
      ></textarea>
      <div>
        @error('content') <span class="text-red-600">{{ $message }}</span> @enderror
      </div>
    </div>
    <div class="mb-3">
      <label wire:dirty.class="text-orange-400" wire:target="form.published" class="flex items-center">
        <input type="checkbox" name="published" id=""
               class="mr-2" wire:model.boolean="form.published"
        >
        Published<span wire:dirty wire:target="form.published">*</span>
      </label>
    </div>
    <div class="mb-3">
      <div>
        <div wire:dirty.class="text-orange-400" wire:target="form.notifications" class="mb-2">
          Notification Options<span wire:dirty wire:target="form.notifications">*</span>
        </div>
        <div class="flex gap-6 mb-3">
          <label class="flex items-center">
            <input type="radio" value="true" class="mr-2"
                   wire:model.boolean="form.allowNotifications"
            >
            Yes
          </label>
          <label class="flex items-center">
            <input type="radio" value="false" class="mr-2"
                   wire:model.boolean="form.allowNotifications"
            >
            No
          </label>
        </div>
        <div x-show="$wire.form.allowNotifications">
          <label class="flex items-center">
            <input type="checkbox" value="email" class="mr-2"
                   wire:model="form.notifications"
            >
            Email
          </label>
          <label class="flex items-center">
            <input type="checkbox" value="sms" class="mr-2"
                   wire:model="form.notifications"
            >
            SMS
          </label>
          <label class="flex items-center">
            <input type="checkbox" value="push" class="mr-2"
                   wire:model="form.notifications"
            >
            Push
          </label>
        </div>
      </div>
    </div>
    <div class="mb-3">
      <button
          class="text-gray-200 p-2 bg-blue-700 rounded-sm disabled:opacity-75 disabled:bg-blue-300"
          type="submit"
          wire:dirty.class="hover:bg-blue-900"
          disabled
      >
        Save
      </button>
    </div>
  </form>
</div>