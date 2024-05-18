<?php

use App\Enums\IdentityTypeEnum;
use App\Enums\ResponseEnum;
use App\Enums\UserTypeEnum;
use Jiannei\Enum\Laravel\Support\Enums\HttpStatusCode;

return [
    IdentityTypeEnum::class => [
        IdentityTypeEnum::NAME->value => 'ユーザー名',
        IdentityTypeEnum::EMAIL->value => 'メールアドレス',
        IdentityTypeEnum::PHONE->value => '電話番号',
        IdentityTypeEnum::GITHUB->value => 'GitHub',
        IdentityTypeEnum::WECHAT->value => 'WeChat',
    ],
    // レスポンスステータスコード
    ResponseEnum::class => [
        // 標準HTTPステータスコード
        HttpStatusCode::HTTP_OK->value => '操作しました',
        HttpStatusCode::HTTP_UNAUTHORIZED->value => '認証できませんでした',

        // ビジネス操作成功
        ResponseEnum::SERVICE_REGISTER_SUCCESS->value => '登録しました',
        ResponseEnum::SERVICE_LOGIN_SUCCESS->value => 'ログインしました',

        // ビジネス操作失敗：認証ビジネス
        ResponseEnum::SERVICE_REGISTER_ERROR->value => '登録出来ませんでした',
        ResponseEnum::SERVICE_LOGIN_ERROR->value => 'ログインできませんでした',

        // クライアントエラー
        ResponseEnum::CLIENT_PARAMETER_ERROR->value => 'パラメータエラー',
        ResponseEnum::CLIENT_CREATED_ERROR->value => 'データが既に存在しています',
        ResponseEnum::CLIENT_DELETED_ERROR->value => 'データが存在しません',

        // サーバーエラー
        ResponseEnum::SYSTEM_ERROR->value => 'サーバーエラー',
        ResponseEnum::SYSTEM_UNAVAILABLE->value => 'サーバーメンテナンス中、一時的に利用できません',
        ResponseEnum::SYSTEM_CACHE_CONFIG_ERROR->value => 'キャッシュ設定エラー',
        ResponseEnum::SYSTEM_CACHE_MISSED_ERROR->value => 'キャッシュミス',
        ResponseEnum::SYSTEM_CONFIG_ERROR->value => 'システム設定エラー',
    ],
    UserTypeEnum::class => [
        UserTypeEnum::ADMINISTRATOR->value => '管理者',
        UserTypeEnum::MODERATOR->value => 'モデレーター',
        UserTypeEnum::SUBSCRIBER->value => 'サブスクライバー',
        UserTypeEnum::SUPER_ADMINISTRATOR->value => 'スーパー管理者',
    ],
];
