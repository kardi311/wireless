<?php
declare(strict_types=1);
namespace App\Controller;

use App\Service\VidexExtractor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @param VidexExtractor $extractor
     *
     * @return JsonResponse
     *
     * @Route("/", name="homepage")
     */
    public function indexAction(VidexExtractor $extractor): JsonResponse
    {
        $options = $extractor->extract();

        return new JsonResponse($options);
    }
}
