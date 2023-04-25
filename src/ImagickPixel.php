<?php

/**
 * @author Andreas Wahlen
 */
class ImagickPixel {
  
  public function __construct(?string $color = null) {}
  
  public function clear(): bool {}
  
  /** @alias ImagickPixel::clear */
  public function destroy(): bool {}
  
  public function getColor(int $normalized = 0): array {}
  
  public function getColorAsString(): string {}
  
  public function getColorCount(): int {}
  
  public function getColorQuantum(): array {}
  
  /**
   * @psalm-param Imagick::COLOR_* $color
   */
  public function getColorValue(int $color): float {}
  
  /**
   * @psalm-param Imagick::COLOR_* $color
   */
  public function getColorValueQuantum(int $color): float|int {}
  
  public function getHSL(): array {}
  
  public function getIndex(): int {}
  
  public function isPixelSimilar(ImagickPixel|string $color, float $fuzz): bool {}
  
  public function isPixelSimilarQuantum(ImagickPixel|string $color, float $fuzz_quantum_range_scaled_by_square_root_of_three): bool {}
  
  /**
   * @param float $fuzz_quantum_range_scaled_by_square_root_of_three Feel free to not use named params for this.
   * @alias ImagickPixel::isPixelSimilarQuantum
   */
  public function isSimilar(ImagickPixel|string $color, float $fuzz_quantum_range_scaled_by_square_root_of_three): bool{}
      
  public function setColor(string $color): bool {}
  
  public function setColorCount(int $color_count): bool {}
  
  /**
   * @psalm-param Imagick::COLOR_* $color
   */
  public function setColorValue(int $color, float $value): bool {}
  
  /**
   * @psalm-param Imagick::COLOR_* $color
   */
  public function setColorValueQuantum(int $color, float|int $value): bool{}
  
  public function setHSL(float $hue, float $saturation , float $luminosity): bool{}
  
  public function setIndex(float|int $index): bool {}
  
  public function setColorFromPixel(ImagickPixel $pixel): bool {}
}
