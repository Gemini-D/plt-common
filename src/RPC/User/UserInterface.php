<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace GeminiD\PltCommon\RPC\User;

use GeminiD\PltCommon\Constant\OAuthType;
use JetBrains\PhpStorm\ArrayShape;

interface UserInterface
{
    public const NAME = 'UserUserInterface';

    public function ping(): bool;

    #[ArrayShape(['id' => 'int', 'openid' => 'string'])]
    public function firstByCode(string $code, string $appid, int|OAuthType $type = OAuthType::WECHAT_MINI_APP): array;
}
