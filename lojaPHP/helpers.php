<?php 
function stars( $word ) {
  return str_repeat("*", strlen($word));
}

function replaceMatchingPositionsByLetters( $target, $word, $letter ) {
  $replacement = $target; 
  for ($i = 0; $i < strlen($replacement); ++$i) {
    if ($word[$i] == $letter) {
      $replacement[$i] = $letter;
    }
  }
  return $replacement;
}
