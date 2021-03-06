<div class="{{ $attributes['class'] }} relative">
    <div
        @isset($selectedItem)
        x-data="{show: false, selectedID: '{{$selectedItem['id']}}', selectedName: '{{$selectedItem['name']}}'}"
        @else
        x-data="{show: false, selectedID: 0, selectedName: ''}"
        @endisset
    >
        <label id="listbox-label" class="block text-sm font-medium text-gray-700">
            {{ $attributes['title'] }}
        </label>
        <div class="mt-1">
            <button type="button"
                    class="w-full flex justify-between bg-white border border-gray-300 rounded-md shadow-sm py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"
                    @click="show = (show) ? false : true">
                <div class="flex items-center">
                    <span class="ml-3 block truncate"
                          x-text="selectedName !== '' ? selectedName : '{{ $attributes['title'] }}'"></span>
                </div>
                <span class="inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor"
                         aria-hidden="true">
                      <path fill-rule="evenodd"
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd"/>
                    </svg>
                </span>
            </button>

            <ul x-show="show"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
                tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                aria-activedescendant="listbox-option-3">
                @foreach($items as $item)
                    <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 cursor-pointer"
                        id="listbox-option-0" role="option"
                        @click="selectedID = '{{ $item->id }}', selectedName = '{{ $item->name }}', show = false">
                        <div class="flex items-center">
                            <span
                                x-bind:class="selectedID == '{{ $item->id }}' ? 'font-semibold' : 'font-normal'"
                                class="ml-3 block truncate">
                                {{ $item->name }}
                            </span>
                        </div>

                        <span
                            x-bind:class="selectedID == '{{ $item->id }}' ? 'text-indigo-600' : 'text-white'"
                            class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </li>
                @endforeach
            </ul>
            <input class="dashboard-language-not-localize" type="hidden" name="{{ $attributes['name'] }}" x-bind:value="selectedID">
        </div>
    </div>
</div>
