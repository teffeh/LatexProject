<?php
namespace Latex;

class FileBuilder
{

    private $shell_exec_return;
    private $name;
    private $input;
    private $loadedFile;

    public function __construct($name, $input)
    {
        $this->name = $name . ".tex";
        $this->input = $input;
//        $this->saveFile();
    }

    public function saveFile()
    {
        file_put_contents('Output/' . $this->name, $this->input, LOCK_EX);
    }

    public function loadFile($file)
    {
        $this->loadedFile = file_get_contents("Output/" . $file);

        return $this->loadedFile;
    }

    public function convert()
    {
        $this->shell_exec_return =
            shell_exec(
                'chdir C:/Users/Teffeh/PhpstormProjects/LatexProject/Output & C:/Users/Teffeh/PhpstormProjects/LatexProject/miktex/bin/pdflatex.exe "C:/Users/Teffeh/PhpstormProjects/LatexProject/Output/'
                . $this->name
                . '"'
                . ' -output-directory C:/Users/Teffeh/PhpstormProjects/LatexProject/Output 2>&1'
            );

        return $this->shell_exec_return;
    }

}
