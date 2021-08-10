@props(['job'])
<li {{ $attributes }}>
    <a href="{{ $job->url }}" target="_blank" class="block">
        <div class="px-4 py-4 sm:px-6">
            <div class="flex">
                <div class="h-20 w-20 bg-gray-400 mr-2 sm:rounded-md"></div>
                <div class="flex-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-lg font-bold text-indigo-600 truncate">
                                {{ $job->title }}
                            </p>
                            <p class=" items-center text-md text-gray-900">
                                {{ $job->company_name }}
                            </p>
                        </div>
                        <div class="ml-2 flex-shrink-0 flex">
                            <p>
                                {{ $job->days_since_created }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-2 sm:flex sm:justify-between">
                        <div class="sm:flex">
                            <p class="mt-2 flex items-center text-md text-gray-900 sm:mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                                {{ $job->company_type }}
                            </p>
                            <p class="mt-2 flex items-center text-md text-gray-900 sm:mt-0 sm:ml-6">
                                <!-- Heroicon name: solid/location-marker -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $job->location }}
                            </p>
                        </div>
                        <div class="mt-2 flex items-center text-md text-gray-900 sm:mt-0">
                            <?php
                            $tags = [];
                            if ($job->tags) {
                                $tags = explode(',', $job->tags);
                            }
                            ?>
                            @foreach ($tags as $tag)
                                <p
                                    class="ml-2 px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $tag }}
                                </p>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
    </a>
</li>
