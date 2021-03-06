<?php

/**
 * BaseLeaveAdjustment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                   $id                                                Type: integer(4), primary key
 * @property int                   $emp_number                                        Type: integer(7)
 * @property float                 $no_of_days                                        Type: decimal(6)
 * @property int                   $leave_type_id                                     Type: integer(4)
 * @property string                $from_date                                         Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                $to_date                                           Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                $credited_date                                     Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                $note                                              Type: string(255)
 * @property int                   $adjustment_type                                   Type: integer(4), default "0"
 * @property int                   $deleted                                           Type: integer(1), default "0"
 * @property int                   $created_by_id                                     Type: integer(10)
 * @property string                $created_by_name                                   Type: string(255)
 * @property LeaveType             $LeaveType                                         
 * @property Employee              $Employee                                          
 * @property SystemUser            $SystemUser                                        
 * @property LeaveEntitlementType  $LeaveEntitlementType                              
 *  
 * @method int                     getId()                                            Type: integer(4), primary key
 * @method int                     getEmpNumber()                                     Type: integer(7)
 * @method float                   getNoOfDays()                                      Type: decimal(6)
 * @method int                     getLeaveTypeId()                                   Type: integer(4)
 * @method string                  getFromDate()                                      Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                  getToDate()                                        Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                  getCreditedDate()                                  Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                  getNote()                                          Type: string(255)
 * @method int                     getAdjustmentType()                                Type: integer(4), default "0"
 * @method int                     getDeleted()                                       Type: integer(1), default "0"
 * @method int                     getCreatedById()                                   Type: integer(10)
 * @method string                  getCreatedByName()                                 Type: string(255)
 * @method LeaveType               getLeaveType()                                     
 * @method Employee                getEmployee()                                      
 * @method SystemUser              getSystemUser()                                    
 * @method LeaveEntitlementType    getLeaveEntitlementType()                          
 *  
 * @method LeaveAdjustment         setId(int $val)                                    Type: integer(4), primary key
 * @method LeaveAdjustment         setEmpNumber(int $val)                             Type: integer(7)
 * @method LeaveAdjustment         setNoOfDays(float $val)                            Type: decimal(6)
 * @method LeaveAdjustment         setLeaveTypeId(int $val)                           Type: integer(4)
 * @method LeaveAdjustment         setFromDate(string $val)                           Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method LeaveAdjustment         setToDate(string $val)                             Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method LeaveAdjustment         setCreditedDate(string $val)                       Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method LeaveAdjustment         setNote(string $val)                               Type: string(255)
 * @method LeaveAdjustment         setAdjustmentType(int $val)                        Type: integer(4), default "0"
 * @method LeaveAdjustment         setDeleted(int $val)                               Type: integer(1), default "0"
 * @method LeaveAdjustment         setCreatedById(int $val)                           Type: integer(10)
 * @method LeaveAdjustment         setCreatedByName(string $val)                      Type: string(255)
 * @method LeaveAdjustment         setLeaveType(LeaveType $val)                       
 * @method LeaveAdjustment         setEmployee(Employee $val)                         
 * @method LeaveAdjustment         setSystemUser(SystemUser $val)                     
 * @method LeaveAdjustment         setLeaveEntitlementType(LeaveEntitlementType $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLeaveAdjustment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_adjustment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'autoincrement' => false,
             'length' => 7,
             ));
        $this->hasColumn('no_of_days', 'decimal', 6, array(
             'type' => 'decimal',
             'scale' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('leave_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('from_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('to_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('credited_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('note', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('adjustment_type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'default' => '0',
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('deleted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('created_by_id', 'integer', 10, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('created_by_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('LeaveType', array(
             'local' => 'leave_type_id',
             'foreign' => 'id'));

        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('SystemUser', array(
             'local' => 'created_by_id',
             'foreign' => 'id'));

        $this->hasOne('LeaveEntitlementType', array(
             'local' => 'adjustment_type',
             'foreign' => 'id'));
    }
}