@props(['job'])
<x-panel class=" flex flex-col text-center ">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <a href="{{ $job->url }}" target="_blank">
            <h3 class= "group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{ $job->title }}
            </h3>
        </a>
        <p class="text-sm mt-4">Annual Salary:&nbsp;<strong> {{ $job->salary }} </strong></p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>
        <div>
            <x-employer-logo :employer="$job->employer" :width="84" />
        </div>
    </div>
</x-panel>
