<?php

        // class TitleCaseGenerator
        // {
            // function makeTitleCase($input_title)
            // {
            //     return ucfirst($input_title);
            // }

            // function makeTitleCase($input_title)
            // {
            //     $input_array_of_words = explode(" ", $input_title);
            //     $output_titlecased = array();
            //     foreach ($input_array_of_words as $word)
            // {
            //         array_push($output_titlecased, ucfirst($word));
            // }
            //     return implode(" ", $output_titlecased);
            // }
        //     function makeTitleCase($input_title)
        //     {
        //         $input_title = strtolower($input_title);
        //         $input_array_of_words = explode(" ", $input_title);
        //         $output_titlecased = array();
        //         // add first word as capitalized
        //         array_push($output_titlecased, ucfirst($input_array_of_words[0]));
        //         $notcaps = array("a", "to", "be", "by", "the", "or", "is");
        //         for ($i = 1; $i < count($input_array_of_words) -1; $i++)
        //         {
        //             if (in_array($input_array_of_words[$i], $notcaps))
        //             {
        //                 array_push($output_titlecased, $input_array_of_words[$i]);
        //             } else {
        //                 array_push($output_titlecased, ucfirst($input_array_of_words[$i]));
        //             }
        //         }
        //         // add final word as capitalized
        //         array_push($output_titlecased, ucfirst($input_array_of_words[count($input_array_of_words) -1]));
        //         return implode(" ", $output_titlecased);
        //     }
        // }

        class TitleCaseGen
{
    public $notcap = ["a","the","of","is","or","by","be","at"];

    function makeTitleCase($input_title)
    {
        $input_title = strtolower($input_title);
        $input_title = ucwords($input_title);
        $input_array = explode(" ", $input_title);
        for ($i = 1; $i < count($input_array) -1; $i++)
            {
                if(in_array(strtolower($input_array[$i]), $this->notcap)){
                    $input_array[$i] = strtolower($input_array[$i]);
                }
            }
        $input_title = implode(" ", $input_array);
        return $input_title;
    }


 }



?>
