<?php
header('Content-Type: application/json');
$maxW = min((int)($_POST['MaxWidth'] ?? 1024), (int)(getenv('MAX_IMG_WIDTH') ?: 2048));
$maxH = min((int)($_POST['MaxHeight'] ?? 1024), (int)(getenv('MAX_IMG_HEIGHT') ?: 2048));
// TODO: verify MIME, move uploaded file, resize within $maxW x $maxH
echo json_encode(['status'=>'ok','width'=>$maxW,'height'=>$maxH]);
