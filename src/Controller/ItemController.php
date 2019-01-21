<?php

namespace Wcs\Controller;
use Wcs\Model\ItemManager;
use Wcs\Model\Item;

// src/Controller/ItemController.php

class ItemController extends AbstractController {

	public function index() {
		$itemManager = new ItemManager($this->pdo);
		$items = $itemManager->selectAll();

		return $this->twig->render('Item/index.html.twig', [
			'items' => $items
		]);
	}

	public function show(int $id) {
		$itemManager = new ItemManager($this->pdo);
		$item = $itemManager->selectOneById($id);

		return $this->twig->render('Item/showItem.html.twig', [
			'item' => $item
		]);
	}

	public function add() {
		if (!empty($_POST)) {
	        // TODO : validations des valeurs saisies dans le form
	        // création d'un nouvel objet Item et hydratation avec les données du formulaire 
		    $item = new Item();
		    $item->setTitle($_POST['title']);

		    $itemManager = new ItemManager($this->pdo);
		    
		    // l'objet $item hydraté est simplement envoyé en paramètre de insert()
		    if (($id = $itemManager->insert($item)) == TRUE) {
			   //  si tout se passe bien, redirection 

			    header('Location: /item/'.$id);
			    exit();
			}
		}
		// le formulaire HTML est affiché (vue à créer)
	    return $this->twig->render('Item/addItem.html.twig'); 
	}

	public function edit(int $id) {
		$itemManager = new ItemManager($this->pdo);
		$item = $itemManager->selectOneById($id);

		if (!empty($_POST)) {
			$item->setTitle($_POST['title']);
			$itemManager->update($item);

			header('Location: /item/'.$item->getId());
			exit();
		}

		return $this->twig->render('Item/edit.html.twig', [
			'item' => $item
		]);
	}

	public function delete(int $id)
	    {
	        $ItemManager = new ItemManager($this->pdo);

	        if (isset($_POST['id'])) {
	            $ItemManager->delete($_POST['id']);
	        }

	        header('Location: /');
	        exit();
	    }
}
