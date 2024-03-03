<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\Product1Type;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/product/controller1')]
class ProductController1Controller extends AbstractController
{
    #[Route('/', name: 'app_product_controller1_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository, ParameterBagInterface $params): Response
    {
       
    
        return $this->render('product_controller1/index.html.twig', [
            'products' => $productRepository->findAll(),
            
        ]);
    }
    #[Route('/new', name: 'app_product_controller1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form['image']->getData();

            if ($file) {
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

                // Move the file to the directory where your images are stored
                $file->move(
                    $this->getParameter('images_directory'), // You need to define 'images_directory' parameter in services.yaml
                    $fileName
                );

                // Store the file path in the Product entity
                $product->setImage($fileName);
            }

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_controller1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_controller1/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_controller1_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product_controller1/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_controller1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form['image']->getData();

            if ($file) {
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

                // Move the file to the directory where your images are stored
                $file->move(
                    $this->getParameter('images_directory'), // You need to define 'images_directory' parameter in services.yaml
                    $fileName
                );

                // Store the file path in the Product entity
                $product->setImage($fileName);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_product_controller1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_controller1/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/product/controller1/delete-selected', name: 'app_product_controller1_delete_selected', methods: ['POST'])]
    public function deleteSelected(Request $request, EntityManagerInterface $entityManager): Response
    {
        $selectedProductIds = $request->request->get('selected_products', []);
    
        // Ensure $selectedProductIds is an array
        if (!is_array($selectedProductIds)) {
            $selectedProductIds = [];
        }
    
        foreach ($selectedProductIds as $productId) {
            $product = $entityManager->getRepository(Product::class)->find($productId);
    
            if ($product) {
                $entityManager->remove($product);
            }
        }
    
        $entityManager->flush();
    
        $this->addFlash('success', count($selectedProductIds) . ' product(s) deleted successfully.');
    
        return $this->redirectToRoute('app_product_controller1_index');
    }

    // Add a method to generate a unique file name
    private function generateUniqueFileName(): string
    {
        return md5(uniqid());
    }

    
}
