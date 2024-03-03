<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use SearchType as GlobalSearchType;
use Symfony\Component\Form\Extension\Core\Type\SearchType as TypeSearchType;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/products", name="product_index")
     */
    public function index(Request $request): Response
    {
        // Get sorting parameters from the request
        $sortBy = $request->query->get('sort_by', 'name'); // Default sorting by name
        $sortOrder = $request->query->get('sort_order', 'asc'); // Default sorting order is ascending

        // Validate sort order
        $validSortOrders = ['asc', 'desc'];
        if (!in_array($sortOrder, $validSortOrders)) {
            $sortOrder = 'asc'; // If invalid sort order provided, default to ascending
        }

        // Create a search form
        $searchForm = $this->createForm(GlobalSearchType::class);
        $searchForm->handleRequest($request);

        // Initialize query builder
        $queryBuilder = $this->entityManager->getRepository(Product::class)->createQueryBuilder('p');

        // If form is submitted and valid, apply search
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $searchQuery = $searchForm->get('query')->getData();
            $queryBuilder->andWhere('p.name LIKE :search')
                ->setParameter('search', '%'.$searchQuery.'%');
        }

        // Retrieve products from the database, applying sorting and search filters
        $products = $queryBuilder
            ->orderBy('p.' . $sortBy, $sortOrder)
            ->getQuery()
            ->getResult();

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'search_form' => $searchForm->createView(),
        ]);
    }
}
