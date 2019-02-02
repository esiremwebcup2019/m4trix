<?php

/**
 * @Entity @Table(name="reservations")
 **/

class Reservation
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $nom;

    /** @Column(type="string") **/
    protected $prenom;

    /** @Column(type="string") **/
    protected $demande;

    /** @Column(type="integer") **/
    protected $invite;

    /** @Column(type="string") **/
    protected $telephone;

    /** @Column(type="string") **/
    protected $mail;

    /** @Column(type="string") **/
    protected $date_debut;

    /** @Column(type="string") **/
    protected $date_fin;



    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($name)
    {
        $this->nom = $name;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($name)
    {
        $this->prenom = $name;
    }

    public function getDemande()
      {
          return $this->demande;
      }

    public function setDemande($name)
    {
          $this->demande = $name;
    }

    public function getInvite()
    {
            return $this->invite;
    }

    public function setInvite($name)
    {
        $this->invite = $name;
    }

   public function getTelephone()
    {
        return $this->telephone;
    }

  public function setTelephone($name)
  {
              $this->telephone = $name;
  }
  public function getMail()
  {
          return $this->mail;
  }

  public function setMail($name)
  {
                $this->mail = $name;
  }

  public function getDateDebut()
  {
            return $this->date_debut;
  }

  public function setDateDebut($name)
  {
            $this->date_debut = $name;
  }
  public function getDateFin()
  {
        return $this->$date_fin;
  }

  public function setDateFin($name)
  {
        $this->date_fin = $name;
  }

}


 ?>
