<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity
* @Table(name= "voyage")
*/
class voyage{

    /** @column(type="integer")
    * @Id 
    * @GeneratedValue 
    */
    public $id;

    /** @ManyToOne(targetEntity="utilisateur")
    *@JoinColumn(name="conducteur", referencedColumnName ="id")
    */
    public $conducteur;
    
    /** @ManyToOne(targetEntity="trajet")
    *@JoinColumn(name="trajet", referencedColumnName ="id")
    */
    public $trajet;

    /** @column(type="integer")
    */
    public $tarif;
    
    /** @column(type="integer")
    */
    public $nbPlace;

    /** @column(type="integer")
    */
    public $heureDepart;

    /** @column(type="string",length="600")
    */
    public $contraintes;


}