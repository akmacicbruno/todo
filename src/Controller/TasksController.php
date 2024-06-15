<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class TasksController extends AbstractController
{
    #[Route('/tasks', name: 'tasks')]
    public function index(UserInterface $user, EntityManagerInterface $em): Response
    {
        $tasks = $em->getRepository(Task::class)->findBy(
            ['user' => $user]
        );

        return $this->render('tasks/show.html.twig', [
            'tasks' => $tasks,
        ]);
    }


    #[Route('/tasks/create', name: 'create_task')]
    public function create(Request $request, UserInterface $user, EntityManagerInterface $em): Response
    {
        $task = new Task();
        $form = $this->createForm(TaskFormType::class, $task);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $newTesk = $form->getData();
            $newTesk->setStatus(0);
            $newTesk->setUser($user);

            $em->persist($newTesk);
            $em->flush();

            return $this->redirectToRoute('tasks');
        }

        return $this->render('tasks/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/tasks/update/{id}', name: 'task_update')]
    public function edit(EntityManagerInterface $em, int $id): Response
    {
        $task = $em->getRepository(Task::class)->find($id);

        if (!$task) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        $task->setStatus(1);
        $em->flush();

        return $this->redirectToRoute('tasks');
    }

    #[Route('/tasks/delete/{id}', name: 'task_delete')]
    public function delete(EntityManagerInterface $em, int $id): Response
    {
        $task = $em->getRepository(Task::class)->find($id);

        if (!$task) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        $em->remove($task);
        $em->flush();

        return $this->redirectToRoute('tasks');
    }
}
