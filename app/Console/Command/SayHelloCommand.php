<?php
namespace App\Console\Command;


use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\InputInterface;
use Laventure\Component\Console\Output\OutputInterface;


/**
 * @SayHelloCommand
*/
class SayHelloCommand extends Command
{


     /**
      * @var string
     */
     protected $name = 'say:hello';




     /**
      * @inheritDoc
     */
     public function configure()
     {

     }




     /**
      * @param InputInterface $input
      * @param OutputInterface $output
      * @return int
     */
     public function execute(InputInterface $input, OutputInterface $output): int
     {
          echo "Привет! ребята.\n";

          return Command::SUCCESS;
     }
}