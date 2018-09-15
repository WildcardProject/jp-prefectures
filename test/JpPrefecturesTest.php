<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use ProgrammingCat\JpPrefectures\Prefectures;

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
    public function test_prefectures()
    {
        $this->assertSame(47, $this->jpPrefectures->prefectures());
    }
    public function test_prefectureById() {
        $pref = $this->jpPrefectures->prefectureById(1);
        $this->assertSame("北海道", $pref['nameJp']);
        $this->assertSame("北海道", $pref['nameFull']);
        $this->assertSame("Hokkaido", $pref['nameEng']);
        $this->assertSame("01", $pref['code']);
    }
}
