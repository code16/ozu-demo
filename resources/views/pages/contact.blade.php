

<x-layout>
    <x-layout.default>
        <x-slot:title>
            {!! $page->title !!}
        </x-slot:title>

        <x-slot:subtitle>
            {!! $page->content !!}
        </x-slot:subtitle>

        <form
            class="max-w-md"
            action="/"
            method="POST"
            x-data="{ success: false, errors: null }"
            @submit.prevent="success = true; $el.reset();"
        >
            <div x-cloak x-show="success" class="bg-green-400 p-2 mb-4">
                Thanks for your submission!
            </div>

            <div x-cloak x-show="failure" class="bg-red-400 p-2 mb-4">
                Oops! There was a problem submitting your form
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block mb-1">
                        Your email
                    </label>
                    <input class="w-full border-gray-400 rounded" type="email" name="email" required>
                    <div class="text-red-700 text-sm" x-show="errors?.email" x-text="errors?.email"></div>
                </div>
                <div>
                    <label class="block mb-1">
                        Your message
                    </label>
                    <textarea class="w-full border-gray-400 rounded" name="message" required></textarea>
                    <div class="text-red-700 text-sm" x-show="errors?.message" x-text="errors?.message"></div>
                </div>
            </div>

            <button class="mt-4 bg-primary-700 text-white hover:bg-primary-800 rounded py-2 px-3" type="submit">
                Send
            </button>
        </form>
    </x-layout.default>
</x-layout>
