<?php

use App\Models\Job;
use App\Models\Employer;

it(' belongs to an employer', function () {
    //arange 
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //act (in this case combined with assert)
    expect($job->employer->is($employer))->toBeTrue();

    //assert

});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
