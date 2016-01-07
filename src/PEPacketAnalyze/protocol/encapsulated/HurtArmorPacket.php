<?php

namespace PEPacketAnalyze\protocol\encapsulated;

use PEPacketAnalyze\protocol\Packet;

class HurtArmorPacket extends Packet{

	public function getName(){
		return "HurtArmor Packet";
	}

	public function decode(){
		$this->health = $this->getByte();
		//print_r($this);
	}

}