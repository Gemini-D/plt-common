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

namespace GeminiD\PltCommon\Constant;

enum OAuthType: int
{
    case WECHAT_MINI_APP = 0;

    case DOUYIN_MINI_APP = 1;
}
