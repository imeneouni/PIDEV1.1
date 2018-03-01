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
use Pidev\SoukelmedinaBundle\Entity\rating;
use Pidev\SoukelmedinaBundle\Form\CategorieType;
use Pidev\SoukelmedinaBundle\Form\ProduitType;
use Pidev\SoukelmedinaBundle\Form\ratingType;
use Pidev\SoukelmedinaBundle\PidevSoukelmedinaBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProduitController extends Controller
{

    public function listFrontAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findAll();
        return $this->render("PidevSoukelmedinaBundle:Produit:front_list.html.twig",array(
            'produits'=>$produits
        ));
    }


    public function ajoutAction(Request $request)
    {
        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("pidev_soukelmedina_listP");
        }
        return $this->render("PidevSoukelmedinaBundle:Produit:ajout.html.twig",array(
            'form'=>$form->createview()
        ));
    }

    public function listAction() {
        $em=$this->getDoctrine()->getManager();

        $produits=$em->getRepository("PidevSoukelmedinaBundle:Produit")->findAll();


        return $this->render("PidevSoukelmedinaBundle:Produit:list.html.twig",array('produits'=>$produits));

    }


    public function deleteAction(Request $request,$idProduit) {
        $produit=new Produit();
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository("PidevSoukelmedinaBundle:Produit")->find($idProduit);
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute("pidev_soukelmedina_listP");

    }
    public function updateAction(Request $request,$idProduit){

        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository("PidevSoukelmedinaBundle:Produit")->find($idProduit);
        $form=$this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("pidev_soukelmedina_listP");
        }
        return $this->render("PidevSoukelmedinaBundle:Produit:update.html.twig",array('form'=>$form->createView())
        );
    }


    public function updateRatingAction(Request $request){
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository(Produit::class)->find($id);
        $reviews = $em->getRepository(rating::class)->findBy(array('produit'=>$product));

        $totalWeight = 0;

        //$ratings = array_column($reviews, 'rating');

        $ratings = array_map(function($element) {
            return $element->getRating();
        },
            $reviews
        );
        $ratings = array_count_values($ratings);

        foreach ($ratings as $rating => $count){
            if($rating != null)
                $totalWeight += $rating*$count;
        }



        $averageRating = (integer)round($totalWeight/count($reviews));

        $product->setRating($averageRating);
        $em->persist($product);
        $em->flush();
        var_dump($averageRating);
        return new Response($averageRating);
    }

    /*public function removeReviewAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->findOneBy(array('idProduit'=>$request->get('product_id')));
        $review = $em->getRepository(rating::class)->findOneBy(array('produit'=>$produit, 'user'=>$this->getUser()));
        $em->remove($review);
        $em->flush();
        return $this->redirectToRoute("product_detail_page",
            array('id'=>1));
    }*/

    public function productDetailAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->findOneBy(array('idProduit'=>$request->get('id')));

        //did the user rate this product ??

        $rating = $em->getRepository(rating::class)
            ->findOneBy(array('produit'=>$produit, 'user'=>$this->getUser()));

        if(empty($rating))
            $rating = new rating();

        $reviews = $em->getRepository(rating::class)->findBy(array('produit'=>$produit));

        $form=$this->createForm(ratingType::class,$rating);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            $rating->setProduit($produit);
            $rating->setUser($this->getUser());
            $em->persist($rating);
            $em->flush();

            // update the rating in the product
            //$res = $this->forward('PidevSoukelmedinaBundle:Produit:updateRating', array('id'=>$request->get('id')));



            $totalWeight = 0;

            //$ratings = array_column($reviews, 'rating');

            $ratings = array_map(function($element) {
                return (int)$element->getRating();
            },
                $reviews
            );
            $ratings = array_count_values($ratings);

            foreach ($ratings as $rating => $count){
                if($rating != null)
                    $totalWeight += $rating*$count;
            }

            $averageRating = (int)round($totalWeight/count($reviews));

            $produit->setRating($averageRating);
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute("product_detail_page",
                array('id'=>$produit->getIdProduit()));
        }


        return $this->render("PidevSoukelmedinaBundle:Produit:productDetail.html.twig",
            array('produit'=>$produit, 'ratings'=>$reviews,
                'form'=>$form->createView())
        );
    }


    public function produitFrontAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit= $em->getRepository(Produit::class)->find($id);
        $produits = $em->getRepository(Produit::class)->findBy([
            'produit'=>$produit
        ]);

        return $this->render("PidevSoukelmedinaBundle:Produit:front_produit.html.twig",[
            'produit'=>$produit,
            'produits'=>$produits
        ]);
    }

}