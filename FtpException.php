<?php
namespace tests\units\FtpClient;
use
    mageekguy\atoum,
    FtpClient\FtpException as TestedClass;
    
class FtpException extends atoum\test{
    public function test__instance(){
        $ftp = new \FtpClient\FtpClient();

        $this->given($e = new TestedClass())->object($e)->isInstanceOf('\FtpClient\FtpException')->isInstanceOf('\Exception')->exception(
            function () use ($ftp) {
            $ftp->doNotExist();
                })->isInstanceOf('\FtpClient\FtpException')->isInstanceOf('\Exception');
    }
}
