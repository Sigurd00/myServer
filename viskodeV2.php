<?php
   function highlight_file_with_line_numbers($file) {
        //Removes _k from filename
        $file_k = substr($file, 0, -6).'.'.substr($file, -3);
        //Strip code and first span
        $code = substr(highlight_file($file, true), 36, -15);
        //Split lines
        $lines = explode('<br />', $code);
        //Count
        $lineCount = count($lines);
        //Calc pad length
        $padLength = strlen($lineCount);
        //Re-Print the code and span again
        echo "<table style=\"border: solid 1px; width: 800px;\">";
        echo "<tr><td><code style=\"background-color: #FFFFCC; display: block;\"><span style=\"color: #000000\">";
        echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Her koden til filen -> ".$file." </b><br>"; 
        // herover skrives overskriften (lav $file om til $file_k hvis linie 4 skal bruges)
        //Loop lines
        foreach($lines as $i => $line) {
            //Create line number
            $lineNumber = str_pad($i + 1,  $padLength, '0', STR_PAD_LEFT);
            //Print line
            if ($lineNumber % 2 == 0){
            echo sprintf('<br><span style="color: #999999;">&nbsp;  %s | </span>%s  &nbsp;', $lineNumber, $line);
            }else{
            echo sprintf('<br><span style="color: #999999;">&nbsp;  %s | </span>%s  &nbsp;', $lineNumber, $line);
            }
        }
        //Close span
        echo "</span><br><br></code>";
        echo "</td></tr></table>";
    }
?>