<?php 
/**
 * Author:wjh
 * Date:2015-01-09 03:23
 * $array:Ҫ���б��������
 * @param :$array ���������� ��ʱ��json_encode()����������������
 */
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }

        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}

    /**************************************************************
 	 *
 	 *  ������ת��ΪJSON�ַ������������ģ�
 	 *  @param  array   $array      Ҫת��������
 	 *  @return string      ת���õ���json�ַ���
 	 *  @access public
 	 *
 	 ************************************************************
     */
function JSON($array) {
    arrayRecursive($array, 'urlencode', true);
    $json = json_encode($array);
    return urldecode($json);
}
?>