<?php

declare(strict_types=1);

namespace Maison\Ltsv;

use PHPUnit\Framework\TestCase;

final class LtsvTest extends TestCase
{
    public function testClass(): void
    {
        $this->assertInstanceOf(Ltsv::class, new Ltsv());
    }
}
