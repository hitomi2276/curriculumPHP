<?php



function getCubearea($width, $depth, $height) {
    $area = $width * $depth * $height;
    print "直方体の体積は". $area. "ですよ。";
}

getCubearea(10,5,8);

?>

<?php
echo '<br>';
echo "1. ハッシュ化"."<br>";
echo "データを規則性のない固定値に置き換える。パスワードの保管などでよく用いられる手法"."<br>";
echo "2. 総合テスト"."<br>";
echo "システムテストともいう。本番環境前のチェック・検証。システムに要求された機能を満たしているかという観点でテストを実施"."<br>";
echo "3. デバッグ"."<br>";
echo "バグを取り除くこと。コンピュータプログラムに潜む欠陥を探し出して取り除くこと。"."<br>";
?>