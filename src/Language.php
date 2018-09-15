<?php
namespace ProgrammingCat\JpPrefecture;

class Language {
    protected $lang = 'jp';
    public function lang($lang=NULL)
    {
        return !$lang ? $this->lang : ($this->lang=$lang);
    }
}