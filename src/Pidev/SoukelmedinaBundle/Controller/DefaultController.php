<?php

namespace Pidev\SoukelmedinaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevSoukelmedinaBundle:Default:index.html.twig');
    }
    public function testAction(){
        return $this->render('PidevSoukelmedinaBundle:Default:test.html.twig');
    }
    public function testbackAction(){
        return $this->render('PidevSoukelmedinaBundle:Default:testback.html.twig');
    }
    public function aboutAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:about.html.twig');
    }
    public function blogAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:blog.html.twig');
    }
    public function blog_singleAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:blog_single.html.twig');
    }
    public function blog_three_columnAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:blog_three_column.html.twig');
    }
    public function blog_two_columnAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:blog_two_column.html.twig');
    }
    public function contactAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:contact.html.twig');
    }
    public function galleryAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:gallery.html.twig');
    }
    public function gallery_3_columnAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:gallery_3_column.html.twig');
    }
    public function gallery_4_columnAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:gallery_4_column.html.twig');
    }
    public function gallery_fullwidthAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:gallery_fullwidth.html.twig');
    }
    public function home_style1Action(){
        return $this->render('PidevSoukelmedinaBundle:front-office:home_style1.html.twig');
    }
    public function home_style2Action(){
        return $this->render('PidevSoukelmedinaBundle:front-office:home_style2.html.twig');
    }
    public function home_style3Action(){
        return $this->render('PidevSoukelmedinaBundle:front-office:home_style3.html.twig');
    }
    public function servicesAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:services.html.twig');
    }
    public function actualiteAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:actualite.html.twig');
    }
    public function boutiqueAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:boutique.html.twig');
    }
    public function artisanAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:artisan.html.twig');
    }
    public function shopAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:shop.html.twig');
    }
    public function shop_singleAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:shop_single.html.twig');
    }
    public function erreurAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:404.html.twig');
    }
    public function categorieAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:categorie.html.twig');
    }
    public function categorie1Action(){
        return $this->render('PidevSoukelmedinaBundle:front-office:categorie1.html.twig');
    }
    public function categorie2Action(){
        return $this->render('PidevSoukelmedinaBundle:front-office:categorie2.html.twig');
    }
    public function categorie3Action(){
    return $this->render('PidevSoukelmedinaBundle:front-office:categorie3.html.twig');
}
    public function evenementAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:evenement.html.twig');
    }
    public function profileAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:profile.html.twig');
    }
    public function ForumAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:Forum.html.twig');
    }
    public function pannierAction(){
        return $this->render('PidevSoukelmedinaBundle:front-office:pannier.html.twig');
    }



    public function iconsAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:icons.html.twig');
    }
    public function mapsAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:maps.html.twig');
    }
    public function notificationsAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:notifications.html.twig');
    }
    public function tableAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:table.html.twig');
    }
    public function templateAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:template.html.twig');
    }
    public function typographyAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:typography.html.twig');
    }
    public function upgradeAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:upgrade.html.twig');
    }
    public function userAction()
    {
        return $this->render('PidevSoukelmedinaBundle:back:user.html.twig');
    }
}
