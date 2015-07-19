<?php

namespace SG;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;

class MainClass extends PluginBase implements Listener{

public function onLoad(){
    $this->getLogger()->info(TextFormat::WHITE . "I've been loaded!");
}

public function onEnable(){
    $game1Players = 0;
    $game1Status = 0;
    //$game2Players = 0;
    //$game2Status = 0;
    if(!file_exists($this->getDataFolder() . "config.yml")) {
        @mkdir($this->getDataFolder()); 
        file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml")); 
    }
    $this->saveDefaultConfig();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
}

public function onDisable(){
    $this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
}

public function randomGame($player){
$games = array("game1","game2","game3");
shuffle($games);
$randomGame = $games[0];
//TODO: fix this
}


public function joinGame1(){
    $game1Players++;
    Server::getInstance()->broadcastMessage("§l§b- §4" . $p->getName() . " §bhas joined SG match 1.");
    //TODO: Get from config
    $pos = new Position(500, 60, 500, $sender->getLevel());
    $sender->teleport($pos);
    //TODO: Get min players from config
    if($game1Players >= 10){
        $this->startGame1();
    }
}

public function startGame1(){
    $game1Status = 1;
    $this->
}

}
?>
