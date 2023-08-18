<h2>サーバー立ち上げ</h2>
docker compose up -d # コンテナ立ち上げ <br>
docker compose exec app bash # コンテナに入る <br>
composer install # ライブラリインストール <br>
npm install # ライブラリインストール <br>
npm run build # js, css ビルド <br>

<h2>.envファイル</h2>
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:l/PJW5byNd6yDkP5wbsIO2Bf9b8UfFBqMWQ5jpMpH08=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=posse
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

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


変更したよー
