<?php
    // include 'config.php';
    // $sql = 'SELECT content,pid,id,nickname FROM msg_Board';
    // $res = $dbh->query($sql);

    // while(list($content,$pid,$id,$nickname) = $res->fetch()){
    //     $cm[$pid][$id] = $nickname.':'.$content;;
    // }

   	$cm = array(
   		'0' => array(
   			'1' => "汪小能:段子发起来！！！",
   			'3' => "傅芳玲:路过",
   			), 
   		'1' => array(
   			'2' => "Our Blog:我们不写段子的", 
   			),
   		'2' => array(
   			'4' => "汪小能:不写段子的博客不是好博客", 
   			),
   		'3' => array(
   			'5' => "Our Blog:恭迎小主",
   			'7' => "西瓜:小主近日可是常来啊" 
   			),
   		'5' => array(
   			'6' => "傅芳玲:退下，本宫不想见到你", 
   			),
   		'7' => array(
   			'8' => "傅芳玲:那倒也不是，主要来看看这货什么时候停更", 
   			),
   		);


    function comment($cm, $pid=0){
        echo "<ul>";
            foreach($cm[$pid] as $id=>$content){
                echo "<li>";
                echo $content;
                if(isset($cm[$id])){
                    comment($cm, $id);
                }
                echo "</li>";
        }
        echo "</ul>";
    }

    comment($cm);

