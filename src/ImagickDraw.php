<?php

/**
 * @author Andreas Wahlen
 */
class ImagickDraw {

  public function resetVectorGraphics(): bool {}

  public function getTextKerning(): float {}
  public function setTextKerning(float $kerning): bool {}
  public function getTextInterwordSpacing(): float {}
  
  public function setTextInterwordSpacing(float $spacing): bool {}

  public function getTextInterlineSpacing(): float {}
  public function setTextInterlineSpacing(float $spacing): bool {}
  
  public function __construct() {}
  
  public function setFillColor(ImagickPixel|string $fill_color): bool {}
  
  public function setFillAlpha(float $alpha): bool {}
  
  public function setResolution(float $resolution_x, float $resolution_y): bool {}
  
  public function setStrokeColor(ImagickPixel|string $color): bool {}
  
  public function setStrokeAlpha(float $alpha): bool {}
  
  public function setStrokeWidth(float $width): bool {}
  
  public function clear(): bool {}
  
  public function circle(float $origin_x, float $origin_y, float $perimeter_x, float $perimeter_y): bool {}
      
  public function annotation(float $x, float $y, string $text): bool {}
  
  public function setTextAntialias(bool $antialias): bool {}
  
  public function setTextEncoding(string $encoding): bool {}
  
  public function setFont(string $font_name): bool {}
  
  public function setFontFamily(string $font_family): bool {}
  
  public function setFontSize(float $point_size): bool {}
  
  /**
   * @psalm-param Imagick::STYLE_* $style
   */
  public function setFontStyle(int $style): bool {}
  
  /**
   * @param int $weight font weight (valid range 100-900)
   */
  public function setFontWeight(int $weight): bool {}
  
  public function getFont(): string {}
  
  public function getFontFamily(): string {}
  
  public function getFontSize(): float {}
  
  public function getFontStyle(): int {}
  
  public function getFontWeight(): int {}
  
  /** @alias ImagickDraw::clear */
  public function destroy(): bool {}
  
  public function rectangle(float $top_left_x, float $top_left_y, float $bottom_right_x, float $bottom_right_y): bool {}
  
  public function roundRectangle(float $top_left_x, float $top_left_y, float $bottom_right_x, float $bottom_right_y, float $rounding_x, float $rounding_y): bool {}
  
  public function ellipse(float $origin_x, float $origin_y, float $radius_x, float $radius_y, float $angle_start, float $angle_end): bool {}
  
  public function skewX(float $degrees): bool {}
  
  public function skewY(float $degrees): bool {}
  
  public function translate(float $x, float $y): bool {}
  
  public function line(float $start_x, float $start_y, float $end_x, float $end_y): bool {}
  
  public function arc(float $start_x, float $start_y, float $end_x, float $end_y, float $start_angle, float $end_angle): bool {}

  /**
   * @psalm-param Imagick::PAINT_* $paint
   */
  public function alpha(float $x, float $y, int $paint): bool {}
  
  /**
   * @psalm-param Imagick::PAINT_* $paint
   * @deprecated
   */
  public function matte(float $x, float $y, int $paint): bool {}
  
  public function polygon(array $coordinates): bool {}
  
  public function point(float $x, float $y): bool {}
  
  public function getTextDecoration(): int {}
  
  public function getTextEncoding(): string {}
  
  public function getFontStretch(): int {}

  /**
   * @psalm-param Imagick::STRETCH_* $stretch
   */
  public function setFontStretch(int $stretch): bool {}
  
  public function setStrokeAntialias(bool $enabled): bool {}
  
  /**
   * @psalm-param Imagick::ALIGN_* $align
   */
  public function setTextAlignment(int $align): bool {}
  
  /**
   * @psalm-param Imagick::DECORATION_* $decoration
   */
  public function setTextDecoration(int $decoration): bool {}
  
  public function setTextUnderColor(ImagickPixel|string $under_color): bool {}
  
  public function setViewbox(int $left_x, int $top_y, int $right_x, int $bottom_y): bool {}
  
  public function clone(): ImagickDraw {}
  
  public function affine(array $affine): bool {}
  
  public function bezier(array $coordinates): bool {}
  
  /**
   * @psalm-param Imagick::COMPOSITE_* $composite
   */
  public function composite(int $composite, float $x, float $y, float $width, float $height, Imagick $image): bool {}
              
  /**
   * @psalm-param Imagick::PAINT_* $paint
   */
  public function color(float $x, float $y, int $paint): bool {}
  
  public function comment(string $comment): bool {}
  
  public function getClipPath(): string {}
  
  public function getClipRule(): int {}
  
  public function getClipUnits(): int {}
  
  public function getFillColor(): ImagickPixel {}
  
  public function getFillOpacity(): float {}
  
  public function getFillRule(): int {}
  
  public function getGravity(): int {}
  
  public function getStrokeAntialias(): bool {}
  
  public function getStrokeColor(): ImagickPixel {}
  
  public function getStrokeDashArray(): array {}
  
