<?php
/**
 * Created by PhpStorm.
 * User: imène
 * Date: 14/02/2018
 * Time: 23:44
 */

namespace Pidev\SoukelmedinaBundle\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Pidev\SoukelmedinaBundle\Entity\Categorie;
use Pidev\SoukelmedinaBundle\Entity\Produit;
use Pidev\SoukelmedinaBundle\Form\CategorieType;
use Pidev\SoukelmedinaBundle\PidevSoukelmedinaBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{

    public function listFrontAction()
    {
        $em=$this->getDoctrine()->getManager();
        $categories = $em->getRepository(Categorie::class)->findAll();
        return $this->render("PidevSoukelmedinaBundle:Categorie:front_list.html.twig",array(
            'categories'=>$categories
        ));
    }


    public function ajoutAction(Request $request)
    {
        $categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("pidev_soukelmedina_listC");
        }
        return $this->render("PidevSoukelmedinaBundle:Categorie:ajout.html.twig",array(
            'form'=>$form->createview()
        ));
    }

    public function listAction() {
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository("PidevSoukelmedinaBundle:Categorie")->findAll();
        return $this->render("PidevSoukelmedinaBundle:Categorie:list.html.twig",array('categories'=>$categories));
    }

    public function deleteAction(Request $request,$idCat) {
        $categorie=new Categorie();
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository("PidevSoukelmedinaBundle:Categorie")->find($idCat);
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute("pidev_soukelmedina_listC");

    }
    public function updateAction(Request $request,$idCat){

        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository("PidevSoukelmedinaBundle:Categorie")->find($idCat);
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute("pidev_soukelmedina_listC");
        }
        return $this->render("PidevSoukelmedinaBundle:Categorie:update.html.twig",array('form'=>$form->createView())
        );
    }

    public function categorieFrontAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie= $em->getRepository(Categorie::class)->find($id);
        $produits = $em->getRepository(Produit::class)->findBy([
            'categorie'=>$categorie
        ]);

        return $this->render("PidevSoukelmedinaBundle:Categorie:front_categorie.html.twig",[
            'category'=>$categorie,
            'produits'=>$produits
        ]);
    }

}