<?php

namespace Quest;

use pocketmine\{Player, Server};
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\{Command, CommandSender};
use Quest\FormAPI\Form\CustomForm;
use Quest \FormAPI\Form\SimpleForm;
use Quest\FormAPI\Form\ModalForm;

class Loader extends PluginBase implements Listener{
      public eco;
      public function onEnable(){
         $this->eco = $this->getServer()->getPluginManager()->getPlugin('EconomyAPI");
         $this->getServer()->getPluginManager()->registerEvents($this, $this);
       }
           public function onCommand(CommandSender $p, Command $cmd, array $args, label $string): bool{
           
          }
}
