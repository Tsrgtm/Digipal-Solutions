<form wire:submit.prevent="submit" class="space-y-6">
    <div>
        <label class="block text-gray-700 mb-2 font-medium">Full Name</label>
        <input type="text" wire:model="name"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            required>
        @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-gray-700 mb-2 font-medium">Email</label>
        <input type="email" wire:model="email"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            required>
        @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-gray-700 mb-2 font-medium">Phone</label>
        <input type="tel" wire:model="phone"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        @error('phone')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-gray-700 mb-2 font-medium">Services Interested In</label>
        <select wire:model="service"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option value="">Select a service</option>
            <option value="seo">SEO Optimization</option>
            <option value="ppc">PPC Advertising</option>
            <option value="web-design">Web Design</option>
            <option value="social-media">Social Media Marketing</option>
            <option value="email">Email Marketing</option>
            <option value="analytics">Analytics</option>
        </select>
        @error('service')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-gray-700 mb-2 font-medium">Message</label>
        <textarea wire:model="message" rows="3"
            class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            required></textarea>
        @error('message')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit"
        class="w-full bg-gradient-to-r from-blue-500 to-green-400 text-white py-3 px-8 rounded-lg font-semibold uppercase hover:opacity-90 transition duration-300 flex items-center justify-center">
        <span class="hidden" wire:loading wire:target="submit">
            <svg class="animate-spin h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
        </span>
        <span wire:loading.remove>Send Message</span>
    </button>

    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

</form>
