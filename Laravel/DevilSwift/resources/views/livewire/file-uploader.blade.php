<div>
    <form wire:submit="save">
        @csrf
        <input  type="file" wire:model="file">
        <button type="submit" class="bg-gray-200 px-1 rounded border-1 border-gray-400 text-gray-900" value="Send it!">Send it!</button>

        <span>
            <input type="radio" id="public" wire:model="public_visibility" value="1" class="hidden peer" wire:click="suckyoudomtrickers(1)"/>
            <label for="public" class="transition inline-flex items-center justify-between px-1 ml-4 text-gray-400 bg-gray-800 border border-gray-700 rounded-lg cursor-pointer hover:text-gray-300 hover:bg-gray-700 peer-checked:text-green-500 peer-checked:border-green-600">
                <div class="block">
                    <div class="text-lg font-semibold">Public</div>
                </div>
            </label>
        </span>
        <span>
            <input type="radio" id="private" wire:model="public_visibility" value="0" class="hidden peer" wire:click="suckyoudomtrickers(0)"/>
            <label for="private" class="transition inline-flex items-center justify-between px-1 m-1 text-gray-400 bg-gray-800 border border-gray-700 rounded-lg cursor-pointer hover:text-gray-300 hover:bg-gray-700 peer-checked:text-red-500 peer-checked:border-red-600">
                <div class="block">
                    <div class="text-lg font-semibold">Private</div>
                </div>
            </label>
        </span>
        <span class="text-white">{{ $error }}</span>
    </form>
</div>
