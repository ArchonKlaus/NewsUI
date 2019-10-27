public function openJoin($player){
	        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }             
            switch($result){
                case 0:
                    $player->sendMessage(TextFormat::GREEN . "§l§eNEWS\n§r§aThank you for reading today's topic");
                    $player->addTitle("§l§6Murphy§9P§eE", "§r§bThank you for joining!");
                break;
                    
                case 1:
                    
                break;
            }
            
            
            });
            $form->setTitle("§l§6News");
        $form->setContent("§l§eToday’s News");
        $form->addButton("§l§aComing§eSoon!", SimpleForm::IMAGE_TYPE_URL ,  "https://raw.githubusercontent.com/Saxavlax001/Serverfiles/master/goldarrow.png");
        $form->addButton("§l§eExit", SimpleForm::IMAGE_TYPE_URL ,  "https://raw.githubusercontent.com/Saxavlax001/Serverfiles/master/goldarrow.png");

        $form->sendToPlayer($player);
}
}
