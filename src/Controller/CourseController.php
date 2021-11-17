<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use App\Entity\Course;
 /**
     * @Route("/courses", name="course_")
     */
class CourseController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {

        $courses =$this->getDoctrine()->getRepository(Course::class)->findAll();

        return $this->json([
  'data'=>$courses
        ]);
    }
    /**
     * @Route("/{courseId}", name="show", methods={"GET"})
     */
    public function show($courseId){

        $course =$this->getDoctrine()->getRepository(Course::class)->find($courseId);
        return $this->json([
            'data'=>$course
                  ]);
    }

    /**
     * @Route("/", name="create", methods={"POST"})
     */
    public function create(Request $request){

        $data= $request->request->all();

        $course= new Course();
        $course->setName($data['name']);
        $course->setDescription($data['description']);
        $course->setSlug($data['slug']);
        $course->setCreatedDate(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
        $course->setUpdatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));

        $doctrine = $this->getDoctrine()->getManager();

        $doctrine->persist($course); // persist works with entities

        $doctrine->flush();
        return $this->json([
            'data'=>'Course created succefully!'
        ]
        );

    }
    //with patch you can update parcel, put you update everything
    /**
     * @Route("/{courseId}", name="update", methods={"PUT", "PATCH"})
     */
    public function update($courseId, Request $request){

        $data= $request->request->all();
        $doctrine= $this->getDoctrine();

        $course= $doctrine->getRepository(Course::class)->find($courseId);

        if($request->request->has('name'))
            $course->setName($data['name']);

        if($request->request->has('description'))
            $course->setDescription($data['description']);

        if($request->request->has('slug'))
            $course->setSlug($data['slug']);

        $course->setCreatedDate(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));
        $course->setUpdatedAt(new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')));

        $manager = $doctrine->getManager();

        // $doctrine->persist($course); // persist works with entities, I dont need to pass the persist for update now

        $manager->flush();
        return $this->json([
            'data'=>'Course updated succefully!'
        ]
        );
    }
    /**
     * @Route("/{courseId}", name="delete", methods={"DELETE"})
     */
    public function delete($courseId){
        $doctrine= $this->getDoctrine();

        $course= $doctrine->getRepository(Course::class)->find($courseId);
        $manager = $doctrine->getManager();
        $manager->remove($course);
        $manager->flush();
        return $this->json([
            'data'=>'Course deleted succefully!'
        ]
        );

    }

}
