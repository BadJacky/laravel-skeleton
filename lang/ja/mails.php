<?php

return [
    'subject' => [
        'register' => '会員登録のお知らせ',
    ],
    'content' => [
        'register' => '
            ━━━━━━━━━━━━━━━━━<br>
            認証コードのお知らせ<br>
            ━━━━━━━━━━━━━━━━━<br><br>
            認証コードをお知らせいたします。<br><br>
            認証コード：:code<br><br>
            この認証コードをユーザー登録画面に入力をして、:timeout 分以内にユーザー登録の完了をお願い致します。<br>
        <br>',
    ],
    'footer' => '
        <br>
        ＊このメールはシステムからの自動配信となっております。ご返信いただいてもお答えできかねますのでご了承ください。<br>
        ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>
        :name<br>
        URL：<a href=":uri">:uri</a><br>
        ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br>',
];