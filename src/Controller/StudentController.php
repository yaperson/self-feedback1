<?php

namespace App\Controller;

use DateTime;
use App\Entity\Student;
use App\Form\StudentType;
use Symfony\UX\Chartjs\Model\Chart;
use App\Repository\StudentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/student")
 */
class StudentController extends AbstractController
{
    /**
     * @Route("/", name="student_index", methods={"GET"})
     */
    public function index(StudentRepository $StudentRepository, ChartBuilderInterface $chartBuilder): Response
    {
        $student = $StudentRepository->findAll();

        $labels = [];
        $data = [];
        $data2 = [];

        foreach ($student as $Students) {
            $labels[] = $Students->getNoteDate(); //->format('d/m/Y');
            $data[] = $Students->getNoteRepas();
            $data2[] = $Students->getNoteValeurEnvironnement();
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels,
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
                    'pointBackgroundColor' => 'rgb(242, 129, 35)',
                    'pointBorderColor' => 'rgb(242, 129, 35)',
                    'data' => $data2,
                ],
            ],
        ]);

        $chart->setOptions([]);

        return $this->render('student/index.html.twig', [
            'students' => $StudentRepository->findAll(),
            'chart' => $chart,
        ]);
    }

    /**
     * @Route("/new", name="student_new", methods={"GET","POST"})
     */
    function new (Request $request): Response {
        $student = new Student();
        $student->setNoteDate(new DateTime());
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        dump($request);
        if($form->isSubmitted()) {
            dump($form->isValid());
        }
        dump($form->getErrors());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($student);

            // dump($request);
            // $CurrentDate=$request->get('student')['note_date'];
            //$CurrentDate=date("d/m/Y");

            $entityManager->flush();
            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('student/new.html.twig', [
            'student' => $student,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_show", methods={"GET"})
     */
    public function show(Student $student): Response
    {
        return $this->render('student/show.html.twig', [
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Student $student): Response
    {

        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('student/edit.html.twig', [
            'student' => $student,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_delete", methods={"POST"})
     */
    public function delete(Request $request, Student $student): Response
    {

        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        if ($this->isCsrfTokenValid('delete' . $student->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_index', [], Response::HTTP_SEE_OTHER);
    }
}
