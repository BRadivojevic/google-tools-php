<?php
header('Content-Type: application/json');
// TODO: load Google client via service account; for now, echo input
$text = trim($_POST['text'] ?? '');
if ($text === '') { http_response_code(400); echo json_encode(['error'=>'text required']); exit; }
echo json_encode(['translated'=>$text]); // placeholder
