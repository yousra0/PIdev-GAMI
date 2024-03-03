<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository; // Import ProductRepository
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/order/controller1')]
class OrderController1Controller extends AbstractController
{
    #[Route('/', name: 'app_order_controller1_index', methods: ['GET'])]
    public function index(OrderRepository $orderRepository): Response
    {
        return $this->render('order_controller1/index.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_order_controller1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ProductRepository $productRepository): Response
    {
        $order = new Order();
    
        // Fetch products from the repository
        $products = $productRepository->findAll();
    
        // Create the form and pass the products to it
        $form = $this->createForm(OrderType::class, $order, ['products' => $products]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle product ratings
            $productRatings = $form->get('productRatings')->getData();
            
            // Associate ratings with corresponding products
            foreach ($productRatings as $productId => $rating) {
                $product = $productRepository->find($productId);
                // Add the product to the order and set its rating
                $order->addProduct($product, $rating);
                // Persist the product (optional, if any changes are made to the product entity)
                $entityManager->persist($product);
            }
    
            // Persist the order
            $entityManager->persist($order);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_order_controller1_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('order_controller1/new.html.twig', [
            'order' => $order,
            'form' => $form,
            'products' => $products, // Pass the 'products' variable to the template
        ]);
    }



    #[Route('/{id}', name: 'app_order_controller1_show', methods: ['GET'])]
    public function show(Order $order): Response
    {
        return $this->render('order_controller1/show.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_order_controller1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_order_controller1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('order_controller1/edit.html.twig', [
            'order' => $order,
            'form' => $form,
            
        ]);
    }

    #[Route('/{id}', name: 'app_order_controller1_delete', methods: ['POST'])]
    public function delete(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_order_controller1_index', [], Response::HTTP_SEE_OTHER);
    }
}
