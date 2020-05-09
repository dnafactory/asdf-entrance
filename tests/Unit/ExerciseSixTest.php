<?php

namespace Tests\Unit;

use App\Exercise\Six as Exercise;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExerciseSixTest extends TestCase
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
        $this->assertEquals([], $this->exercise->execute(0));
        $this->assertEquals([0], $this->exercise->execute(1));
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8], $this->exercise->execute(7));
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8, 13, 21], $this->exercise->execute(9));
    }
}
