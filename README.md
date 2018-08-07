# php-heroku
TwitterのWebhookにする

# デプロイ

```
heroku create   // アプリ作成
git push heroku master  // heroku にプッシュ
heroku ps:scale web=1   // heroku 起動
heroku open // ブラウザで確認
heroku logs -t  // heroku のログを表示
```

# 設定ファイルの反映
ローカルの`.env`がherokuの環境変数に反映される

```
heroku plugins:install heroku-config    // プラグインのインストール
heroku config:push  // herokuに反映
heroku config:pull  // herokuの環境をダウンロード
```
