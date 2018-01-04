# 独習PHP　第3版 学習記録

## 書籍情報
http://www.shoeisha.co.jp/book/detail/9784798135472

## サンプルプログラム
samplesフォルダ配下

## 実習
practiceフォルダ配下

## 環境構築
MAMP で環境構築
DB名dokuphpを作成
以下コマンドを実行しサンプルテーブルを展開

```zsh:
# テーブル作成
cd samples/selfphp
mysql -u root -p dokuphp < selfphp.sql
# user selfusr 作成
mysql -u root -p
GRANT ALL PRIVILEGES ON dokuphp.* TO selfusr@localhost IDENTIFIED BY 'selfpass';
#selfusr でログイン確認
mysql -u selfusr -p 
# password selfpass を入力
use dokuphp;
show tables;
```

