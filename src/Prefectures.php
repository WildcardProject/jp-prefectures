<?php
namespace ProgrammingCat\JpPrefectures;

class Prefectures {
    protected $_prefectures;
    protected $_lang = 'jp';

    public function __construct() {
        $this->_prefectures = include(dirname(__FILE__) . '/SourceData/' . $this->_lang . '/prefectures.php');
    }
    public function prefectureById($id) {
        return isset($this->_prefectures[$id]) ? $this->_prefectures[$id] : null;
    }
    public function prefectureByName($id) {
        return isset($this->_prefectures[$id]) ? $this->_prefectures[$id] : null;
    }
    public function prefecture($str)
    {
        if (!$this->_prefectures || !is_array($this->_prefectures)) return null;
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
        return $this->_prefectures;
    }
} 