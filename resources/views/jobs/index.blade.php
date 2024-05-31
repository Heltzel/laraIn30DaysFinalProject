<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-6xl">Let's find your next job...</h1>
            <form action=""class="mt-6 mb-8">
                <input type="text" name="" id="" placeholder="Job title..."
                    class="rounded-xl bg-white/15 px-8 py-4 mt-4 w-full max-w-xl" />
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag size="base" :tag="$tag" />
                @endforeach
            </div>
        </section>
        <section><x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($unFeaturedJobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>

        </section>
    </div>
</x-layout>
