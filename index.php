<?php
//    include('./header.html');
//    echo '<div>��ҳ����</div>';
//    include('./footer.html');
//    include('./views/main/index.html');
//    ����ͨ��uRL�����û�������Ǹ�ҳ��
//    var_dump($_SERVER);
// ���·��
//    array_key_exists(key,search)
// Ĭ��Ŀ¼����
    $dir = 'main';
    //Ĭ���ļ�����
    $filename='index';

//    ����·�� ����url��·��
    if(array_key_exists('PATH_INFO', $_SERVER)){
//    ��ȡ����·��
      $path = $_SERVER['PATH_INFO'];
//      ȥ����һ��б��
        $str = substr($path,1);
//      �ַ����ָ��js��split��������
        $ret = explode('/',$str);
        if(count($ret) == 2){
            //����2  ·��������
            $dir = $ret[0];//����Ŀ¼
            $filename = $ret[1]; //�����ļ���

        }else{
//            �������ȫ����ת����¼ҳ
            $filename = 'login';
        }



    }
//    echo $path;
//Ƕ����ҳ��
    include('./views/'.$dir.'/'.$filename.'.html');
?>