  public function getStrokeDashOffset(): float {}
  
  public function getStrokeLineCap(): int {}
  
  public function getStrokeLineJoin(): int {}
  
  public function getStrokeMiterLimit(): int {}
  
  public function getStrokeOpacity(): float {}
  
  public function getStrokeWidth(): float {}
  
  public function getTextAlignment(): int {}
  
  public function getTextAntialias(): bool {}
  
  public function getVectorGraphics(): string {}
  
  public function getTextUnderColor(): ImagickPixel {}
  
  public function pathClose(): bool {}
  
  public function pathCurveToAbsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}
  
  public function pathCurveToRelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}
  
  public function pathCurveToQuadraticBezierAbsolute(float $x1, float $y1, float $x_end, float $y): bool {}
  
  public function pathCurveToQuadraticBezierRelative(float $x1, float $y1, float $x_end, float $y): bool {}
  
  public function pathCurveToQuadraticBezierSmoothAbsolute(float $x, float $y): bool {}
  
  public function pathCurveToQuadraticBezierSmoothRelative(float $x, float $y): bool {}
  
  public function pathCurveToSmoothAbsolute(float $x2, float $y2, float $x, float $y): bool {}
  
  public function pathCurveToSmoothRelative(float $x2, float $y2, float $x, float $y): bool {}
  
  public function pathEllipticArcAbsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc, bool $sweep, float $x, float $y): bool {}
                  
  public function pathEllipticArcRelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc, bool $sweep, float $x, float $y): bool {}
                      
  public function pathFinish(): bool {}
  
  public function pathLineToAbsolute(float $x, float $y): bool {}
  
  public function pathLineToRelative(float $x, float $y): bool {}
  
  public function pathLineToHorizontalAbsolute(float $x): bool {}
  
  public function pathLineToHorizontalRelative(float $x): bool {}
  
  public function pathLineToVerticalAbsolute(float $y): bool {}
  
  public function pathLineToVerticalRelative(float $y): bool {}
  
  public function pathMoveToAbsolute(float $x, float $y): bool {}
  
  public function pathMoveToRelative(float $x, float $y): bool {}
  
  public function pathStart(): bool {}
  
  public function polyline(array $coordinates): bool {}
  
  public function popClipPath(): bool {}
  
  public function popDefs(): bool {}
  
  public function popPattern(): bool {}
  
  public function pushClipPath(string $clip_mask_id): bool {}
  
  public function pushDefs(): bool {}
  
  public function pushPattern(string $pattern_id, float $x, float $y, float $width, float $height): bool {}
                          
  public function render(): bool {}
  
  public function rotate(float $degrees): bool {}
  
  public function scale(float $x, float $y): bool {}
  
  public function setClipPath(string $clip_mask): bool {}
  
  /**
   * @psalm-param Imagick::FILLRULE_* $fillrule
   */
  public function setClipRule(int $fillrule): bool {}
  
  /**
   * @psalm-param Imagick::PATHUNITS_* $pathunits
   */
  public function setClipUnits(int $pathunits): bool {}
  
  public function setFillOpacity(float $opacity): bool {}
  
  public function setFillPatternUrl(string $fill_url): bool {}
  
  /**
   * @psalm-param Imagick::FILLRULE_* $fillrule
   */
  public function setFillRule(int $fillrule): bool {}
  
  /**
   * @psalm-param Imagick::GRAVITY_* $gravity
   */
  public function setGravity(int $gravity): bool {}
  
  public function setStrokePatternUrl(string $stroke_url): bool {}
  
  public function setStrokeDashOffset(float $dash_offset): bool {}
  
  /**
   * @psalm-param Imagick::LINECAP_* $linecap
   */
  public function setStrokeLineCap(int $linecap): bool {}
  
  /**
   * @psalm-param Imagick::LINEJOIN_* $linejoin
   */
  public function setStrokeLineJoin(int $linejoin): bool {}
  
  public function setStrokeMiterLimit(int $miterlimit): bool {}
  
  /**
   * @psalm-param float<0,1> $opacity
   */
  public function setStrokeOpacity(float $opacity): bool {}
  
  public function setVectorGraphics(string $xml): bool {}
  
  public function pop(): bool {}
  
  public function push(): bool {}
  
  public function setStrokeDashArray(array|null $dashes): bool {}
  
  public function getOpacity(): float {}
  
  /**
   * @psalm-param float<0,1> $opacity
   */
  public function setOpacity(float $opacity): bool {}
  public function getFontResolution(): array {}
  
  public function setFontResolution(float $x, float $y): bool {}
  
  public function getBorderColor(): ImagickPixel {}
  
  public function setBorderColor(ImagickPixel|string $color): bool {}
  public function setDensity(string $density): bool {}
  
  public function getDensity(): ?string {}
  public function getTextDirection(): int {}
  
  /**
   * @psalm-param Imagick::DIRECTION_* $direction
   */
  public function setTextDirection(int $direction): bool {}
}
