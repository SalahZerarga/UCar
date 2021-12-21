<?php

use Doctrine\Common\Collections\ArrayCollection;
/** @Entity
* @Table(name= "reservation")
*/
class reservation{

    /** @column(type="integer")
    * @Id 
    * @GeneratedValue 
    */
    public $id;

    /** 
     * @ManyToOne(targetEntity="voyage")
     * @JoinColumn(name="voyage, referencedColumnName ="id")
     */
    public $voyage;

    /** 
     * @ManyToOne(targetEntity="voyageur")
     * @JoinColumn(name="voyageur, referencedColumnName =''id'')
     */
    public $voyageur;


}

?>
