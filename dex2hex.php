<?php 
/**
 * ʮ����ת��Ϊʮ������
 * @param $no  Ҫת��������
 * @return string ���ض�Ӧ��ʮ����������
 */
function Dex2Hex($no){
    $result = '';
    while($no) {
        $result = sprintf('%02X%s', bcmod($no, 256), $result);
        $no = bcdiv($cmd, 256);
    }
    return $result;
}