<?php 
	/**
     * ��־���ɺ��� Author:WJH
     * @param string $log Ҫ����־����ʾ���ַ���
     * @param string $filePrefix ��־�ļ�����ǰ׺
     */
	function AddLog($log=''){
        $time=date('Y-m-d H:i:s',mktime());
        $filename=date('YmdH',mktime()).'.log';
        $fp=fopen($filename,'a');
        fwrite($fp,$time."\n".$log."\n");
        fclose($fp);
    }
?>