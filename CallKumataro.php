<?php
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+818041456716"=>"ぶー",
 //       "+14158675310"=>"Boots",
 //       "+14158675311"=>"Virgil",
 //       "+14158675312"=>"Marcel"
    );
     
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "ようせい";
         
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say language="ja-jp">こんにちは <?php echo $name ?>.さん </Say>
    <Play>http://toshimahakersonproto.mybluemix.net/message/Kumataro/Kumataro_out.mp3</Play>
</Response>