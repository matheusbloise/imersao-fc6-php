<?php

declare(strict_types=1);
/**
 * This file is part of Imersão FullCycle in PHP.
 *
 * @link     https://imersao.fullcycle.com.br
 * @document https://github.com/leocavalcante/imersao-fc6-php
 * @contact  https://twitter.com/leocavalcante
 * @license  Apache License, Version 2.0
 */
return [
    Hyperf\Crontab\Process\CrontabDispatcherProcess::class,
    Hyperf\AsyncQueue\Process\ConsumerProcess::class,
];
