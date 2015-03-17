<?php 
	/**
     * ��־���ɺ��� Author:WJH
     * @param string $log Ҫ����־����ʾ����Ϣ
     * @param string $filePrefix ��־�ļ�����ǰ׺
	 * @param string $fileSuffix ��־�ļ����ĺ�׺
	 * @param return -3 ���ļ�ʧ�� -2 д���ļ�ʧ�� -1 �ر��ļ�ʧ�� 0 �ɹ�
     */
	
	function AddLog($log='',$filePrefix='',$fileSuffix='.log',$time='day'){
        $time=date('Y-m-d H:i:s',mktime());
		if($time=='year'){
			$period=date('Y',mktime());
		}elseif($time=='month'){
			$period=date('Ym',mktime());
		}elseif($time=='hour'){
			$period=date('YmdH',mktime());
		}elseif($time=='minute'){
			$period=date('YmdHi',mktime());
		}elseif($time=='second'){
			$period=date('YmdHis',mktime());
		}else{
			$period=date('Ymd',mktime());
		}
        $filename=$filePrefix.$period.$filePrefix;
        $fp=fopen($filename,'a');
		if($fp){
			$wr=fwrite($fp,$time."\n".$log."\n");
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