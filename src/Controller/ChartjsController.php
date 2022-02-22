<?php

namespace App\Controller;

use Symfony\UX\Chartjs\Model\Chart;
use App\Repository\StudentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChartjsController extends AbstractController
{
    /**
     * @Route("/chartjs", name="chartjs")
     */
    public function index(StudentRepository $StudentRepository, ChartBuilderInterface $chartBuilder): Response
    {
 
        $student = $StudentRepository->findAll();
 
        $labels = [];
        $data = [];
        $data2 = [];

        foreach ($student as $Students) {
            $labels[] = $Students->getNoteDate()->format('d/m/Y');
            $data[] = $Students->getNoteRepas();
            $data2[] = $Students->getNoteValeurEnvironnement();
        }

        dump($labels);
        dump(count($labels));
        $cpt = 0;
       for ($i = 0; $i <=> count($labels)-1;$i++){
            if( $labels[ 0 ] == $labels[ $i ] )
             {
                $tab1[] = $labels[ $i ];
             }
             else if ($labels[ $i ] == $labels[ $i + 1 ])
             {
                 $tab2[] = $labels[ $i +1] ;
             }
             $cpt = $cpt +1;
        }
        dump($tab1);
        dump($cpt);
 
        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => /*["Lundi","Mardi", "Mercredi", "Jeudi", "Vendredi"]*/ $labels,
            'datasets' => [
                [
                    'label' => 'Note repas',
                    'backgroundColor' => 'rgba(255,255,255, 0.5)',
                    'borderColor' => 'rgb(242, 129, 35)',
                    'pointBackgroundColor' => 'rgb(45,170,255)',
                    'pointBorderColor' => 'rgb(45,170,255)',
                    'data' => $data,
                ],
                [
                    'label' => 'Note Environement',
                    'backgroundColor' => 'rgba(255,255,255, 0.5)',
                    'borderColor' => 'rgb(45,170,255)',
                    'pointBackgroundColor' => 'rgb(45,170,255)',
                    'pointBorderColor' => 'rgb(45,170,255)',
                    'data' => $data2,
                ],
            ],
        ]);
         
        $chart->setOptions([]);
 
 
        return $this->render('chartjs/index.html.twig', [
            'controller_name' => 'Graphique note',
            'chart' => $chart,
        ]);
    }
}
