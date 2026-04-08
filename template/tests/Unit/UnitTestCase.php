<?php

declare(strict_types=1);

namespace {{ toPascalCase Vendor }}\{{ toPascalCase PackageName }}\Tests\Unit;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
{{- if AddSnapshotLib }}
use Spatie\Snapshots\MatchesSnapshots;
{{- end }}

abstract class UnitTestCase extends PHPUnitTestCase
{
    use MockeryPHPUnitIntegration;
    {{- if AddSnapshotLib }}
    use MatchesSnapshots;

    protected function assertSnapshotShouldBeCreated(string $snapshotFileName): void
    {
        if ($this->shouldCreateSnapshots()) {
            return;
        }
        static::fail(
            "Snapshot \"$snapshotFileName\" does not exist.\n" .
            "You can automatically create it by running \"composer update-test-snapshots\".\n" .
            'Make sure to inspect the created snapshot afterwards to ensure its correctness!',
        );
    }
    {{- end}}
}
