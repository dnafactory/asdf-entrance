<?php

namespace Tests\Unit;

use App\Exercise\Two as Exercise;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExerciseTwoTest extends TestCase
{
    /**
     * @var Exercise
     */
    protected $exercise;

    public function setUp(): void
    {
        parent::setUp();
        $this->exercise = app()->make(Exercise::class);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testExercise()
    {
        $this->assertEquals([], $this->exercise->execute(''));
        $this->assertEquals(['A','B','C','D','A','B'], $this->exercise->execute('AAAABBBCCDAABBB'));
        $this->assertEquals(['A', 'a', 'A', 'B', 'C', 'd'], $this->exercise->execute('AAAaaAAAABBCddd'));
        $this->assertEquals([1,6,9,3,1], $this->exercise->execute([1,1,1,6,6,9,3,3,3,3,1,1,1,1,1]));
    }
}
