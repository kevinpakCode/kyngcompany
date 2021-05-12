<?php

function getSegment($position) {
  $CI = get_instance();
  return $CI->uri->segment($position);
}

?>