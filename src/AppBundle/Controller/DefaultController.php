<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Client;
use AppBundle\Entity\Fournisseur;
use AppBundle\Entity\Produit;
use AppBundle\Entity\Document;
use AppBundle\Entity\Category;
use AppBundle\Entity\CategoryCommande;
use AppBundle\Entity\Commande;
use AppBundle\Entity\CommandeProduit;
use AppBundle\Entity\RealisePar;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use AppBundle\Form\comproType;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
     
      /**
     * @Route("/ayoub", name="new")
     */
    public function newAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/formClients.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * @Route("/testCreation", name="tc")
     */
    public function createAction()
{
    $product = new Produit();
    $product->setName('Keyboard');
    

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Saved new product with id '.$product->getIdProduit());
}


/**
     * @Route("/testShow/{productId}", name="ts")
     */
public function showAction($productId)
{
    /*$product = $this->getDoctrine()
        ->getRepository('AppBundle:Produit')
        ->find($productId);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$productId
        );
    }
    return new Response('Product finded '.$product->getname());
*/
   return $this->redirect($this->generateUrl('tc'));
    // ... do something, like pass the $product object into a template
    // return $this->render('menu.html.twig');
}

/**
 * @Route("/showClients", name="showClients")
*/
public function showClientsAction()
{
$clients = $this->getDoctrine()
        ->getRepository('AppBundle:Client')
        ->findall();

        $fournisseurs= $this->getDoctrine()
        ->getRepository('AppBundle:Fournisseur')
        ->findall();
       /* if (!$clients) {
        throw $this->createNotFoundException(
            'No product found  '
        );
      }
else*/
  return $this->render('default/ClientView.html.twig',array('clients' => $clients,'fournisseurs' => $fournisseurs ));
}


/**
 * @Route("/removeClient", name="removeClient")
*/
public function removeClientsAction(Request $request)
{
$em = $this->getDoctrine()->getManager();
$submitsrc=$request->get('submitbtn');
if($submitsrc==2)
{
     $clientIdList=$request->get('clientsIdList');      
  foreach ($clientIdList as $clientid) {
       # code...
    $client=$em->getRepository('AppBundle:Client')->find($clientid);
     $em->remove($client);
     $em->flush();
     }  
     return $this->redirectToRoute('showClients');
}
else if($submitsrc==1)
{
      return $this->render('default/formClients.html.twig',array('client' => new client()));
}
else
{
   $clientid=$request->get('clientsIdList')[0];    
   $client=$em->getRepository('AppBundle:Client')->find($clientid);
   return $this->render('default/formClients.html.twig',array('client' => $client));
}
 
}


/**
 * @Route("/insertClient", name="insertClient")
*/
public function insertClientAction(Request $request)
{

  if($request->get('clientid') == null)
  {
    $client=new client();
  }
  else
  {
      $em = $this->getDoctrine()->getManager();
  $client=$em->getRepository('AppBundle:Client')->find($request->get('clientid'));
  }
$client->setNom($request->get('nom'));
$client->setPrenom($request->get('prenom'));
$client->setAge($request->get('numAge'));
$client->setSexe($request->get('gender'));
$client->setHauteur($request->get('numHau'));
$client->setLargeur($request->get('numLar'));
$client->setLongueur($request->get('numLong'));
$client->setnumTel($request->get('numTel'));
$em = $this->getDoctrine()->getManager();
$em->persist($client);
$em->flush();
   return $this->redirectToRoute('showClients');
}
 

/**
 * @Route("/gestionFournisseur", name="GestionFournisseur")
*/
public function GestionFournisseurAction(Request $request)
{

  $em = $this->getDoctrine()->getManager();
$submitsrc=$request->get('submitbtn');
if($submitsrc==2)
{
     $fourIdList=$request->get('fournisseurforIdList');      
  foreach ($fourIdList as $fourId) {
       # code...
    $fournisseur=$em->getRepository('AppBundle:Fournisseur')->find($fourId);
     $em->remove($fournisseur);
     $em->flush();
     }  
     return $this->redirectToRoute('showClients');
}
else if($submitsrc==1)
{
      return $this->render('default/formFourn.html.twig',array('fournisseur' => new Fournisseur()));
}
else
{
   $fourID=$request->get('fournisseurforIdList')[0];    
   $fournisseur=$em->getRepository('AppBundle:Fournisseur')->find($fourID);
   return $this->render('default/formFourn.html.twig',array('fournisseur' => $fournisseur));
}
 
}


/**
 * @Route("/insertFournisseur", name="insertFournisseur")
*/
public function insertFournisseurAction(Request $request)
{

  if($request->get('fourId') == null)
  {
    $fournisseur=new fournisseur();
  }
  else
  {
      $em = $this->getDoctrine()->getManager();
  $fournisseur=$em->getRepository('AppBundle:Fournisseur')->find($request->get('fourId'));
  }
$fournisseur->setNom($request->get('nom'));
$fournisseur->setPrenom($request->get('prenom'));

$fournisseur->setAdresse($request->get('adresse'));
$fournisseur->setnumTel($request->get('numTel'));
$em = $this->getDoctrine()->getManager();
$em->persist($fournisseur);
$em->flush();
   return $this->redirectToRoute('showClients');
}
 


