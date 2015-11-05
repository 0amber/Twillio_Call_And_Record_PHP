<?php
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+818041456716"=>"ぶう",
        "+819023003253"=>"かぴぱら",
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
    <Say language="ja-jp">こんにちは <?php echo $name ?>.さん</Say>
    <Gather numDigits="1" action="CallingTranspher.php" method="POST">
        <Say language="ja-jp">株式会社ねぎへようこそ。　ねぎの電話注文の場合は 1　を。  もう一度聞きたい場合は他のダイヤルを押して下さい.</Say>
    </Gather>
</Response>