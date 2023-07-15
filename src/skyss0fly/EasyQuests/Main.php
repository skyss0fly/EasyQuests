<?php

namespace skyss0fly\EasyQuests;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use skyss0fly\EasyQuests\{SimpleForm, Form};
use pocketmine\event\Listener;

class main extends pluginBase implements Listener {

public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
switch ($command->getName()) {
  case "quests":
  
         
        $questsform = new SimpleForm(function (Player $player, $data){
            $result = $data;
            if ($sender->hasPermission("EasyQuests.Admin") {
        $admun = $questsform->addButton("§c§lAdmin");
          
            if ($result !== null) {
        
                switch ($result) {
                    case 0:
                  
                  $sender->sendMessage("Closed Form");
                    break;
                }
            }
        if ($admin)
        {
$this->admin();
        }
        });
        $formtitle = "Quests"
        $formcontent = $this->quests($content);
    
       
        $questsform->setTitle($formtitle);
        $questsform->setContent($formcontent);

}
  $questsform->addButton("§d§lSubmit");
        $questsform->sendForm($questsform);
  return true;
    }
              
}
}

