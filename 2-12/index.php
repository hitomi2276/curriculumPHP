    <form action="result.php" method="post">
    
    お名前:<input type="text" name="name">
        <br>
    ご希望商品:
    <input type="radio" name="gift" value="A賞">A賞
    <input type="radio" name="gift" value="B賞">B賞
    <input type="radio" name="gift" value="C賞">C賞
        <br>
    個数:<select name="number">
            <?php for ($i=1;$i<=10;$i++) { ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            
            <?php } ?>
        </select>
        <br>
    
        <input type="submit" value="申込" />
    </form>

    <?php
echo '<br>';
echo "1. モジュール"."<br>";
echo "機器やシステムの一部を構成するひとまとまりの機能を持った部品。全体を入れ替えることなく修正・改良がしやすくなる。"."<br>";
echo "2. バージョン管理システム【VCS】"."<br>";
echo "ファイルの変更履歴の保存・管理を行うソフトウェア。"."<br>";
echo "3. サブクエリ【副問合せ】"."<br>";
echo "SQL文の中にSQL文を書くこと"."<br>";
?>