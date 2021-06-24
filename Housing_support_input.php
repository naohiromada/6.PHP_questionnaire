<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型todoリスト（入力画面）</title>
    <link rel="stylesheet" href="css/style-auberge.css">

</head>

<body>
    <div class="contents">
        <div class="contents-container">
            <form action="Housing_support_create.php" method="POST">
                <fieldset>
                    <legend>居住支援　福祉施設マスターF（登録画面）</legend>
                    <a href="Housing_support_read.php">一覧画面</a>
                    <!--施設名  -->
                    <li>
                        <label for="facility" class="textfield_label">施設名</label>
                        <input type="text" name="facility">
                    </li>
                    <!--郵便番号  -->
                    <li>
                        <label for="Postal_code" class="textfield_label">郵便番号</label>
                        <input type="text" name="Postal_code" class="textfield_label">
                    </li>
                    <!--都道府県  -->
                    <li>
                        <label for="Prefectures" class="textfield_label">都道府県</label>
                        <input type="text" name="Prefectures" class="textfield_label">
                    </li>
                    <!--住所１  -->
                    <li>
                        <label for="Addres_1" class="textfield_label">住所１</label>
                        <input type="text" name="Addres_1" class="textfield_label">
                    </li>
                    <!--住所２  -->
                    <li>
                        <label for="Addres_2" class="textfield_label">住所２</label>
                        <input type="text" name="Addres_2" class="textfield_label">
                    </li>
                    <!--住所３  -->
                    <li>
                        <label for="Addres_3" class="textfield_label">住所３</label>
                        <input type="text" name="Addres_3" class="textfield_label">
                    </li>
                    <!--電話番号  -->
                    <li>
                        <label for="Tel_no" class="textfield_label">電話番号</label>
                        <input type="text" name="Tel_no" class="textfield_label">
                    </li>
                    <!--FAX番号  -->
                    <li>
                        <label for="Fax_no" class="textfield_label">FAX番号</label>
                        <input type="text" name="Fax_no" class="textfield_label">
                    </li>

                    <div>
                        <button>submit</button>
                    </div>
                </fieldset>
            </form>
            <footer>
                <div class="footer-container">
                    <p>©G's 福岡dev8 課題6 naohiro.mada</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>