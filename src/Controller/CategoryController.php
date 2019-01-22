<?php

namespace Wcs\Controller;
use Wcs\Model\CategoryManager;

class CategoryController extends AbstractController {

	public function index() {
		$categoryManager = new CategoryManager($this->pdo);
		$categories = $categoryManager->selectAll();

		return $this->twig->render('Category/category.html.twig', [
			'categories' => $categories
		]);
	}

	public function show(int $id) {
		$categoryManager = new CategoryManager($this->pdo);
		$category = $categoryManager->selectOneById($id);

		return $this->twig->render('Category/showCategory.html.twig', [
			'category' => $category
		]);
	} 
}
