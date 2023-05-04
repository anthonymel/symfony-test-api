<?php

namespace App\Controller\admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// ...

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Blog'),
            MenuItem::linkToCrud('Categories', 'fa fa-tags', Post::class)
        ];
    }
}
