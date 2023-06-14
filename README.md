<h2>サーバー立ち上げ</h2>
docker compose up -d # コンテナ立ち上げ <br>
docker compose exec app bash # コンテナに入る <br>
composer install # ライブラリインストール <br>
npm install # ライブラリインストール <br>
npm run build # js, css ビルド <br>

<h2>コマンド集</h2>
php artisan make:controller コントローラー名 # コントローラー作成 <br>

php artisan make:model モデル名 # モデル作成 <br>
php artisan make:seeder シーダー名 # シーダー作成 <br>
php artisan make:migration マイグレーション名 # マイグレーション作成 <br>
php artisan migrate # マイグレーション実行 <br>
php artisan migrate:rollback # マイグレーションロールバック <br>
php artisan migrate:refresh # マイグレーションリフレッシュ <br>
php artisan db:seed # シーダー実行 <br>

git rm -rf docker/mysql --cached # git ignore に追加したファイルを git から削除 git ignoreの変更を反映 <br>

<h2>データベースについて</h2>
データベース名: posse <br>
ユーザー名: root <br>
パスワード: root <br>
``` <br>

<p>ER図</p>
+--------------+        +---------------+
|   Questions  |        |    Options    |
+--------------+        +---------------+
| id           |        | id            |
| text         |        | question_id   |
+--------------+--------| text          |
                        | is_correct    |
                        +---------------+
