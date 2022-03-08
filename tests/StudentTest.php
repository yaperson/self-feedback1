<?php
namespace App\Tests;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StudentTest extends WebTestCase
{
    public function testShowLogin(){
        $client = static::createClient();
        $client->request('POST', '/login');
        $client->followRedirect();

        //dump($client->getResponse()->getStatusCode());

        $this->assertEquals(Response::HTTP_OK , $client->getResponse()->getStatusCode());
    }
    public function testShowMain(){
        $client = static::createClient();
        $client->request('GET', '/');
        //$client->followRedirect();

        //dump($client->getResponse()->getStatusCode());

        $this->assertEquals(Response::HTTP_OK , $client->getResponse()->getStatusCode());
    }
    public function testShowStudentNew(){
        $client = static::createClient();
        $client->request('POST', '/student/new');
       $client->followRedirect();

        //dump($client->getResponse()->getStatusCode());

        $this->assertEquals(Response::HTTP_OK , $client->getResponse()->getStatusCode());
    }
}
