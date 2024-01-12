<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChangeColorController extends AbstractController
{
    #[Route('/change-color-hover-css', name: 'change_color_hover_css')]
    public function changeColor(): Response
    {
        return $this->render('pages/change-color-hover-css.html.twig');
    }

    #[Route('/change-color-hover-js', name: 'change_color_hover_js')]
    public function changeColorHoverJs():Response
    {
        return $this->render('pages/change-color-hover-js.html.twig');
    }

    #[Route('/change-size-click-js', name: 'change_size_click_js')]
    public function changeSizeClickJs():Response
    {
        return $this->render('pages/change-size-click-js.html.twig');
    }
}

