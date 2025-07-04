@props(['name', 'img', 'url'])

<a :href="$url">
    <div class=" gap-y-10 mx-4 mb-16 ml-11">
        <div class="max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a>
                <img class="rounded-xl" src='{{ asset($img) }}' alt="" />
            </a>

            <div class="p-0.5">
                <h5
                    class=" flex items-center justify-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $name }}
                </h5>
            </div>
        </div>
    </div>
</a>
