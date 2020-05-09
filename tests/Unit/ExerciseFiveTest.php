<?php

namespace Tests\Unit;

use App\Exercise\Five as Exercise;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExerciseFiveTest extends TestCase
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
        $this->assertEquals([0], $this->exercise->execute(0, 0));
        $this->assertEquals([3, 4, 5], $this->exercise->execute(3, 5));
        $this->assertEquals([1, 2, 3], $this->exercise->execute(1, 3));
        $this->assertEquals([-1], $this->exercise->execute(8, 2));
    }
}
