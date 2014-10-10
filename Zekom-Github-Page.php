<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Zekom-Github-List
 *
 * @author zwz
 */

class ZekomGithubPage {
    public $URL="https://github.com/Zekom/MonoGame";
    //public $Subdir 
    public $Files="";
    public function GetFiles()
    {
        $HTMLContent=file_get_contents($this->URL);
        //echo $HTMLContent;
        $FilesStartHTML="<table class=\"files\"";
        $FilesEndHTML="</table>";        
        $IndexStart=  strpos($HTMLContent, $FilesStartHTML, 0);
        echo $IndexStart;echo "</br>";
        $IndexEnd= strpos($HTMLContent, $FilesEndHTML, $IndexStart)+strlen($FilesEndHTML);
        echo $IndexEnd;echo "</br>";        
        $this->Files=  substr($HTMLContent, $IndexStart, $IndexEnd-$IndexStart);    
        return (strlen($this->Files)>0)?strlen($this->Files):-1;
    }       
}

$ZPage=new ZekomGithubPage();
$ZPage->GetFiles();
//echo $ZPage->Files;

// PHP manual : http://php.net/manual/en/function.readdir.php

if ($handle = opendir('./')) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n";
    }

    closedir($handle);
}

// PHP manual : http://php.net/manual/en/function.scandir.php

$dir    = '/';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>

?>


