<?php 
	/**
     * ��־���ɺ��� Author:WJH
     * @param string $log Ҫ����־����ʾ����Ϣ
     * @param string $filePrefix ��־�ļ�����ǰ׺
	 * @param string $fileSuffix ��־�ļ����ĺ�׺
	 * @param return -3 ���ļ�ʧ�� -2 д���ļ�ʧ�� -1 �ر��ļ�ʧ�� 0 �ɹ�
     */
	
	function AddLog($log='',$filePrefix='',$fileSuffix='.log',$time='day'){
        $time1=date('Y-m-d H:i:s',time());
		if($time=='year'){
			$period=date('Y',time());
		}elseif($time=='month'){
			$period=date('Ym',time());
		}elseif($time=='hour'){
			$period=date('YmdH',time());
		}elseif($time=='minute'){
			$period=date('YmdHi',time());
		}elseif($time=='second'){
			$period=date('YmdHis',time());
		}else{
			$period=date('Ymd',time());
		}
        $filename=$filePrefix.$period.$fileSuffix;
        $fp=fopen($filename,'a');
		if($fp){
			$wr=fwrite($fp,$time1."\n".$log."\n");
			if($wr){
				$close=fclose($fp);
				if($close){
					return 1;
				}else{
					return -1;
				}
			}else{
				return -2;
			}
		}else{
			return -3;
		}
    }
?>
