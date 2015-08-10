<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $input_array = array();
            for ($i = 1; $i <= $input_number; $i++)
            {
                array_push($input_array, $i);
            }

            return $input_array;

        }

    }
 ?>
