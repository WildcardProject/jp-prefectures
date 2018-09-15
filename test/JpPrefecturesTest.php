<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use ProgrammingCat\JpPrefecture\Prefecture;

class JpPrefectureTest extends TestCase
{
    protected $jpPrefectures;
    public function setUp() {
        $this->jpPrefectures = new Prefectures;
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_prefectureById()
    {
        $this->assertSame(47, $this->jpPrefectures->prefectures());
    }
}
