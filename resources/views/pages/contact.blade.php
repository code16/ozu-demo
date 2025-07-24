

<x-layout>
    <x-layout.default>
        <x-slot:title>
            {!! $page->title !!}
        </x-slot:title>

        <x-slot:subtitle>
            {!! $page->content !!}
        </x-slot:subtitle>

        <div class="flex justify-between gap-8 flex-wrap md:flex-nowrap">
            <form
                class="max-w-md w-full"
                action="/"
                method="POST"
                x-data="{ success: false, errors: null }"
                @submit.prevent="success = true; $el.reset();"
            >
                <div x-cloak x-show="success" class="bg-green-400 p-2 mb-4">
                    Thanks for your submission!
                </div>

                <div x-cloak x-show="errors" class="bg-red-400 p-2 mb-4">
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

            <div class="max-w-md">
                <h3 class="font-bold inline-flex gap-1 items-center mt-0"><x-tabler-exclamation-circle class="w-5 h-5 inline" /> Technical disclaimer</h3>
                <p>
                    Ozu helps you build <b>static websites</b> with dynamic content. You can't use forms as you would with a dynamic website using Laravel or another backend stack.
                    You'll have to use javascript to process your form (as the one aside), or you could use an external form provider with an iframe.
                </p>
            </div>
        </div>
    </x-layout.default>
</x-layout>
