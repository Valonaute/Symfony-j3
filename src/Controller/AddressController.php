<?php

namespace App\Controller;

use App\Entity\Address;
use App\Form\Type\AddressType;
use App\Repository\AddressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AddressController extends AbstractController {

    public $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createAddress(Request $request)
    {
        $address = new Address();

        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($address);

            $this->entityManager->flush();

            $this->addFlash('success', 'Bravo ! Votre adresse a bien été ajoutée dans la base de données !');

            return $this->redirectToRoute('address');
        }

        return $this->render('createaddress.html.twig', ['formaddress' => $form->createView()]);

    }

    public function showAddress(AddressRepository $repositoryAddress)
    {
        $address = $repositoryAddress->findAll();

        return $this->render('address.html.twig', ['address' => $address]);
    }

    public function deleteAddress(AddressRepository $addressRepository, $id)
    {
        $address = $addressRepository->find($id);

        if ($address){

            $addressRepository->remove($address, $flush = true);

            $this->addFlash('success', "Parfait, l'adresse a bien été supprimée");

            return $this->redirectToRoute('address');
        }

        return $this->redirectToRoute('address');
    }

    public function updateAddress(Request $request, AddressRepository $addressRepository, $id)
    {
        $address = $addressRepository->find($id);

        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $addressRepository->save($address, $flush = true);

            $this->addFlash('success', 'Top, les modifications ont bien été effectuées');

            return $this->redirectToRoute('address');
        }

        return $this->render('updateaddress.html.twig', ['formupdate' => $form->createview()]);
    }
}