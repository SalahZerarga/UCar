<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity
 * @Table(name="jabaianb.trajet")
*/
class trajet{

    /** @column(type="integer")
    * @Id 
    * @GeneratedValue 
    */
    public $id;

    /** @column(type="string",length=25)
    */
    public $depart;
    
    /** @column(type="string",length=25)
    */
    public $arrivee;

    /** @column(type="integer")
    */
    public $distance;

}