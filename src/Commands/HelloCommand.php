<?php

namespace Phar\Commands;

use Mix\Console\CommandLine\Flag;

/**
 * Class HelloCommand
 * @package Phar\Commands
 * @author liu,jian <coder.keda@gmail.com>
 */
class HelloCommand
{

    /**
     * 主函数
     */
    public function main()
    {
        $name = Flag::string(['n', 'name'], 'Xiao Ming');
        $say  = Flag::string('say', 'Hello, World!');
        println("{$name}: {$say}");
    }

}
