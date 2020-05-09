<?php

namespace Tests\Unit;

use App\Exercise\Three as Exercise;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExerciseThreeTest extends TestCase
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
        $this->assertEquals($this->exercise->execute(['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']), 30);
        $this->assertEquals($this->exercise->execute(['1:1','2:2','3:3','4:4','2:2','3:3','4:4','3:3','4:4','4:4']), 10);
        $this->assertEquals($this->exercise->execute(['0:1','0:2','0:3','0:4','1:2','1:3','1:4','2:3','2:4','3:4']), 0);
        $this->assertEquals($this->exercise->execute(['1:0','2:0','3:0','4:0','2:1','1:3','1:4','2:3','2:4','3:4']), 15);
        $this->assertEquals($this->exercise->execute(['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4']), 12);
    }
}
