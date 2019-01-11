<?php

namespace Wcs\Controller;
use Wcs\Model\ItemManager;
// src/Controller/ItemController.php

class ItemController {

	public function index() {
		$itemManager = new ItemManager();
		$items = $itemManager->selectAllItems();

		require __DIR__ . '/../View/item.php';
	}
}
