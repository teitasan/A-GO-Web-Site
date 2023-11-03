<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メンバー用ライブ情報入力フォーム</title>
</head>
<body>
    <div>
        @include('header')
    </div>
    <div>
        <main>
            <form method="post"  action="{{ url('/liveadd') }}">
            @csrf
                <label>
                    イベント名<input type="text" name="liveTitle">
                </label><br>
                <label>
                    ライブ会場<input type="text" name="livePlace">
                </label><br>
                <label>
                    開催日<input type="date" name="liveDate">
                </label><br>
                <label>
                    オープン時間<input type="time" name="openTime">
                </label><br>
                <label>
                    スタート時間<input type="time" name="startTime">
                </label><br>
                <label>
                    チケット料金<input type="number" name="ticketPrice">
                </label><br>
                <label>
                    ドリンク代<input type="number" name="drinkPrice">
                </label><br>
                <label>
                    出演者<input type="text" name="performer">
                </label>
                <input type="submit">
            </form>
        </main>
    </div>
    <div>
        @include('footer')
    </div>
</body>
</html>

