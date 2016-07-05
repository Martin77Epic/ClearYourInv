<?php

namespace ClearYourInv;


use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\inventory\PlayerInventory;

class Main extends PluginBase
{
    public function onEnable()
    {
        $this->getLogger()->info(TextFormat::AQUA . "ClearYourInv enabled");
        $this->getServer()->getPluginManager()->registerEvent($this, $this);
    }
    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::AQUA . "ClearYourInv disabled");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch ($command->getName()){
            case "ci":
                if (!($sender instanceof ConsoleCommandSender)){
                    $sender->sendMessage(TextFormat::RED . "You can use this command only in-game!");
                    
                } else 
                    if (!($sender instanceof ConsoleCommandSender)) {
                        if ($sender->hasPermission(m77e.ci)){
                        $sender->sendMessage(TextFormat::GREEN . "Succesfully cleared your Inventory!");
                        $sender->getServer()->autoClearInv;
                    }
                }
        }
    }

}
