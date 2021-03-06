<?php
namespace App\Console\Command;


use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\InputInterface;
use Laventure\Component\Console\Output\OutputInterface;



/**
 * Class UserCreateCommand
 *
 * @package App\Console\Command
 *
 * <Generated By Laventure 02/04/2022 19:53:11>
*/
class UserCreateCommand extends Command
{

    /**
     * @var string
    */
    protected $name = 'user:create';



    /**
     * @var string
    */
    protected $description = 'describe your command here...';




    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
    */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
           // put your logic here

           $output->write('You are ready for execution user:create');

           return Command::SUCCESS;
    }
}