<?php

function myAlert($msg, $url)
{
  echo '<script language="javascript">alert("' . $msg . '");</script>';
  echo "<script>document.location = '$url'</script>";
}