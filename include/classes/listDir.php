<?php
/**
 * En klasse
 *
 * Opret Class med en directory
 * Derefter kør makeList med en sort-metode og et ID-navn
 *
 * @author Petsegøj
 */
class listDir {

    private $dir;

    public function __construct($directory) {
        $this->dir = $directory;
    }



    /**
     *
     *
     *
     */
    private function makeArray($sortType)
    {
      $folders = scandir($this->dir);
      $folders = array_slice($folders,2);
      $folderDateArr = [];
      for($i = 0; $i<count($folders); $i++){
          $lastChanged = $this->dir . "/" . $folders[$i];
          $folderDateArr[$folders[$i]] = date("Y-m-d H:i:s", filemtime($lastChanged));
      }

      return $this->sortArray($folderDateArr, $sortType);
    }



    /**
     *
     *
     *
     */
    private function sortArray($arrayIn, $sortType)
    {
      if($sortType === "dateDesc"){
        function date_sort($a, $b) {
            return strtotime($a) - strtotime($b);
        }
        uasort($arrayIn, "date_sort");
        $arrayOut = array_reverse($arrayIn);
      }

      return $arrayOut;
    }



    /**
     *
     *
     *
     */
    public function createList($sortType, $idName)
    {
      $toEcho = "<ul id='$idName'>";
      $array = $this->makeArray($sortType);
      while (current($array)) {
          $toEcho .= "<li><a href='" . $this->dir . "/" . key($array)."' >" . key($array) . "</a></li>";
          next($array);
      }
      $toEcho .= "</ul>";
      return $toEcho;
    }
}
