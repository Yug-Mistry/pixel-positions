<?php
use App\Models\Employer;
use App\Models\Job;

// test('example', function () {
//     expect(false)->toBeTrue();
// });

it('belongs to an employer', function () {
    ///AAA (Arrange, Act, Assert)

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act
    $result = $job->employer->is($employer);

    // Assert
    expect($result)->toBeTrue();

});

it('can have tags', function () {
    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tag('Frontend');

    // Assert
    expect($job->tags->count())->toBe(1);
});
