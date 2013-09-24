<?php
/*
__PocketMine Plugin__
name=Stats
version=0.0.1
description=Plugin with various stats
author=linuxboytoo
class=Stats
apiversion=10
*/


class Stats implements Plugin{
        private $api, $path, $config;
        public function __construct(ServerAPI $api, $server = false){
                $this->api = $api;
		$this->config['pluginname'] = get_class($this);
		$this->config['pluginpath'] = $this->path.'plugins/'.$this->config['pluginname'].'/';
		
		$this->config['config']['stats'] = [ 'kills' => [ 'handler' => 'player.death' ] ];

		if(!file_exists($this->config['pluginpath'])) { mkdir($this->config['pluginpath'],755,true); }
        }

        public function init() {
		$this->api->console->register("stats", "Various Stat Commands", array($this, "handler"));
	}

        public function __destruct(){
        }

	public function handler($cmd, $params, $issuer, $alias) {
		
		$username = $issuer->username;

		if(
		
		if($params[2]=='enable')	{ $this->updateStatus($params[1],1); }
		if($params[2]=='disable')	{ $this->updateStatus($params[1],0); }

 || $params[2]=='disable') { updateStatus($params[1],$params[2]) }
			
	}

	public function updateStatus($stat,$status)
	{
		if($status=='enable') { $status=1; } else { $status=0; }

		$this->config['config']['stats']['kills']['status'] = $status
	}
}
