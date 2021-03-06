<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgate.proto

namespace Vitess\Proto\Vtgate {

  class ExecuteBatchKeyspaceIdsRequest extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtrpc\CallerID */
    public $caller_id = null;
    
    /**  @var \Vitess\Proto\Vtgate\Session */
    public $session = null;
    
    /**  @var \Vitess\Proto\Vtgate\BoundKeyspaceIdQuery[]  */
    public $queries = array();
    
    /**  @var int - \Vitess\Proto\Topodata\TabletType */
    public $tablet_type = null;
    
    /**  @var boolean */
    public $as_transaction = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtgate.ExecuteBatchKeyspaceIdsRequest');

      // OPTIONAL MESSAGE caller_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "caller_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\CallerID';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE session = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "session";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtgate\Session';
      $descriptor->addField($f);

      // REPEATED MESSAGE queries = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "queries";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Vtgate\BoundKeyspaceIdQuery';
      $descriptor->addField($f);

      // OPTIONAL ENUM tablet_type = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "tablet_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Topodata\TabletType';
      $descriptor->addField($f);

      // OPTIONAL BOOL as_transaction = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "as_transaction";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <caller_id> has a value
     *
     * @return boolean
     */
    public function hasCallerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <caller_id> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function clearCallerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <caller_id> value
     *
     * @return \Vitess\Proto\Vtrpc\CallerID
     */
    public function getCallerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <caller_id> value
     *
     * @param \Vitess\Proto\Vtrpc\CallerID $value
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function setCallerId(\Vitess\Proto\Vtrpc\CallerID $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <session> has a value
     *
     * @return boolean
     */
    public function hasSession(){
      return $this->_has(2);
    }
    
    /**
     * Clear <session> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function clearSession(){
      return $this->_clear(2);
    }
    
    /**
     * Get <session> value
     *
     * @return \Vitess\Proto\Vtgate\Session
     */
    public function getSession(){
      return $this->_get(2);
    }
    
    /**
     * Set <session> value
     *
     * @param \Vitess\Proto\Vtgate\Session $value
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function setSession(\Vitess\Proto\Vtgate\Session $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <queries> has a value
     *
     * @return boolean
     */
    public function hasQueries(){
      return $this->_has(3);
    }
    
    /**
     * Clear <queries> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function clearQueries(){
      return $this->_clear(3);
    }
    
    /**
     * Get <queries> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Vtgate\BoundKeyspaceIdQuery
     */
    public function getQueries($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <queries> value
     *
     * @param \Vitess\Proto\Vtgate\BoundKeyspaceIdQuery $value
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function setQueries(\Vitess\Proto\Vtgate\BoundKeyspaceIdQuery $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <queries>
     *
     * @return \Vitess\Proto\Vtgate\BoundKeyspaceIdQuery[]
     */
    public function getQueriesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <queries>
     *
     * @param \Vitess\Proto\Vtgate\BoundKeyspaceIdQuery $value
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function addQueries(\Vitess\Proto\Vtgate\BoundKeyspaceIdQuery $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <tablet_type> has a value
     *
     * @return boolean
     */
    public function hasTabletType(){
      return $this->_has(4);
    }
    
    /**
     * Clear <tablet_type> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function clearTabletType(){
      return $this->_clear(4);
    }
    
    /**
     * Get <tablet_type> value
     *
     * @return int - \Vitess\Proto\Topodata\TabletType
     */
    public function getTabletType(){
      return $this->_get(4);
    }
    
    /**
     * Set <tablet_type> value
     *
     * @param int - \Vitess\Proto\Topodata\TabletType $value
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function setTabletType( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <as_transaction> has a value
     *
     * @return boolean
     */
    public function hasAsTransaction(){
      return $this->_has(5);
    }
    
    /**
     * Clear <as_transaction> value
     *
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function clearAsTransaction(){
      return $this->_clear(5);
    }
    
    /**
     * Get <as_transaction> value
     *
     * @return boolean
     */
    public function getAsTransaction(){
      return $this->_get(5);
    }
    
    /**
     * Set <as_transaction> value
     *
     * @param boolean $value
     * @return \Vitess\Proto\Vtgate\ExecuteBatchKeyspaceIdsRequest
     */
    public function setAsTransaction( $value){
      return $this->_set(5, $value);
    }
  }
}

