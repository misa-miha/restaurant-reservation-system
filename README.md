# Rese
会員登録、ログインをし、飲食店の検索やお気に入り、予約ができるアプリです。
<img width="1399" alt="スクリーンショット 2024-03-14 20 30 05" src="https://github.com/misa-miha/restaurant-reservation-system/assets/135576763/640d0e37-1def-4b9f-98af-fb1690b4f3f1">

##　作成した目的<br>
飲食店の予約をわかりやすく簡潔にでき、お気に入りしている店舗や予約している店舗を<br>
視覚的にすぐ分かるアプリを作成したかったためです。

## 機能一覧
・会員登録<br>
・ログイン,ログアウト<br>
・飲食店一覧表示<br>
・飲食店詳細表示<br>
・飲食店予約,予約変更,予約削除<br>
・飲食店お気に入り登録,解除<br>
・飲食店検索<br>

## 使用技術
| 言語・フレームワーク  | バージョン |
| --------------------- | ---------- |
| Laaravel              | 8.75       |
| PHP               　　　　　　 | 7.3/8.0    |
| nginx　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 | 1.21.1     |
| MySQL                 | 8.0        |

## テーブル設計
<img width="635" alt="スクリーンショット 2024-03-14 21 18 25" src="https://github.com/misa-miha/restaurant-reservation-system/assets/135576763/228bed1c-1fa2-460c-acc9-ba1d002916dc">

<img width="635" alt="スクリーンショット 2024-03-14 21 18 52" src="https://github.com/misa-miha/restaurant-reservation-system/assets/135576763/8d0b5985-8053-4557-8402-794bb4a7997b">

<img width="635" alt="スクリーンショット 2024-03-14 21 19 20" src="https://github.com/misa-miha/restaurant-reservation-system/assets/135576763/4523a5a5-f2be-4639-a9b4-6122ddfee3fd">

<img width="635" alt="スクリーンショット 2024-03-14 21 19 43" src="https://github.com/misa-miha/restaurant-reservation-system/assets/135576763/d525bccd-fa48-46fb-b797-75aef71f9b24">

## ER図

![restaurant](https://github.com/misa-miha/restaurant-reservation-system/assets/135576763/4beecf98-c992-40d8-b2d7-2eb24ddf0709)


#　環境変数

DB_CONNECTION=mysql<br>
DB_HOST=mysql<br>
DB_PORT=3306<br>
DB_DATABASE=laravel_db<br>
DB_USERNAME=laravel_user<br>
DB_PASSWORD=laravel_pass<br>

# 環境構築

・docker-compose up -d --build<br>
　　　コンテナの起動、イメージのビルド

・docker-compose exec php bash<br>
　　　コンテナ内にログイン

・composer create-project "laravel/laravel=8.*" . --prefer-dist<br>
　　　Laravelのプロジェクトを作成

・docker-compose stop<br>
  コンテナの停止
