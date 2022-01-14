<form action="result.php" method="post">
  名前:<input type="text" name="my_name" />
  <br>
  メールアドレス:<input type="text" name="e_mail"/>
  <br>
  パスワード:<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>

<?php
echo '<br>';
echo "1. 仕様書・設計書"."<br>";
echo "仕様書:ソフトウェアや情報システムなどを開発する際に備えるべき機能やその性能、満たすべき要件などを図表や文章などで記述した文書"."<br>";
echo "設計書:どのように作るか。完成するまでの制作工程を明確にした資料。"."<br>";
echo "2. Git"."<br>";
echo "オープンソースの分散バージョン管理システム。複数の開発者が共同で一つのソフトウェアを開発する際に使うシステム。"."<br>";
echo "3. マージツール"."<br>";
echo "バージョン管理されているファイル群に対して行われた変更を統合する操作をするツール"."<br>";
?>