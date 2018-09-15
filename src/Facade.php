<?php
namespace ProgrammingCat\JpPrefectures;

use Illuminate\Support\Facades\Facade;

class JpPrefecture extends Facade {
    protected static function getFacadeAccessor() {
        return 'JpPrefecture';
    }
}
