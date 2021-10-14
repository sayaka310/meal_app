## 食事投稿アプリ
* meal_app

## 実装機能
* カテゴリーはシーダーファイルを作成してカテゴリーデータを登録しました。
* 記事一覧画面と詳細画面の作成、記事投稿画面の作成(タイトル、概要、カテゴリー、画像)
* カテゴリーのラジオボタンに表示するデータについては、categoriesテーブルから取得
* ログイン機能(laravel breeze)、ログインした状態で記事の投稿、自分の記事の編集、削除(更新画面)が可能
* 詳細画面で記事のお気に入り登録と削除(一覧画面でお気に入り数も表示できるようにする)
* 記事モデルのFactory作成、N+1問題を対策

* 詳細画面、一覧画面で投稿時刻と投稿からの経過時間を表示</br>
Carbonライブラリ使用(https://coinbaby8.com/carbon-laravel.html 参照)

* お気に入り・お気に入り削除ボタンを連打した際、2重登録問題解消</br>
(https://www.bnote.net/blog/laravel_double_submit.html 参照)

## 一覧画面
<img width="1440" alt="スクリーンショット 2021-10-14 15 23 52" src="https://user-images.githubusercontent.com/89469673/137267114-7c204117-7cc9-4596-b2c5-06d104913260.png">

## 詳細画面(ログイン中)(他人の記事)
<img width="1440" alt="スクリーンショット 2021-10-14 15 24 32" src="https://user-images.githubusercontent.com/89469673/137267142-0d775ef0-1e20-4e7d-a771-1768287218d6.png">

## 詳細画面(ログイン中)(自分の記事)
<img width="1440" alt="スクリーンショット 2021-10-14 15 25 10" src="https://user-images.githubusercontent.com/89469673/137267159-16222312-9edb-41e3-813f-ac053810365c.png">

## 詳細画面(ログインしていない)
<img width="1440" alt="スクリーンショット 2021-10-14 15 26 11" src="https://user-images.githubusercontent.com/89469673/137267177-29dfd016-c50d-45cb-8ead-b969fcdb9c38.png">

## 新規投稿画面
<img width="1440" alt="スクリーンショット 2021-10-14 15 27 23" src="https://user-images.githubusercontent.com/89469673/137267194-a4ce5276-36b2-4f1f-8fbe-d1e1d3591541.png">

## 編集画面
<img width="1440" alt="スクリーンショット 2021-10-14 15 32 00" src="https://user-images.githubusercontent.com/89469673/137267206-3373b140-3658-4858-9937-eb6654c5792a.png">
