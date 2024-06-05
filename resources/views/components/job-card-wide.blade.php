@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">
            {{ $job->employer->name }}
        </a>
        <a href="{{ $job->url }}" target="_blank">
            <h3 class="group-hover:text-blue-600  font-bold mt-2 text-xl transition-colors duration-300">
                {{ $job->title }}
            </h3>
        </a>
        <p class="text-sm text-gray-400 mt-auto"> Annual Salary:&nbsp;<strong> {{ $job->salary }}</strong></p>
    </div>
    <div class="">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach

        </div>
    </div>
</x-panel>
