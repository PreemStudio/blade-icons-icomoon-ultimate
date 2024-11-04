<?php

declare(strict_types=1);

namespace BaseCodeOy\BladeIcons\IcoMoonUltimate;

use BaseCodeOy\BladeIcons\Facades\IconFamilyRegistry;
use BaseCodeOy\BladeIcons\IconFamily;
use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Support\Facades\File;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $directory = resource_path('blade-icons/icomoon-ultimate');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('icomoon-ultimate', $directory));
        }
    }
}
