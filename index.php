<?php
//    include('./header.html');
//    echo '<div>主页内容</div>';
//    include('./footer.html');
//    include('./views/main/index.html');
//    必须通过uRL区分用户想访问那个页面
//    var_dump($_SERVER);
// 后端路由
//    array_key_exists(key,search)
// 默认目录名称
    $dir = 'main';
    //默认文件名称
    $filename='index';

//    处理路由 处理url的路径
    if(array_key_exists('PATH_INFO', $_SERVER)){
//    获取请求路径
      $path = $_SERVER['PATH_INFO'];
//      去掉第一个斜杠
        $str = substr($path,1);
//      字符串分割，和js中split方法很想
        $ret = explode('/',$str);
        if(count($ret) == 2){
            //计数2  路由有两层
            $dir = $ret[0];//覆盖目录
            $filename = $ret[1]; //覆盖文件名

        }else{
//            其他情况全部跳转到登录页
            $filename = 'login';
        }



    }
//    echo $path;
//嵌入子页面
    include('./views/'.$dir.'/'.$filename.'.html');
?>