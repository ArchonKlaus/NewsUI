<?php

/**
 * Copyright 2019 Eforce
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types = 1);

namespace News;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;

class Main extends PluginBase implements Listener {


    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "Enabled!");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        switch($cmd->getName()){
            case "news":
                $this->openTest($sender);

        }
        return true;
    }

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
                    $player->addTitle("§l§aToday's News ", "§r§bThank you for joining!");
                    break;

                case 1:

                    break;
            }


        });
        $form->setTitle("§l§eNews");
        $form->setContent("§l§aToday's §eNews");
        $form->setContent("- §l§dscoreBoard §rhas been changed to fit th §l§ascreen §rwell!\n§r§bMore addons added to the scorehud!");
        $form->addButton("§l§cExit\n§r§bTap to exit", 0, "textures/blocks/barrier"); {
            break;

            case 1:

                break;
        }

        $form->sendToPlayer($player);
    }
}
