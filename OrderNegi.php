<?php
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+818041456716"=>"島田効太朗",
 //       "+14158675310"=>"Boots",
 //       "+14158675311"=>"Virgil",
 //       "+14158675312"=>"Marcel"
    );
     
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "ようせいさん";
         
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say language="ja-jp">こんにちは <?php echo $name ?>.</Say>
    <Gather numDigits="1" action="CallingTranspher.php" method="POST">
        <Say>株式会社ねぎへようこそ　ねぎの電話注文の場合は 1を.  もう一度聞きたい場合は他のダイヤルと押して下さい.</Say>
    </Gather>
</Response>