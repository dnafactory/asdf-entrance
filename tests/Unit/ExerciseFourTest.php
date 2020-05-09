<?php

namespace Tests\Unit;

use App\Exercise\Four as Exercise;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExerciseFourTest extends TestCase
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
        $this->assertEquals([], $this->exercise->execute(0, 0));
        $this->assertEquals([0.0, 0.0, 0.0], $this->exercise->execute(3, 0));
        $this->assertEquals([5.0, 10.0, 15.0], $this->exercise->execute(3, 5));
        $this->assertEquals([7.00, 14.0], $this->exercise->execute(2, 7));
    }
}
