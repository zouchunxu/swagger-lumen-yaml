<?php

namespace Tests;

use YunhanTech\Swagger\Generator;

class GeneratorTest extends LumenTestCase
{
    /** @test */
    public function canGenerateApiJsonFile()
    {
        $this->setPaths();

        Generator::generateDocs();

        $this->assertTrue(file_exists($this->jsonDocsFile()));
    }
}
