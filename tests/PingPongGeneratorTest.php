<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makePingPong_singleNumber()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1), $result);
        }

        function test_makePingPong_numberArray()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 4;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1, 2, 3, 4), $result);
        }
    }
?>
