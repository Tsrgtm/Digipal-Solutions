<div>
    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest updates.</p>
    <form wire:submit.prevent="submit" class="flex">
        <input type="email" placeholder="Your email"
            class="px-4 py-2 rounded-l-lg focus:outline-none bg-gray-100 text-gray-800 w-full" wire:model="email">
        <button type="submit"
            class="bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-r-lg transition duration-300 flex items-center justify-center">
            <i class="fas fa-paper-plane" wire:loading.remove></i>
            <span class="hidden" wire:loading>
                <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </span>
        </button>
    </form>
    @if ($errors->has('email'))
        <p class="text-red-500 mt-2 text-xs">{{ $errors->first('email') }}</p>
    @endif

    @if (session()->has('success'))
        <p class="text-green-500 text-xs mt-2">{{ session('success') }}</p>
    @endif
</div>
