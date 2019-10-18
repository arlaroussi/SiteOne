<?php

namespace RL\SLAMBundle\Controller;

use RL\SLAMBundle\Entity\Candidat;  
use RL\SLAMBundle\Entity\Specialite;

use RL\SLAMBundle\Repository\CandidatRepository;

use RL\SLAMBundle\Form\CandidatType;
use RL\SLAMBundle\Form\ConnexionType;
use RL\SLAMBundle\Form\SpecialiteType;

use Doctrine\ORM\EntityManager;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CandidatController extends Controller {

    public function addCandAction($id) {
         return $this->render('RLSLAMBundle:Candidat:viewCand.html.twig',array('id'=>$id));    
    }

    public function addSpecAction($id) {
         return $this->render('RLSLAMBundle:Candidat:viewSpec.html.twig',array('id'=>$id));    
    }
    
    public function showAction($val) {

        $repo_cand =  $this->getDoctrine()->getRepository('RLSLAMBundle:Candidat');

        // Recherche d'un tuple par numéro d'id        
        $resultcand = $repo_cand->find($val);

        return new Response('Le candidat concerné '.$resultcand->getNom());

    }

        public function RetourListe($id, $nom) {

        $repo_cand =  $this->getDoctrine()->getRepository('RLSLAMBundle:Candidat');

        // Recherche d'un tuple par numéro d'id        
        $liste = $repo_cand->findBy(array('id'=>$id, 'nom'=>$nom));

        return $liste;
    }
    
    public function listeAction() {

        $repo_cand =  $this->getDoctrine()->getRepository('RLSLAMBundle:Candidat');

        // Recherche de plusieurs tuples selon un ou plusieurs critères
        $listeCand = $repo_cand->findBy(array('age'=> 10), array('nom'=>'DESC'), 5,0);
        //$liste = $repo_cand->findAll();

        return $this->render('RLSLAMBundle:Candidat:liste.html.twig',array('resultats' => $listeCand));
    }

    public function updateAction($id) {

        $em = $this->getDoctrine()->getManager();
        $repo_cand =  $em->getRepository('RLSLAMBundle:Candidat');
        
        // Recherche de la ligne concerné
        $result = $repo_cand->find($id);

        $result->setPrenom('Reda');
        $em->flush();

        return $this->render('RLSLAMBundle:Candidat:update.html.twig',array('id' => $result->getId()));
    }
    
  public function formCandAction(Request $query)
  {
    // On crée un objet Candidat
    $cand = new Candidat();

    // $form = $this->get('form.factory')->createBuilder(FormType::class, $cand)
    
    $form = $this->createForm(CandidatType::class, $cand);
    
    if ($query->isMethod('POST')) {

      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $cand contient les valeurs entrées dans le formulaire par le candidat

      $form->handleRequest($query);

      // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

      if ($form->isValid()) {

        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($cand);
        $em->flush();

        $query->getSession()->getFlashBag()->add('notice', 'Candidat enregistré.');

        // On redirige vers la page de visualisation du candidat créé
        return $this->redirectToRoute('rlslam_homepage_1', array('id' => $cand->getId()));
      }
    }

    // Erreur dans le formulaire => retour vers ce dernier
           
             return $this->render('RLSLAMBundle:Candidat:_candidat.html.twig',array('form'=>$form->createView(),));
    }
 
    
  public function formSpecAction(Request $query)
  {
    // On crée un objet Candidat
    $spec = new Specialite();

    // $form = $this->get('form.factory')->createBuilder(FormType::class, $cand)
    
    $form = $this->createForm(SpecialiteType::class, $spec);
    
    if ($query->isMethod('POST')) {

      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $cand contient les valeurs entrées dans le formulaire par le candidat

      $form->handleRequest($query);

      // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

      if ($form->isValid()) {

        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($spec);
        $em->flush();

        $query->getSession()->getFlashBag()->add('notice', 'Spécialité enregistrée');

        // On redirige vers la page de visualisation de la spécialité créée
        return $this->redirectToRoute('rlslam_homepage_1bis', array('id' => $spec->getId()));
      }
    }

    // Erreur dans le formulaire => retour vers ce dernier
           
             return $this->render('RLSLAMBundle:Candidat:_specialite.html.twig',array('form'=>$form->createView(),));
    }
 
    
    public function authentifAction(Request $query)   {
        
         $form = $this->createForm(ConnexionType::class);
         
        //$form = $this->createFormBuilder($param)->getForm();
        /*
            $login = $password = null;
            
            $form = $this->get('form.factory')->createBuilder(FormType::class)
            ->add('login', TextType::class, array('label'=>'Entrer votre login'))
            ->add('password',      PasswordType::class, array('label'=>'Entrer votre mot de passe'))
            ->add('save',      SubmitType::class, array('label'=>'Valider'))
            ->getForm();
       

    if ($query->isMethod('POST')) {
        $form->handleRequest($query);
    }

         *
         */
        return $this->render('RLSLAMBundle:Candidat:authentif.html.twig', array('form'=>$form->createView(),));
    }

public function register(UserPasswordEncoderInterface $encoder)
{
    // whatever *your* User object is
    $user = new App\Entity\User();
    $plainPassword = 'ryanpass';
    $encoded = $encoder->encodePassword($user, $plainPassword);

    $user->setPassword($encoded);
}




function rechercherListeAction() {
    
    $em = $this->getDoctrine()->getManager();
    
    $valeur = $em->getRepository("RLSLAMBundle:Candidat")->listerCandidatbis();    
 
    return $this->render('RLSLAMBundle:Candidat:listeRepobis.html.twig',array('result'=>$valeur));
}

function candSpecAction($id) {
    
    $em = $this->getDoctrine()->getManager();
    
    $valeur = $em->getRepository("RLSLAMBundle:Candidat")->rechercherParSpec($id);   
    
    return $this->render('RLSLAMBundle:Candidat:listeRepo.html.twig',array('result'=>$valeur));
}

function compterParSpecAction() {
    
    $em = $this->getDoctrine()->getManager();
    
    $valeur = $em->getRepository("RLSLAMBundle:Candidat")->compterSpec();
    
    return $this->render('RLSLAMBundle:Candidat:compterRepo.html.twig',array('result'=>$valeur));
}

function supprimerCandAction($nom,$prenom) {
    
    $em = $this->getDoctrine()->getManager();
    
    $valeur = $em->getRepository("RLSLAMBundle:Candidat")->delete($nom,$prenom);
    
    //return $this->render('RLSLAMBundle:Candidat:compterRepo.html.twig',array('result'=>$valeur));
    
    return new Response('Candidat supprimé de la base');
    
}
} //Fin de la classe Repository

    
