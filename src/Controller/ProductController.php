<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends AbstractController
{
    /**
     *  @Route("/{slug}", name="product_category" )
     */

    public function category($slug, CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->findOneBy([
            'slug' => $slug
        ]);

        dd($category);


        return $this->render('product/category.html.twig', [
            'slug' => $slug,
        ]);
    }
}
