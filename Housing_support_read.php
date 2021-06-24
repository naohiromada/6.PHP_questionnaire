<?php

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d08_13;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// 参照はSELECT文！ -->
$sql = 'SELECT * FROM housing_support_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//  <!--データを表示しやすいようにまとめる  -->
if ($status == false) {
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["id"]}</td>";        //  <!--id  --> 
        $output .= "<td>{$record["facility"]}</td>";  //  <!--施設名  -->
        $output .= "<td>{$record["Postal_code"]}</td>";      //  <!--郵便番号  -->
        $output .= "<td>{$record["Prefectures"]}</td>";      //  <!--都道府県  -->
        $output .= "<td>{$record["Addres_1"]}</td>";         //  <!--住所１  -->
        $output .= "<td>{$record["Addres_2"]}</td>";         //  <!--住所２  -->
        $output .= "<td>{$record["Addres_3"]}</td>";         //  <!--住所３  -->
        $output .= "<td>{$record["Tel_no"]}</td>";           //  <!--電話番号  -->
        $output .= "<td>{$record["Fax_no"]}</td>";           //  <!--FAX番号  -->
        $output .= "</tr>";
    }
}
// html部分にデータを追加 -->
// var_dump($sql);
// var_dump($stmt);
// var_dump($status);
// exit();
// $statusにSQLの実行結果が入る（取得したデータではない点に注意） -->


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>居住支援　福祉施設マスターF　登録リスト（一覧画面）</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <fieldset>
        <legend>居住支援　福祉施設マスターF　登録リスト（一覧画面）</legend>
        <a href="Housing_support_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>施設名</th>
                    <th>郵便番号</th>
                    <th>都道府県</th>
                    <th>住所１</th>
                    <th>住所２</th>
                    <th>住所３</th>
                    <th>電話番号</th>
                    <th>FAX番号</th>
                </tr>
            </thead>
            <tbody>
                <!-- ↓に<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                <!-- <?= $output ?> -->
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>