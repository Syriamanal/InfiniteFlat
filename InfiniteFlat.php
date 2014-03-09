<?php

/*
__PocketMine Plugin__
class=InfiniteFlatPlugin
name=InfiniteFlat
author=PEMapModder
version=alpha 0.0.0
apiversion=13
*/

class InfiniteFlat implements Plugin{
	private static $inst;
	public static function request(){
		return self::$inst;
	}
	public $cfg;
	public function __construct(ServerAPI $a, $s=0){
		$this->api=$api;
		$this->server=ServerAPI::request();
		self::$inst=$this;
	}
	public function __destruct(){
	}
	public function init(){
		$this->dir=$this->api->plugin->configPath($this);
		$noExt=$this->dir."settings.";
		$ext="yml";
		if(file_exists($noExt."txt"))
			$ext="txt";
		if(defined("CONFIG_YAML"))eval("\$yml=CONFIG_YAML;");
		else eval("\$yml=Config::YAML;");
		$this->cfg=new Config($noExt.$ext, $yml, self::$defaultSettings);
	}
	protected static $defaultSettings=array(
"World generation efficiency"=>true,
"Overlapping chunks not-squared"=>2,
"Number of worlds preloaded for buffer for players near world margin"=>1,
		);
}
/*
x x x x i i i i i i i i x x x x
x x x x i i i i i i i i x x x x
x x x x i i i i i i i i x x x x
x x x x i i i i i i i i x x x x
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
i i i i e e e e e e e e i i i i
x x x x i i i i i i i i x x x x
x x x x i i i i i i i i x x x x
x x x x i i i i i i i i x x x x
x x x x i i i i i i i i x x x x
*/
