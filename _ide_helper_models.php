<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id 自增长 ID
 * @property string $name 类目名称
 * @property int|null $parent_id
 * @property bool $is_directory 是否拥有子类目
 * @property int $level 当前类目层级
 * @property string $path 该类目所有父类目 id
 * @property bool $state 状态
 * @property int $order 排序
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $ancestors
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $children
 * @property-read int|null $children_count
 * @property-read mixed $full_name
 * @property-read Category|null $parent
 * @property-read mixed $path_ids
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIsDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCategory {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id 自增长 ID
 * @property string $name 名称
 * @property string|null $slug 别名
 * @property int $used_count 使用次数
 * @property string|null $color 颜色
 * @property string|null $description 描述
 * @property bool $state 状态
 * @property int $order 排序
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Label newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Label newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Label onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Label query()
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereUsedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Label withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperLabel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $team_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperMembership {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperModel {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $personal_team
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TeamInvitation> $teamInvitations
 * @property-read int|null $team_invitations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team wherePersonalTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTeam {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $team_id
 * @property string $email
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTeamInvitation {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $first_name 姓
 * @property string $last_name 名
 * @property string|null $first_alias 别名（姓）
 * @property string|null $last_alias 别名（名）
 * @property int $gender 性别
 * @property string|null $birthday 生日
 * @property int|null $age 年龄
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $phone 电话
 * @property string|null $avatar 头像
 * @property mixed $password
 * @property string|null $zip 邮编
 * @property string|null $address 地址
 * @property bool $is_admin 是否为管理员
 * @property string|null $introduction 个人简介
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property string|null $ip IP 地址
 * @property string|null $method 请求方式
 * @property string|null $path 请求路径
 * @property string|null $url 请求 URL
 * @property string|null $browser 浏览器
 * @property string|null $browser_version 浏览器版本
 * @property string|null $languages 浏览器语言
 * @property string|null $engine 引擎
 * @property string|null $os 操作系统
 * @property string|null $os_alias 操作系统别名
 * @property string|null $device 设备
 * @property string|null $device_manufacturer 设备制造商
 * @property string|null $device_model 设备型号
 * @property int $notification_count 通知数量
 * @property string|null $last_authed_at 最后认证时间
 * @property string|null $last_actived_at 最后活跃时间
 * @property int $state 状态
 * @property int $order 排序
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $alias
 * @property-read \App\Models\Team|null $currentTeam
 * @property-read mixed $format_gender
 * @property-read mixed $full_avatar
 * @property-read mixed $name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Team> $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBrowserVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDevice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeviceManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeviceModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEngine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIntroduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastActivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastAuthedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNotificationCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOsAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id ID
 * @property string $key 标识
 * @property string|null $email 邮箱
 * @property string|null $phone 手机号
 * @property string $code 验证码
 * @property string $type 类型
 * @property int|null $user_id 用户 ID
 * @property \Illuminate\Support\Carbon|null $expired_at 过期时间
 * @property \Illuminate\Support\Carbon|null $used_at 使用时间
 * @property int $state 状态
 * @property int $order 排序
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereUsedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVerificationCode {}
}

