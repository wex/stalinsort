<?php
declare(strict_types=1);

namespace Stalin;

class Sort
{
    protected   $source = null;

    public function __construct(array $data)
    {
        $this->source = $data;
    }

    public function sort()
    {
        if (!count($this->source)) return;
        
        $result = $this->source;
        $max    = $result[0];

        foreach ($result as $i => $entry) {
            if ($entry < $max) {
                unset($result[$i]);
            } else {
                $max = $entry;
            }
        }

        return array_values($result);
    }

    public function asort()
    {
        if (!count($this->source)) return;
        
        $result = $this->source;
        $max    = $result[0];

        foreach ($result as $i => $entry) {
            if ($entry < $max) {
                unset($result[$i]);
            } else {
                $max = $entry;
            }
        }

        return $result;
    }
}