<?php
/**
 * interface && abstract class ���
 */
/**
 * Interface Demo ֪ʶ�����
 * 1��interface�����еķ���������Ϊabstract(����)������abstract����ʡ��
 * 2��interface�����еķ��������δʱ���Ϊpublic����ʡ��
 * 3��interface����ķ�������û�з����岿��
 * 4��interface����ֱ��ʵ���������Ҫʹ��interface�����Ƚ�������
 * 5��interface���Խ��ж������ ���һ��classҪʹ�������ӿ� demo & demo1 ʹ�÷�ʽ����
 * abstract class XXXX implements demo      // ���Ҫ����interface ���������ǳ���abstract����
 * 6��interface�ﲻ���Զ�������
 * 7��interface��������ÿ����Ƕ�����
 * 8����abstract class�����ù�interface��û�б�Ҫֱ��ʵ�����еķ�������ȫ������abstract class��������ʵ�֣�
 */
interface demo{
    public function func1();    // public ����ʡ��
    public function sayTest();  // public ����ʡ��
    function hello();
}
interface demo1{
    public function sayHi();	// public ����ʡ��
    public function sayWorld();	// public ����ʡ��
    public function sayAge();	// public ����ʡ��
}

interface demo2{
    public function sayDemo();	// public ����ʡ��
}

/**
 * �������֪ʶ�����
 * 1�����б�����abstract method(���󷽷�)
 * 2���̳е�ʱ������ǵ�һ�ļ̳к���ͨ�ļ̳з�ʽ����һ��
 * 3���̳к����õ�˳���� �ȼ̳к�����
 * 4���̳к����õ��������� ���̳ж�����
 * 5��������û�б�Ҫʵ�����еĳ��󷽷�
 * 6���ǳ������͵��������ʵ�ֳ������͵ĸ�������еĳ��󷽷�
 * 7���̳к����ÿ��Բ���
 */
abstract class cms implements demo,demo1{		//�̳к����ò��� ���̳ж����� �ȼ̳к�����
//    ʵ���˽ӿ��е�һ������func1
    public function func1(){
        echo "func1";
    }
	// ���˾�������û�г��󷽷� ������ʵ�г��󷽷��� ���󷽷������� demo && demo1 �������ӿ���
}

abstract class crm extends cms implements demo2{

}

class finalB extends cms{
	// �ǳ������͵��������ʵ�ֳ������͵ĸ�������еĳ��󷽷�
    function sayHi(){
        echo 'Hi';
    }
    function sayWorld(){
        echo 'World!';
    }
    function sayAge(){
        echo 'Age';
    }
    function sayTest(){
        echo "Test";
    }
    function hello(){
        echo "Hello";
    }
}

$fin=new finalB();
$fin->func1();
echo '<br>';
$fin->sayTest();
echo '<br>';
$fin->hello();
echo '<br>';

//$a=new Demo;              // SyntaxError ����ֱ��ʵ����
//$a->sayTest();            // ͬ��