<?php
namespace Coxis\JS;

class Bundle extends BundleLoader {
	public function load($queue) {
		Autoloader::preloadDir(dirname(__FILE__));
	}
}
return new Bundle;