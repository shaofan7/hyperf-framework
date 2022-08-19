<?php

declare(strict_types=1);
/**
 * This file is part of 绿鸟科技.
 *
 * @link     https://www.greenbirds.cn
 * @document https://greenbirds.cn
 * @contact  liushaofan@greenbirds.cn
 */
namespace Gb\Framework\Contract\WeWork;

interface AppConfigurable
{
    public function appConfig(?string $wxCorpId = null, ?array $agentId = null): array;
}
