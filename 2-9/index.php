<?php
//FizzBuzz問題

$num = 1;
while($num <= 100) {
    
    if($num % 3 === 0 && $num % 5 === 0 && $num <= 100) {
        echo "FizzBuzz!!";
        $num++;
        echo "<br>";
    } elseif($num % 3 === 0 && $num <= 100) {
        echo "Fizz!";
        $num++;
        echo "<br>";
    } elseif($num % 5 === 0 && $num <= 100) {
        echo "Buzz!";
        $num++;
        echo "<br>";
    } elseif($num <= 100) {
        echo "$num";
        $num++;
        echo "<br>";
    } 
}

?>
<?php
echo '<br>';
echo "1. パフォーマンス"."<br>";
echo "コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのこと"."<br>";
echo "2. スロークエリ"."<br>";
echo "データベース管理システム（DBMS）に対する問い合わせ（クエリ）のうち、一定の基準に照らして遅い、時間がかかっているもの。"."<br>";
echo "3. クエリログ"."<br>";
echo "クライアントからの MySQL Server への接続・接続解除の情報、およびクライアントから実行された全ての SQL クエリを出力してくれるログ"."<br>";
?>

<?php
echo "FizzBuzz問題修正";
echo "<br>";

for($num=1;$num<=100;$num++) {
    
    if($num % 3 === 0 && $num % 5 === 0) {
        echo "FizzBuzz!!";        
        echo "<br>";
    } elseif($num % 3 === 0) {
        echo "Fizz!";        
        echo "<br>";
    } elseif($num % 5 === 0) {
        echo "Buzz!";        
        echo "<br>";
    } else {
        echo "$num";        
        echo "<br>";
    } 
}

?>