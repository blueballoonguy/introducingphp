<?php
  function bb_copyright($startYear) {
    $currentYear = date('Y') ;
    if ($startYear < $currentYear) {
      $currentYear = date ('y') ;
      return "&copy; $startYear&ndash;$currentYear";
  } else {
    return "copy; $startYear";
  }}
  echo bb_copyright(2018) ;
?>
