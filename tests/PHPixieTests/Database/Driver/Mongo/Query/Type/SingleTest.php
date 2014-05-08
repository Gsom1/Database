<?php
namespace PHPixieTests\Database\Driver\Mongo\Query\Type;

/**
 * @coversDefaultClass \PHPixie\Database\Driver\Mongo\Query\Type\Single
 */
class SingleTest extends \PHPixie\Database\Driver\Mongo\Query\ItemsTest
{
    protected $queryClass = '\PHPixie\Database\Driver\Mongo\Query\Type\Single';
    protected $type = 'single';

    /**
     * @covers ::fields
     * @covers ::getFields
     */
    public function testFields()
    {
        $this->testBuilderMethod('fields', array(array('test')), null, 0,$this->query);
        $this->testBuilderMethod('getFields', array(), null, 1,array('test'), array('test'));
    }

}