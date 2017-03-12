<?php
/**
 * 이 파일은 iModule 첨부파일모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 첨부파일을 무조건 다운로드한다.
 * 
 * @file /modules/attachment/process/download.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0.161211
 */
if (defined('__IM__') == false) exit;

$idx = Decoder(Request('code'));
if ($idx == false) {
	$results->success = false;
	$results->message = $this->getErrorText('NOT_FOUND');
} else {
	$results->success = $this->fileDelete($idx);
}
?>