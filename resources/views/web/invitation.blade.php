<x-web-layout>
    <div class="pt-24">
        <div class="bg-slate-200 py-4 min-h-[80vh] px-4">
            <div class="relative mx-auto py-8 max-w-lg bg-white shadow rounded-2xl">
                <h1 class="text-2xl font-bold text-center py-2 mx-auto text-slate-900">Invitation to Sirius Messenger</h1>
                <p class="text-md text-slate-900 py-2 mt-3 mx-4">
                    You are seeing this message because user <span class="font-bold">{{ $label }}</span> invited you to communicate via
                    blockchain based secret chat but you have not installed Sirius Messenger yet.
                </p>
                <div class="w-full px-4 pt-6">
                    <x-web.button href="socialsirius://" class="px-4 py-2 w-full inline-flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        Open Sirius Messenger
                    </x-web.button>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
