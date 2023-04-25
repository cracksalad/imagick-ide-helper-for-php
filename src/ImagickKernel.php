<?php

/**
 * @author Andreas Wahlen
 */
class ImagickKernel {
  
    public function addKernel(ImagickKernel $kernel): void {}

    public function addUnityKernel(float $scale): void {}

    /**
     * @psalm-param Imagick::KERNEL_* $kernel
     */
    public static function fromBuiltin(int $kernel, string $shape): ImagickKernel {}

    public static function fromMatrix(array $matrix, ?array $origin): ImagickKernel {}

    public function getMatrix(): array {}

    /**
     * @psalm-param Imagick::NORMALIZE_KERNEL_* $normalize_kernel
     */
    public function scale(float $scale, ?int $normalize_kernel = null): void {}

    public function separate(): array {}
}
