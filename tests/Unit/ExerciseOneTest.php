<?php

namespace Tests\Unit;

use App\Exercise\One as Exercise;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExerciseOneTest extends TestCase
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
        $this->assertEquals(5, $this->exercise->execute([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]));
        $this->assertEquals(-1, $this->exercise->execute([1,1,2,-2,5,2,4,4,-1,-2,5]));
        $this->assertEquals(5, $this->exercise->execute([20,1,1,2,2,3,3,5,5,4,20,4,5]));
        $this->assertEquals(10, $this->exercise->execute([10]));
        $this->assertEquals(10, $this->exercise->execute([1,1,1,1,1,1,10,1,1,1,1]));
    }
}
