<?php

namespace WorldGuard;

use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\block\Block;
use pocketmine\item\Item;

use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerInteractEvent;

class WorldGuard extends PluginBase implements Listener, CommandExecutor{

	public function onEnable(){
		$this->getLogger()->info("WorldGuardを読み込みました。");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
                @mkdir($this->getDataFolder());
                if(!$this->pluginsession = new PluginSession($this->getDataFolder())){
                $this->getLogger()->info(TextFormat::RED."WorldEditor".TextFormat::YELLOW."か".TextFormat::RED."WEdit".TextFormat::YELLOW."が読み込みされていません！！");
                $this->getServer()->shutdown();
                }
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){//後で翻訳
        	$username = $sender->getName();
                if(!($sender instanceof Player)){
                $sender->sendMessage("Please run this command in-game.");
                return true;
                break;
                }
        	switch($command->getName()){
       		case "/region":
                	if(!isset($args[0]) and $args[0] === ""){
                		$sender->sendMessage("Test Message");
                	return true;
                	break;
                	}
                	switch($args[0]){
                	case "":
                		$sender->sendMessage("Test Message");
                	
                	
                	
                	
                	
                	break;
                	}
                break;
                }
                return true;
	}

	public function onDisable(){
                //save function
		$this->getLogger()->info("WorldGuardのエリア情報を保存しました。");
	}

}