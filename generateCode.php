<?php 
    /**
     * ���ã�����$length���ȵ������
     * @param int $length Ҫ���ɵ������ĳ��� Ĭ�ϳ���Ϊ18
     * @return string ���ص�������ַ���
     */
    private function GenerateCode($length=18){
        $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $strLen=strlen($str);
        $rs='';
        for($i=0;$i<$length;$i++){
            $position=rand(0,$strLen-1);
            $rs.=$str[$position];
        }
        return $rs;
    }