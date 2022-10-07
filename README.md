# procon33_Action_Community_WebApps

## 実行環境
- PHP 7.4.3
- composer 2.3.9
- ubuntu 20.04
- mariadb 10.3.34

## 初期設定
```
git clone https://github.com/NIT-Anan-Procon/procon33_Action_Community_Guild_WebApps.git
cd procon33_Action_Community_Guild_WebApps
composer install
```

## ページ一覧
- Home/
  - home.php
    - ホーム画面
  - power_map.php
    - 勢力図画面
- Judge/
  - judge.php
    - 審査画面
  - result.php
    - 依頼書送信結果表示画面
- Login/
  - start.php
    - スタート画面
  - assignment.php
    - 巣(チーム)の選択画面
  - result.php
    - 配属後画面(アカウント情報の表示)
- Receive
  - receiveList.php
    - 受注リスト画面
  - receive.php
    - 受注画面
  - sending.php
    - 動画送信画面
- Request
  - request.php
    - 依頼画面
  - sending.php
    - 依頼書送信画面

## lib一覧
- lib/
  - File.php
    - uploadImage
      - 写真のアップロードをするメソッド
    - uploadMovie
      - 動画のアップロードをするメソッド
  - Judgement.php
    - getNoJudgedRequestID
      - ユーザーが審査していない依頼書のIDを取得するメソッド
    - getCounts
      - それぞれの依頼書のGOODの審査回数を取得するメソッド
    - sendJudgement
      - 依頼書の審査を送信するメソッド
  - Movie.php
    - getRatio
      - 各チームの勢力を求める。メソッド
    - getCounts
      - 依頼書の各チームの動画投稿数を求めるメソッド
    - getMovies
      - チームの、依頼書に投稿された動画のIDをすべて取得するメソッド
    - sendMovie
      - 動画パスとユーザー、依頼書情報をアップロードするメソッド
  - Request.php
    - sendRequest
      - 依頼書のアップロードをするメソッド
    - getRequest
      - IDから依頼書を取得するメソッド
    - updateRequestCondition
      - 依頼書の審査状態を更新するメソッド
    - getReceivesRequestID
      - 受注リストの依頼書IDを取得するメソッド
    - getRequestByUser
      - ユーザーが出した依頼書IDを取得するメソッド
  - User.php
    - sendUser
      - ユーザー登録をするメソッド
    - getTeamID
      - ユーザーの所属するチームIDを取得
    - getUserNameList
      - チームの依頼書を書いたアリのリストを取得するメソッド(ホーム画面に表示する)
