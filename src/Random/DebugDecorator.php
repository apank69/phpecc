<?php

namespace Mdanter\Ecc\Random;

class DebugDecorator implements RandomNumberGeneratorInterface
{
    /**
     * @var RandomNumberGeneratorInterface
     */
    private $generator;

    /**
     * @var string
     */
    private $generatorName;

    /**
     * @param RandomNumberGeneratorInterface $generator
     * @param string $name
     */
    public function __construct(RandomNumberGeneratorInterface $generator, $name)
    {
        $this->generator = $generator;
        $this->generatorName = $name;
    }

    /**
     * @param \GMP $max
     * @return \GMP
     */
    public function generate(\GMP $max)
    {
        echo $this->generatorName.'::rand() = ';

        $result = $this->generator->generate($max);

        echo $result.PHP_EOL;

        return $result;
    }
}
