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

namespace HyperfTest\Cases;

use GeminiD\PltCommon\Constant\OAuthType;
use Hyperf\Codec\Json;

/**
 * @internal
 * @coversNothing
 */
class UserTest extends AbstractTestCase
{
    public function testOAuth()
    {
        $json = [
            'type' => OAuthType::WECHAT_MINI_APP,
        ];

        $this->assertTrue(is_array(Json::decode(Json::encode($json))));
    }
}
