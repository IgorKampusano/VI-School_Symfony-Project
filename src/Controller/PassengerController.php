<?php

namespace App\Controller;

use App\DTO\PassengerDTO;
use App\Entity\Passenger;
use App\Form\Type\PassengerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/passenger")
 */
class PassengerController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/add", name="passenger.add")
     */
    public function addPassenger(Request $request): Response
    {
        $passengerDto = new PassengerDTO();

        $form = $this->createForm(PassengerType::class, $passengerDto, [
            'action' => $this->generateUrl('passenger.add')
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passengerEntity = Passenger::createFromDTO($passengerDto);
            $this->entityManager->persist($passengerEntity);
            $this->entityManager->flush();
//            return $this->redirectToRoute('request.show', ['id' => $passengerEntity->getId()]);
        }

        return $this->renderForm('passenger/adding-passenger.html.twig', [
            'form' => $form
        ]);
    }
}