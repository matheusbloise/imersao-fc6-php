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
use Hyperf\Database\Seeders\Seeder;

class ImersaoComecou extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Model\Tweet::create([
            'username' => 'leocavalcante',
            'text' => 'Imersão começou!',
        ]);
    }
}
