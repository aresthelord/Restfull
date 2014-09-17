<?php



/**
 * The IRepository class is an Interface class that is used for 
 * all repositories
 *
 *
 * @version   0.01
 * @since     2014-14-09
 * @author    Deniz Demirci <denizdemirci@yamail.com>
 */
interface IRepository {

    /**
     * Returns      total number of elemnts in this repository
     * @return      int
     * @throws      InvalidArgumentException
     * @since       2014-14-09
     * @author      Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function count();

    /**
     * Creates element type of $entity in db
     * @return      boolean
     * @since       2014-14-09
     * @author      Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function create($entity);

    /**
     * Updates element type of $entity in db
     * @return  boolean
     * @since     2014-14-09
     * @author    Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function edit($entity);

    /**
     * gets element type of $entity in db
     * @return      object of type $entity
     * @param       int $id the id of the entity to get
     * @since       2014-14-09
     * @author      Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function find($id);

    /**
     * gets all elements type of $entity in db
     * @return      array of object of type $entity
     * @since       2014-14-09
     * @author      Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function findAll();

    /**
     * gets all elements between specified range 
     * @param       array $range [0,20] e.g.
     * @return      array of object of type $entity
     * @since       2014-14-09
     * @author      Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function findRange($range);

    /**
     * deletes element from  db
     * @param       object $entity
     * @return      boolean
     * @since       2014-14-09
     * @author      Deniz Demirci <denizdemirci@yamail.com>
     *
     */
    public function remove($entity);
}
