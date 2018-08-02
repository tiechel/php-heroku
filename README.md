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
