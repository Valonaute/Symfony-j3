<?php

namespace App\Controller;

use App\Entity\Customers;
use App\Form\Type\CustomersType;
use App\Repository\CustomersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends AbstractController {

    public $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createCustomer(Request $request)
    {
        $customer = new Customers();

        $form = $this->createForm(CustomersType::class, $customer);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($customer);

            $this->entityManager->flush();

            $this->addFlash('success', 'Bravo ! Votre client a bien été ajoutée dans la base de données !');

            return $this->redirectToRoute('customers');
        }

        return $this->render('createcustomer.html.twig', ['formcustomer' => $form->createView()]);

    }

    public function showCustomers(CustomersRepository $repositoryCustomer)
    {
        $customers = $repositoryCustomer->findAll();

        return $this->render('customers.html.twig', ['customers' => $customers]);
    }

    public function deleteCustomer(CustomersRepository $customerRepository, $id)
    {
        $customer = $customerRepository->find($id);

        if ($customer){

            $customerRepository->remove($customer, $flush = true);

            $this->addFlash('success', "Parfait, le client a bien été supprimé");

            return $this->redirectToRoute('customers');
        }

        return $this->redirectToRoute('customers');
    }

    public function updateCustomer(Request $request, CustomersRepository $customerRepository, $id)
    {
        $customer = $customerRepository->find($id);

        $form = $this->createForm(CustomersType::class, $customer);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $customerRepository->save($customer, $flush = true);

            $this->addFlash('success', 'Top, les modifications ont bien été effectuées');

            return $this->redirectToRoute('customers');
        }

        return $this->render('updatecustomer.html.twig', ['formupdate' => $form->createView()]);
    }
}