<?php
namespace App\Console;

use App\Console\Command\SayHelloCommand;
use Laventure\Foundation\Console\Kernel as ConsoleKernel;




/**
 * @Kernel
 */
class Kernel extends ConsoleKernel
{

    /**
     * @var string[]
    */
    protected $commands = [
         SayHelloCommand::class
    ];
}