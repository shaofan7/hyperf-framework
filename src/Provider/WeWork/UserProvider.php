<?php

declare(strict_types=1);
/**
 * This file is part of Gb.
 * @link     https://mo.chat
 * @document https://Gb.wiki
 * @contact  group@mo.chat
 * @license  https://github.com/Gb-cloud/Gb/blob/master/LICENSE
 */
namespace Gb\Framework\Provider\WeWork;

use Gb\Framework\Contract\WeWork\UserConfigurable;

class UserProvider extends AbstractProvider
{
    /**
     * @var UserConfigurable
     */
    protected mixed $service;

    /**
     * @return array app配置
     */
    protected function config(?string $wxCorpId = null, ?array $agentId = null): array
    {
        return $this->service->userConfig($wxCorpId);
    }
}
