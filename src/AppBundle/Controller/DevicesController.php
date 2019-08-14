<?php  
namespace AppBundle\Controller;
use AppBundle\Entity;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Devices;
use FOS\RestBundle\Util\Codes;
use AppBundle\Form\FormValidationType; 
use Doctrine\DBAL\Schema\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Request; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; 
use Symfony\Component\HttpFoundation\Response; 
use Doctrine\ORM\EntityRepository;
class DevicesController extends Controller {
   /** 
   * @Route("/viewdb") 
   * * @Method({"GET", "HEAD"})
   */ 
   public function displayAction() { 
      $repository = $this->getDoctrine()
      ->getRepository('AppBundle:Devices');
      $query = $repository->createQueryBuilder('dev')->getQuery();
      $products = $query->getResult();
      for( $i=0;$i<count($products);$i++)
      {
         $result[$i]['id']=$products[$i]->getId();
         $result[$i]['name']=$products[$i]->getName();
         $result[$i]['mac']=$products[$i]->getMac();
      }
      return $this->render('rand.html.twig',$result);
   }
   /** 
   * @Route("/") 
   */ 
   public function displaAction() { 
      $bk = $this->getDoctrine()
      ->getRepository('AppBundle:Devices') 
      ->findAll(); 
      return $this->render('rand.html.twig', array('result' => $bk)); 
   }
   /** 
   * @Route("/senddata") 
   * @Method({"POST", "HEAD"})
   */ 
   public function insertAction(Request $request) { 
      $entityManager = $this->getDoctrine()->getManager();
      $data = json_decode($request->getContent(), true);
      $device = new Devices();
      $device->setName($data['name']); 
      $device->setMac($data['mac']); 
      $entityManager->persist($device);
      $entityManager->flush();
      $response = new Response();
$response->headers->set('Content-Type', 'application/json');

return $response;
   } 
   /** 
      * @Route("/rand") 
   */ 
   public function authorAction() { 
      $name=array();
      $name['name']="hey";
      return $this->render('rand.html.twig',$name); 
   }  

}