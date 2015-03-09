<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase1_oneWord()
    {

        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "beowulf";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase ($input);

        //Assert
        $this->assertEquals("Beowulf", $result);
      }

      function test_makeTitleCase_multipleWords()
      {
          //Arrange
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "the little mermaid";

          //Act
          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          //Assert
          $this->assertEquals("The Little Mermaid", $result);
      }

      function test_makeTitleCase_exceptions()
      {
          //Arrange
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "the little To BE mermaid";

          //Act
          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          //Assert
          $this->assertEquals("The Little to be Mermaid", $result);
      }

    }

?>
