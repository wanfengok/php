<?php
/**
 * �����������շ�д��ת��Ϊ�»���д��
 * @param $str functionName
 * @return string ת�����functionName
 * �������Ĳ����Ƿ���������Ӧ�Ĵ�����Ϣ
 */
function TuofengToDash($str){
    if(!is_string($str)){
        return 0;
    }
    if(!preg_match('/[a-zA-Z-]/',$str[0])){
        return 1;
    }
    if(preg_match('/[\*\\\'\#\?\,\<\>\:\|\}\{\[\]\"\$\@\!\~\`\%\&\^\.\=\+\-\;\(\)]/',$str)){
        return 2;
    }
    $str=lcfirst($str);
    $pattern='/[A-Z]/';
    $str=preg_replace($pattern,'_$0',$str);
    return strtolower($str).'()';
}
echo TuofengToDash('CmdInsertUser');