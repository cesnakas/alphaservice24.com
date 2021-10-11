<?php
/**
 * Lang_detect Class
 *
 * Language detection library for CodeIgniter.
 *
 * @author        La2ha
 * @version       1.0
 * @link          http://la2ha.ru/dev-seo-diy/web/lang_detect
 */
class CLangDetect
{
  var $language = null;


  public function __construct()
  {
    if ($list = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']) : null) {
      if (preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $list, $list)) {
        $this->language = array_combine($list[1], $list[2]);
        foreach ($this->language as $n => $v)
          $this->language[$n] = $v ? $v : 1;
        arsort($this->language, SORT_NUMERIC);
      }
    } else $this->language = array();
  }

  public function getBestMatch($default, $langs)
  {
    $languages=array();
    foreach ($langs as $lang => $alias) {
      if (is_array($alias)) {
        foreach ($alias as $alias_lang) {
          $languages[strtolower($alias_lang)] = strtolower($lang);
        }
      }else $languages[strtolower($alias)]=strtolower($lang);
    }
    foreach ($this->language as $l => $v) {
      $s = strtok($l, '-'); // убираем то что идет после тире в языках вида "en-us, ru-ru"
      if (isset($languages[$s]))
        return $languages[$s];
    }
    return $default;
  }


}