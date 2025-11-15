<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(ProjectRepository $projectRepository, TaskRepository $taskRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $projectsCount = $projectRepository->count([]);
        $tasksCount = $taskRepository->count([]);
        $openTasks = $taskRepository->count(['status' => 'TODO']);

        return $this->render('dashboard/index.html.twig', [
            'projectsCount' => $projectsCount,
            'tasksCount' => $tasksCount,
            'openTasks' => $openTasks,
        ]);
    }
}
