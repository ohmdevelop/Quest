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
           if($cmd->getName() === "quest"){
            	    if($p instanceof Player){
            	    $this->Form($p);
                       }
                  }
              return true;
          }
        public function Form($p){
         $form = new SimpleForm(function (Player $p, $data){
             $result = $data;
           if($result === null){
              return true;
          }
           switch($result){
             case 0:
              $this->Quest1($p);
             break;
            }
            });
           $form->setTitle("Quest");
           $form->addButton("ส่งหิน\nจำนวน 128 ก้อน");
           $form->sendToPlayer($p);
            return $form;
            }
}
