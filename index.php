<?php
parse_str($_SERVER["QUERY_STRING"])
$newMsg = "$name . $msg"

  $msgs = json_decode( file_get_contents("chatlog") );
  array_push($msgs, $newMsgs);
  file_put_contents("chatlog , json_encode($msgs)");

echo $newMsg
?>
