<?php

class UrlToTitleConverterTest extends \Codeception\TestCase\WPTestCase{
   
    /**
     * @test
     * it should be instantiatable
     */
    public function it_should_be_instantiatable(){
        $UrlToTitleConverter = new ContentPortfolio\cUrlProcessor();

    }
    
}   