/**
 * @Route("/testUpload", name="testUpload")
*/
public function UploadAction(Request $request)
{
  $product=new Produit();
  $categories=$this->getDoctrine()->getManager()->getRepository('AppBundle:Category')->findall();
 $form = $this->createFormBuilder($product)
        ->add('name')
        ->add('description')
        ->add('price')
        ->add('imageFile')
        ->add('category', ChoiceType::class, [
    'choices' => $categories,
    'choice_label' => function($category, $key, $index) {
        /** @var Category $category */
        return strtoupper($category->getName());
    },
    'choice_attr' => function($category, $key, $index) {
        return ['class' => 'category_'.strtolower($category->getName())];
    },
    'group_by' => function($category, $key, $index) {
        // randomly assign things into 2 groups
        return rand(0, 1) == 1 ? 'Group A' : 'Group B';
    },
  
])
        ->getForm();
        $form->handleRequest($request);
          if ($form->isValid()) {
               $em = $this->getDoctrine()->getManager();
              
          $em->persist($product);
          $em->flush();
          $products = $this->getDoctrine()
        ->getRepository('AppBundle:Produit')
        ->findall();
          return $this->render('default/showProducts.html.twig',array('products'=> $products));
          }
  return $this->render('default/updateClient.html.twig',array(
            'form' => $form->createView(),
        ));
}

 

 /**
 * @Route("/updateProduct", name="updateProduct")
*/
public function updateProductAction(Request $request)
{
  $product=$this->getDoctrine()->getManager()->getRepository('AppBundle:Produit')->find($request->get('productId'));
  $categories=$this->getDoctrine()->getManager()->getRepository('AppBundle:Category')->findall();
 $form = $this->createFormBuilder($product)
        ->add('name')
        ->add('description')
        ->add('price')
        ->add('imageFile')
        ->add('category', ChoiceType::class, [
    'choices' => $categories,
    'choice_label' => function($category, $key, $index) {
        /** @var Category $category */
        return strtoupper($category->getName());
    },
    'choice_attr' => function($category, $key, $index) {
        return ['class' => 'category_'.strtolower($category->getName())];
    },
    'group_by' => function($category, $key, $index) {
        // randomly assign things into 2 groups
        return rand(0, 1) == 1 ? 'Group A' : 'Group B';
    },
    //  'preferred_choices' => function($category, $key, $index) {
    //     return $category->getName() == 'Cat2' || $category->getName() == 'Cat3';
    // },
  
])
        ->getForm();
        $form->handleRequest($request);
          if ($form->isValid()) {
               $em = $this->getDoctrine()->getManager();
              
          $em->persist($product);
          $em->flush();
          $products = $this->getDoctrine()
        ->getRepository('AppBundle:Produit')
        ->findall();
          return $this->render('default/showProducts.html.twig',array('products'=> $products));
          }
  return $this->render('default/updateClient.html.twig',array(
            'form' => $form->createView(),
        ));
}


/**
 * @Route("/passerCommande", name="passerCommande")
*/
public function passerCommandeAction(Request $request)
{
$categories=$this->getDoctrine()->getManager()->getRepository('AppBundle:CategoryCommande')->findall();
$produits=$this->getDoctrine()->getManager()->getRepository('AppBundle:Produit')->findall();
    $em = $this->getDoctrine()->getManager();
    
  $commande=new Commande();
  $commande->setIdClient(1);

 
       $form = $this->createFormBuilder( $commande)
       ->add('prixClient')
        ->add('prixTheorique')
        ->add('dateLivraisonEsti', DateType::class, array('widget' => 'single_text'))
        ->add('category', ChoiceType::class, [
    'choices' => $categories,
    'choice_label' => function($category, $key, $index) {
        /** @var Category $category */
        return ($category->getName());
    },
    ])
        ->add('commandeproduits', CollectionType::class, array(
    'entry_type'   => comproType::class,
    'entry_options'  => array(
      'produits'=>$produits),
    //   'choice_label' => function($produit, $key, $index) {
       
    //     return ($produit->getName());
    // },
    
    'allow_add'=> true,
     'by_reference' => false,
    ))
        ->getForm();
        $form->handleRequest($request);
 if ($form->isValid()) 
 {
              $fourIdList=$request->get('fournisseurforIdList');      
 

           $em->persist($commande);
        $em->flush();
          foreach ($fourIdList as $fourId) {
       # code...
   $realise=new RealisePar();
   $realise->setIdFournisseur($fourId);
    $realise->setIdCommande($commande->getId());
    $em->persist($realise);
    $em->flush();
     }  
        }
         $fournisseurs= $this->getDoctrine()
        ->getRepository('AppBundle:Fournisseur')
        ->findall();
return $this->render('default/passerCommande.html.twig',array(
            'form' => $form->createView(),'fournisseurs'=>$fournisseurs,'produits'=>$produits
        ));


}


}
