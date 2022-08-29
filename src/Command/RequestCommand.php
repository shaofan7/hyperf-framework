<?php

declare(strict_types=1);
/**
 * This file is part of 绿鸟科技.
 *
 * @link     https://www.greenbirds.cn
 * @document https://greenbirds.cn
 * @contact  liushaofan@greenbirds.cn
 */
namespace Gb\Framework\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Devtool\Generator\GeneratorCommand;

#[Command]
class RequestCommand extends GeneratorCommand
{
    public function __construct()
    {
        parent::__construct('gbGen:request');
    }

    public function configure(): void
    {
        $this->setDescription('创建一个新的表单请求类');

        parent::configure();
    }

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/validation-request.stub';
    }

    protected function getDefaultNamespace(): string
    {
        return $this->getConfig()['namespace'] ?? 'App\\Request';
    }

    /**
     * Get the desired class name from the input.
     */
    protected function getNameInput(): string
    {
        $name = trim($this->input->getArgument('name'));
        return $name . 'Request';
    }
}
