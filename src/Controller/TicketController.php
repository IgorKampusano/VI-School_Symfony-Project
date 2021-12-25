<?php

namespace App\Controller;

use App\DTO\TicketDTO;
use App\Entity\Passenger;
use App\Entity\Ticket;
use App\Form\Type\TicketType;
use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ticket")
 */

class TicketController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/booking", name="ticket.booking")
     */
    public function bookTicket(Request $request): Response
    {
        $ticketDto = new TicketDTO();

        $form = $this->createForm(TicketType::class, $ticketDto, [
            'action' => $this->generateUrl('ticket.booking')
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ticketEntity = Ticket::createFromDTO($ticketDto);
            $this->entityManager->persist($ticketEntity);
            $this->entityManager->flush();
//            return $this->redirectToRoute('request.show', ['id' => $passengerEntity->getId()]);
        }
    }

    /**
     * @Route("/show/{id}", name="ticket.show")
     */
    public function showAction(int $id, TicketRepository $ticketRepository): Response
    {
        $ticket = $ticketRepository->findById($id);

        if (is_null($ticket)) {
            throw new NotFoundHttpException('Запрос не найден');
        }

        return $this->render('ticket/booking-ticket-success.html.twig', [
            'ticket' => $ticket
        ]);
    }

}