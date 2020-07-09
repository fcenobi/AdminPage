<?php
class Costumers
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'Option#',
            'type' => 'Type',
            'name' => 'Name',
            'cost' => 'Cost/Direct',
            'hrs' => 'Hours',
            'weight' => 'Weight',
            'content' => 'Shopping Content Site'
        ];

        return $ordering;
    }
}
?>
