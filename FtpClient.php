<?php

namespace tests\units\FtpClient;
#=======================
use
    mageekguy\atoum,
    FtpClient\FtpClient as TestedClass;
#=======================
class FtpClient extends atoum\test{
    public function test__construct(){
        $this->given($ftp = new TestedClass())->object($ftp)->isInstanceOf('\FtpClient\FtpClient');
    }
}
