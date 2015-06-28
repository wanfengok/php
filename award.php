<?php 
header("Content-type:text/html;charset=utf8");
/**
 * ѭ����λ���еĵ�
 * @param $totalMoney ������ܽ��
 * @param $arr �Ѿ���ǹ��ĵ���б�
 * @param $unit ÿ���������С��λ
 * @return int �������к�λ�ĵ��λ��
 */
function lottery($totalMoney,$arr,$unit){
    $num=rand(1,$totalMoney/$unit-1);
    if(in_array($num,$arr)){
        $num=lottery($totalMoney,$arr,$unit);
    }
    return $num;
}

/**
 * ԭ��˵�� ����һ��������һ���̶��ĳ��ȣ�����������ܽ��/����Ľ����С��λ����������������λ�ĵ�
 * ����N-1(�齱����-1)�ε������� ������ظ����ٴδ�� ����Щ��ȫ����������������λλ��0��� $totalMoney/$unitλ
 * չ���������ӣ�����Щ���λ�ýضϣ�ÿ�����ӵĳ���(�����$data[$i+1]-$data[$i])����ÿ���˵��н��Ľ����� 
 * ��΢�ź������
 * @param $totalPeople ������ܸ���
 * @param $totalMoney ������ܽ��
 * @param int $unit ����Ľ�����С��λ
 * @return array|int ��������쳣������Ӧ�Ĵ����룬��֮�����س齱�Ľ��
 */
function award($totalPeople,$totalMoney,$unit=1){
    if($totalMoney/$totalPeople<$unit){
        return -1;
    }
    if(!is_int($totalMoney/$unit)){
        return -3;
    }
    if(!is_int($totalPeople)){
        return -2;
    }
    $data[0]=0;
    for($i=1;$i<$totalPeople;$i++){
        $num=lottery($totalMoney,$data,$unit);
        array_push($data,$num);
    }
    $data[$totalPeople]=$totalMoney/$unit;
    sort($data);
    $money=array();
    for($i=0;$i<$totalPeople;$i++){
        $money[$i]=($data[$i+1]-$data[$i])*$unit;
    }
    return $money;
}
$rs=award(11,100,1);
echo '<pre>';
print_r($rs);
?>