<?php
declare(strict_types=1);
namespace Maison\Ltsv;

use PHPUnit\Framework\TestCase;

final class LtsvTest extends TestCase
{
    public function testClass() {
        $this->assertSame(get_class(new \Maison\Ltsv\Ltsv()), 'Maison\Ltsv\Ltsv');
    }
}
