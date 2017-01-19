# メール設定プラグイン

[![Build Status](https://travis-ci.org/EC-CUBE/MailTemplateEditor-plugin.svg?branch=master)](https://travis-ci.org/EC-CUBE/MailTemplateEditor-plugin)
[![Build status](https://ci.appveyor.com/api/projects/status/kkb8tsdgir4fqy6d?svg=true)](https://ci.appveyor.com/project/ECCUBE/mailtemplateeditor-plugin)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ea7618c6-648b-4a92-88f4-33305203f4d5/mini.png)](https://insight.sensiolabs.com/projects/ea7618c6-648b-4a92-88f4-33305203f4d5)
[![Coverage Status](https://coveralls.io/repos/github/EC-CUBE/MailTemplateEditor-plugin/badge.svg)](https://coveralls.io/github/EC-CUBE/MailTemplateEditor-plugin)

## 概要
EC-CUBEからお客様に送信するメール文章を、カスタマイズできるようになるプラグインです。

## フロント
機能無し

## 管理画面
### コンテンツ管理>メール管理から、メール本文(テンプレート)の編集ができる

| テンプレートファイル名      | メール内容          |
|-----------------------------|----------------------|
| reset_complete_mail.twig    | パスワード再発行完了 |
| contact_mail.twig           | お問い合わせ確認     |
| order.twig                  | 受注確認             |
| entry_complete.twig         | 会員登録完了         |
| entry_confirm.twig          | 仮会員登録完了       |
| forgot_mail.twig            | パスワード再発行依頼 |
| customer_withdraw_mail.twig | 会員退会完了         |

※twigコードでの編集。  
※`app/template/default/Mail`に編集後のtwigファイルが保存される。

### メール本文(テンプレート)をインストール時の内容に戻すことができる
メール本文(テンプレート)画面の「初期値に戻す」ボタンを押すのみ。
