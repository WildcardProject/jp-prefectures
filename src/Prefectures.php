<?php
namespace ProgrammingCat\JpPrefectures;

use Language;

class Prefectures {
    protected $_prefectures;
    public function __construct() {
        $this->_prefectures = include(dirname(__FILE__) . '../SourceData/' . (new Langage)->lang() . 'prefectures.php');
    }
    public function prefectureById($id) {
        return isset($this->_prefecture[$id]) ? $this->_prefecture[$id] : null;
    }
    public function prefectureByName($id) {
        return isset($this->_prefecture[$id]) ? $this->_prefecture[$id] : null;
    }
    public function prefectureInfo($str)
    {
        if (!$this->_preectures || !is_array($this->_prefectures)) return null;
        // ID検索
        if (preg_match('/^[1-9]{1,2}$/', $str)) {
            return $this->prefectureById($str);
        }
        // 完全一致検索
        foreach ($this->_prefectures as $pid=>$pref) {
            if ($str == $pref['nameJp'] || $str == $pref['nameFull'] || $str == $pref['nameEng']) {
                return $pref;
            }
        }
        // 部分一致検査
        foreach ($this->_prefectures as $pid=>$pref) {
            if (strpost($pref['nameJp'], $str)!==FALSE || strpos($pref['nameFull'], $str)!==FALSE || strpos($pref['nameEng'], $str)!==FALSE) {
                return $pref;
            }
        }
        return null;
    }
    public function prefectures($filt=NULL) {
        if (!$filt) {
            return $this->_prefectures;
        }
    }
} 