<?php

namespace tests\units\FtpClient;

use
    mageekguy\atoum,
    FtpClient\FtpWrapper as TestedClass;

class FtpWrapper extends atoum\test{

    public function test__construct(){
        $conn = null;
        $this->given($wrapper = new TestedClass($conn))->object($wrapper)->isInstanceOf('\FtpClient\FtpWrapper');
    }

    public function test__call(){
        $conn = null;
        $this->given($wrapper = new TestedClass($conn))
                ->exception(function () use ($wrapper) {
                    $wrapper->doNotExist();
                })->isInstanceOf('\FtpClient\FtpException')->isInstanceOf('\Exception')->variable(array($wrapper, 'alloc'))->isCallable();
    }
}
