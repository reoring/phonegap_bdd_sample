# language: ja
フィーチャ: PhoneGapのコンテンツをテスト
  背景:

  シナリオ: トップページからメニューへの遷移
    前提 ユーザーは "/index.html" を表示している
    ならば レスポンスに "コンテンツエリア" が含まれていること
    もし ユーザーが "メニュー" のリンク先へ移動する
    ならば 画面に "メニュー表示" と表示されていること
