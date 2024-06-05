@props(['employer', 'width' => '60'])


<img src="{{ asset('storage/' . $employer->logo) }}" alt="Employer logo" width="{{ $width }}" class="rounded-xl">
