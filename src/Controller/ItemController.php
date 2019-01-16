<?php

namespace Wcs\Controller;
use Wcs\Model\ItemManager;
use Twig_Loader_Filesystem;
use Twig_Environment;
// src/Controller/ItemController.php

class ItemController {

	private $twig;

    public function __construct() 
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

	public function index() {
		$itemManager = new ItemManager();
		$items = $itemManager->selectAllItems();

		return $this->twig->render('Item/index.html.twig', [
			'items' => $items
		]);
	}

	public function show(int $id) {
		$itemManager = new ItemManager();
		$item = $itemManager->selectOneItem($id);

		return $this->twig->render('Item/showItem.html.twig', [
			'item' => $item
		]);
	} 
}
