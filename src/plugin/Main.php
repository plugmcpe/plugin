<?php
namespace plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase{
 public function onEnable(){
 $this->getServer()->getLogger()->info("plugin has been enable");
  $thid->getLogger()->info("plugin by groupluginer");
  }
  public function onDisable(){
   $this->getServet()->getLogger()->info("plugin has been disable");
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch ($cmd->getName()){
      case 'hello':
      $player = $sender->getPlayer();
      $player->setGamemode(1);
     break;
     }
    }
   }
