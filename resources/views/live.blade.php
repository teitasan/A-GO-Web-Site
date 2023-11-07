<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live｜A-GO</title>
</head>
<body>
    <div>
        @include('header')
    </div>
    <div>
        <main>
        準備中
        <div>
            <img src="">
            <p>【ライブ会場】</p>
        </div>
        <!-- live情報。項目は大体一緒で内容が違う文章を羅列するからクラスを作ったほうがいいかも。
        フライヤーの画像とかベタベタ貼ったら見栄えするかな。 -->
        </main>
    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>

<!-- <?
class live {
    public string $liveTitle; // ライブタイトル
    public string $livePlace; // ライブ会場

    public string $liveDate; // 日付
    public string $openTime; // 開場時間
    public string $startTime; // 開演時間

    public string $ticketPrice; // チケット料金
    public string $drinkPrice; // ドリンク代

    public string $performer; // 出演者、対バン
};

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $liveobj = new live();
};

$liveobj->liveTitle = $_POST["liveTitle"];
$liveobjveInfo->livePlace = $_POST["livePlace"];
?> -->