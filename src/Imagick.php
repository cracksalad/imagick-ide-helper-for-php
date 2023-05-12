<?php

/**
 * @author Andreas Wahlen
 */
class Imagick {
  
  public const COLOR_BLACK = 11;
  public const COLOR_BLUE = 12;
  public const COLOR_CYAN = 13;
  public const COLOR_GREEN = 14;
  public const COLOR_RED = 15;
  public const COLOR_YELLOW = 16;
  public const COLOR_MAGENTA = 17;
  public const COLOR_ALPHA = 18;
  public const COLOR_FUZZ = 19;
  
  public const IMAGICK_EXTNUM = 30700;
  public const IMAGICK_EXTVER = '3.7.0';
  
  public const QUANTUM_RANGE = 65535;
  public const USE_ZEND_MM = 0;
  
  public const COMPOSITE_DEFAULT = 54;
  public const COMPOSITE_UNDEFINED = 0;
  public const COMPOSITE_NO = 52;
  public const COMPOSITE_ATOP = 2;
  public const COMPOSITE_BLEND = 3;
  public const COMPOSITE_BUMPMAP = 5;
  public const COMPOSITE_CLEAR = 7;
  public const COMPOSITE_COLORBURN = 8;
  public const COMPOSITE_COLORDODGE = 9;
  public const COMPOSITE_COLORIZE = 10;
  public const COMPOSITE_COPYBLACK = 11;
  public const COMPOSITE_COPYBLUE = 12;
  public const COMPOSITE_COPY = 13;
  public const COMPOSITE_COPYCYAN = 14;
  public const COMPOSITE_COPYGREEN = 15;
  public const COMPOSITE_COPYMAGENTA = 16;
  public const COMPOSITE_COPYALPHA = 17;
  public const COMPOSITE_COPYOPACITY = 17;
  public const COMPOSITE_COPYRED = 18;
  public const COMPOSITE_COPYYELLOW = 19;
  public const COMPOSITE_DARKEN = 20;
  public const COMPOSITE_DSTATOP = 28;
  public const COMPOSITE_DST = 29;
  public const COMPOSITE_DSTIN = 30;
  public const COMPOSITE_DSTOUT = 31;
  public const COMPOSITE_DSTOVER = 32;
  public const COMPOSITE_DIFFERENCE = 22;
  public const COMPOSITE_DISPLACE = 23;
  public const COMPOSITE_DISSOLVE = 24;
  public const COMPOSITE_EXCLUSION = 33;
  public const COMPOSITE_HARDLIGHT = 34;
  public const COMPOSITE_HUE = 36;
  public const COMPOSITE_IN = 37;
  public const COMPOSITE_LIGHTEN = 39;
  public const COMPOSITE_LUMINIZE = 44;
  public const COMPOSITE_MODULATE = 48;
  public const COMPOSITE_MULTIPLY = 51;
  public const COMPOSITE_OUT = 53;
  public const COMPOSITE_OVER = 54;
  public const COMPOSITE_OVERLAY = 55;
  public const COMPOSITE_PLUS = 58;
  public const COMPOSITE_REPLACE = 59;
  public const COMPOSITE_SATURATE = 60;
  public const COMPOSITE_SCREEN = 61;
  public const COMPOSITE_SOFTLIGHT = 62;
  public const COMPOSITE_SRCATOP = 63;
  public const COMPOSITE_SRC = 64;
  public const COMPOSITE_SRCIN = 65;
  public const COMPOSITE_SRCOUT = 66;
  public const COMPOSITE_SRCOVER = 67;
  public const COMPOSITE_THRESHOLD = 68;
  public const COMPOSITE_XOR = 70;
  public const COMPOSITE_CHANGEMASK = 6;
  public const COMPOSITE_LINEARLIGHT = 43;
  public const COMPOSITE_DISTORT = 25;
  public const COMPOSITE_BLUR = 4;
  public const COMPOSITE_PEGTOPLIGHT = 56;
  public const COMPOSITE_VIVIDLIGHT = 69;
  public const COMPOSITE_PINLIGHT = 57;
  public const COMPOSITE_LINEARDODGE = 42;
  public const COMPOSITE_LINEARBURN = 41;
  public const COMPOSITE_MATHEMATICS = 45;
  public const COMPOSITE_MODULUSADD = 49;
  public const COMPOSITE_MODULUSSUBTRACT = 50;
  public const COMPOSITE_MINUSDST = 46;
  public const COMPOSITE_DIVIDEDST = 26;
  public const COMPOSITE_DIVIDESRC = 27;
  public const COMPOSITE_MINUSSRC = 47;
  public const COMPOSITE_DARKENINTENSITY = 21;
  public const COMPOSITE_LIGHTENINTENSITY = 40;
  public const COMPOSITE_HARDMIX = 35;
  public const COMPOSITE_STEREO = 71;
  public const COMPOSITE_FREEZE = 72;
  public const COMPOSITE_INTERPOLATE = 73;
  public const COMPOSITE_NEGATE = 74;
  public const COMPOSITE_REFLECT = 75;
  public const COMPOSITE_SOFTBURN = 76;
  public const COMPOSITE_SOFTDODGE = 77;
  public const COMPOSITE_STAMP = 78;
  public const COMPOSITE_RMSE = 79;
  public const COMPOSITE_SALIENCY_BLEND = 80;
  public const COMPOSITE_SEAMLESS_BLEND = 81;
  
  public const MONTAGEMODE_FRAME = 1;
  public const MONTAGEMODE_UNFRAME = 2;
  public const MONTAGEMODE_CONCATENATE = 3;
  
  public const STYLE_NORMAL = 1;
  public const STYLE_ITALIC = 2;
  public const STYLE_OBLIQUE = 3;
  public const STYLE_ANY = 4;
  public const STYLE_BOLD = 5;
  
  public const FILTER_UNDEFINED = 0;
  public const FILTER_POINT = 1;
  public const FILTER_BOX = 2;
  public const FILTER_TRIANGLE = 3;
  public const FILTER_HERMITE = 4;
  public const FILTER_HANNING = 5;
  public const FILTER_HANN = 5;
  public const FILTER_HAMMING = 6;
  public const FILTER_BLACKMAN = 7;
  public const FILTER_GAUSSIAN = 8;
  public const FILTER_QUADRATIC = 9;
  public const FILTER_CUBIC = 10;
  public const FILTER_CATROM = 11;
  public const FILTER_MITCHELL = 12;
  public const FILTER_LANCZOS = 22;
  public const FILTER_BESSEL = 13;
  public const FILTER_SINC = 14;
  public const FILTER_KAISER = 16;
  public const FILTER_WELSH = 17;
  public const FILTER_WELCH = 17;
  public const FILTER_PARZEN = 18;
  public const FILTER_LAGRANGE = 21;
  public const FILTER_SENTINEL = 32;
  public const FILTER_BOHMAN = 19;
  public const FILTER_BARTLETT = 20;
  public const FILTER_JINC = 13;
  public const FILTER_SINCFAST = 15;
  public const FILTER_ROBIDOUX = 26;
  public const FILTER_LANCZOSSHARP = 23;
  public const FILTER_LANCZOS2 = 24;
  public const FILTER_LANCZOS2SHARP = 25;
  public const FILTER_ROBIDOUXSHARP = 27;
  public const FILTER_COSINE = 28;
  public const FILTER_SPLINE = 29;
  public const FILTER_LANCZOSRADIUS = 30;
  public const FILTER_CUBIC_SPLINE = 31;
  
  public const IMGTYPE_UNDEFINED = 0;
  public const IMGTYPE_BILEVEL = 1;
  public const IMGTYPE_GRAYSCALE = 2;
  public const IMGTYPE_GRAYSCALEALPHA = 3;
  public const IMGTYPE_GRAYSCALEMATTE = 3;
  public const IMGTYPE_PALETTE = 4;
  public const IMGTYPE_PALETTEMATTE = 5;
  public const IMGTYPE_PALETTEALPHA = 5;
  public const IMGTYPE_TRUECOLOR = 6;
  public const IMGTYPE_TRUECOLORALPHA = 7;
  public const IMGTYPE_TRUECOLORMATTE = 7;
  public const IMGTYPE_COLORSEPARATION = 8;
  public const IMGTYPE_COLORSEPARATIONALPHA = 9;
  public const IMGTYPE_COLORSEPARATIONMATTE = 9;
  public const IMGTYPE_OPTIMIZE = 10;
  public const IMGTYPE_PALETTEBILEVELALPHA = 11;
  public const IMGTYPE_PALETTEBILEVELMATTE = 11;
  
  public const RESOLUTION_UNDEFINED = 0;
  public const RESOLUTION_PIXELSPERINCH = 1;
  public const RESOLUTION_PIXELSPERCENTIMETER = 2;
  
  public const COMPRESSION_UNDEFINED = 0;
  public const COMPRESSION_NO = 16;
  public const COMPRESSION_BZIP = 3;
  public const COMPRESSION_FAX = 7;
  public const COMPRESSION_GROUP4 = 8;
  public const COMPRESSION_JPEG = 12;
  public const COMPRESSION_JPEG2000 = 11;
  public const COMPRESSION_LOSSLESSJPEG = 13;
  public const COMPRESSION_LZW = 15;
  public const COMPRESSION_RLE = 19;
  public const COMPRESSION_ZIP = 20;
  public const COMPRESSION_DXT1 = 4;
  public const COMPRESSION_DXT3 = 5;
  public const COMPRESSION_DXT5 = 6;
  public const COMPRESSION_ZIPS = 21;
  public const COMPRESSION_PIZ = 17;
  public const COMPRESSION_PXR24 = 18;
  public const COMPRESSION_B44 = 2;
  public const COMPRESSION_B44A = 1;
  public const COMPRESSION_LZMA = 14;
  public const COMPRESSION_JBIG1 = 9;
  public const COMPRESSION_JBIG2 = 10;
  public const COMPRESSION_ZSTD = 22;
  public const COMPRESSION_WEBP = 23;
  public const COMPRESSION_DWAA = 24;
  public const COMPRESSION_DWAB = 25;
  public const COMPRESSION_BC7 = 26;
  
  public const PAINT_POINT = 1;
  public const PAINT_REPLACE = 2;
  public const PAINT_FLOODFILL = 3;
  public const PAINT_FILLTOBORDER = 4;
  public const PAINT_RESET = 5;
  
  public const GRAVITY_NORTHWEST = 1;
  public const GRAVITY_NORTH = 2;
  public const GRAVITY_NORTHEAST = 3;
  public const GRAVITY_WEST = 4;
  public const GRAVITY_CENTER = 5;
  public const GRAVITY_EAST = 6;
  public const GRAVITY_SOUTHWEST = 7;
  public const GRAVITY_SOUTH = 8;
  public const GRAVITY_SOUTHEAST = 9;
  public const GRAVITY_FORGET = 0;
  
  public const STRETCH_NORMAL = 1;
  public const STRETCH_ULTRACONDENSED = 2;
  public const STRETCH_EXTRACONDENSED = 3;
  public const STRETCH_CONDENSED = 4;
  public const STRETCH_SEMICONDENSED = 5;
  public const STRETCH_SEMIEXPANDED = 6;
  public const STRETCH_EXPANDED = 7;
  public const STRETCH_EXTRAEXPANDED = 8;
  public const STRETCH_ULTRAEXPANDED = 9;
  public const STRETCH_ANY = 10;
  
  public const ALIGN_UNDEFINED = 0;
  public const ALIGN_LEFT = 1;
  public const ALIGN_CENTER = 2;
  public const ALIGN_RIGHT = 3;
  
  public const DECORATION_NO = 1;
  public const DECORATION_UNDERLINE = 2;
  public const DECORATION_OVERLINE = 3;
  public const DECORATION_LINETROUGH = 4;
  public const DECORATION_LINETHROUGH = 4;
  
  public const NOISE_UNIFORM = 1;
  public const NOISE_GAUSSIAN = 2;
  public const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
  public const NOISE_IMPULSE = 4;
  public const NOISE_LAPLACIAN = 5;
  public const NOISE_POISSON = 6;
  public const NOISE_RANDOM = 7;
  
  public const CHANNEL_UNDEFINED = 0;
  public const CHANNEL_RED = 1;
  public const CHANNEL_GRAY = 1;
  public const CHANNEL_CYAN = 1;
  public const CHANNEL_GREEN = 2;
  public const CHANNEL_MAGENTA = 2;
  public const CHANNEL_BLUE = 4;
  public const CHANNEL_YELLOW = 4;
  public const CHANNEL_ALPHA = 16;
  public const CHANNEL_OPACITY = 16;
  public const CHANNEL_BLACK = 8;
  public const CHANNEL_INDEX = 32;
  public const CHANNEL_ALL = 134217727;
  public const CHANNEL_DEFAULT = 134217727;
  public const CHANNEL_RGBA = 23;
  public const CHANNEL_TRUEALPHA = 256;
  public const CHANNEL_RGBS = 512;
  public const CHANNEL_GRAY_CHANNELS = 1024;
  public const CHANNEL_SYNC = 131072;
  public const CHANNEL_READ_MASK = 64;
  public const CHANNEL_WRITE_MASK = 128;
  public const CHANNEL_META = 256;
  public const CHANNEL_COMPOSITE_MASK = 512;
  public const CHANNEL_COMPOSITES = 31;
  
  public const METRIC_ABSOLUTEERRORMETRIC = 1;
  public const METRIC_MEANABSOLUTEERROR = 3;
  public const METRIC_MEANERRORPERPIXELMETRIC = 4;
  public const METRIC_MEANSQUAREERROR = 5;
  public const METRIC_PEAKABSOLUTEERROR = 7;
  public const METRIC_PEAKSIGNALTONOISERATIO = 8;
  public const METRIC_ROOTMEANSQUAREDERROR = 10;
  public const METRIC_NORMALIZEDCROSSCORRELATIONERRORMETRIC = 6;
  public const METRIC_FUZZERROR = 2;
  public const METRIC_PERCEPTUALHASH_ERROR = 9;
  public const METRIC_STRUCTURAL_SIMILARITY_ERROR = 11;
  public const METRIC_STRUCTURAL_DISSIMILARITY_ERROR = 12;
  
  public const PIXEL_CHAR = 1;
  public const PIXELSTORAGE_CHAR = 1;
  public const PIXEL_DOUBLE = 2;
  public const PIXELSTORAGE_DOUBLE = 2;
  public const PIXEL_FLOAT = 3;
  public const PIXELSTORAGE_FLOAT = 3;
  public const PIXEL_LONG = 4;
  public const PIXELSTORAGE_LONG = 4;
  public const PIXEL_QUANTUM = 6;
  public const PIXELSTORAGE_QUANTUM = 6;
  public const PIXEL_SHORT = 7;
  public const PIXELSTORAGE_SHORT = 7;
  
  public const EVALUATE_UNDEFINED = 0;
  public const EVALUATE_ADD = 2;
  public const EVALUATE_AND = 4;
  public const EVALUATE_DIVIDE = 6;
  public const EVALUATE_LEFTSHIFT = 11;
  public const EVALUATE_MAX = 13;
  public const EVALUATE_MIN = 16;
  public const EVALUATE_MULTIPLY = 18;
  public const EVALUATE_OR = 19;
  public const EVALUATE_RIGHTSHIFT = 22;
  public const EVALUATE_SET = 24;
  public const EVALUATE_SUBTRACT = 26;
  public const EVALUATE_XOR = 32;
  public const EVALUATE_POW = 21;
  public const EVALUATE_LOG = 12;
  public const EVALUATE_THRESHOLD = 29;
  public const EVALUATE_THRESHOLDBLACK = 28;
  public const EVALUATE_THRESHOLDWHITE = 30;
  public const EVALUATE_GAUSSIANNOISE = 8;
  public const EVALUATE_IMPULSENOISE = 9;
  public const EVALUATE_LAPLACIANNOISE = 10;
  public const EVALUATE_MULTIPLICATIVENOISE = 17;
  public const EVALUATE_POISSONNOISE = 20;
  public const EVALUATE_UNIFORMNOISE = 31;
  public const EVALUATE_COSINE = 5;
  public const EVALUATE_SINE = 25;
  public const EVALUATE_ADDMODULUS = 3;
  public const EVALUATE_MEAN = 14;
  public const EVALUATE_ABS = 1;
  public const EVALUATE_EXPONENTIAL = 7;
  public const EVALUATE_MEDIAN = 15;
  public const EVALUATE_SUM = 27;
  public const EVALUATE_ROOT_MEAN_SQUARE = 23;
  public const EVALUATE_INVERSE_LOG = 33;
  
  public const COLORSPACE_UNDEFINED = 0;
  public const COLORSPACE_RGB = 21;
  public const COLORSPACE_GRAY = 3;
  public const COLORSPACE_TRANSPARENT = 24;
  public const COLORSPACE_OHTA = 18;
  public const COLORSPACE_XYZ = 26;
  public const COLORSPACE_YCBCR = 27;
  public const COLORSPACE_YCC = 28;
  public const COLORSPACE_YIQ = 30;
  public const COLORSPACE_YPBPR = 31;
  public const COLORSPACE_YUV = 32;
  public const COLORSPACE_CMYK = 2;
  public const COLORSPACE_SRGB = 23;
  public const COLORSPACE_HSB = 6;
  public const COLORSPACE_HSL = 8;
  public const COLORSPACE_HWB = 10;
  public const COLORSPACE_LOG = 15;
  public const COLORSPACE_CMY = 1;
  public const COLORSPACE_LUV = 17;
  public const COLORSPACE_HCL = 4;
  public const COLORSPACE_LCH = 12;
  public const COLORSPACE_LMS = 16;
  public const COLORSPACE_LCHAB = 13;
  public const COLORSPACE_LCHUV = 14;
  public const COLORSPACE_SCRGB = 22;
  public const COLORSPACE_HSI = 7;
  public const COLORSPACE_HSV = 9;
  public const COLORSPACE_HCLP = 5;
  public const COLORSPACE_YDBDR = 29;
  public const COLORSPACE_REC601YCBCR = 19;
  public const COLORSPACE_REC709YCBCR = 20;
  public const COLORSPACE_XYY = 25;
  public const COLORSPACE_LINEARGRAY = 33;
  public const COLORSPACE_DISPLAYP3 = 35;
  public const COLORSPACE_ADOBE98 = 36;
  public const COLORSPACE_PROPHOTO = 37;
  public const COLORSPACE_JZAZBZ = 34;
  
  public const VIRTUALPIXELMETHOD_UNDEFINED = 0;
  public const VIRTUALPIXELMETHOD_BACKGROUND = 1;
  public const VIRTUALPIXELMETHOD_EDGE = 3;
  public const VIRTUALPIXELMETHOD_MIRROR = 4;
  public const VIRTUALPIXELMETHOD_TILE = 6;
  public const VIRTUALPIXELMETHOD_TRANSPARENT = 7;
  public const VIRTUALPIXELMETHOD_MASK = 8;
  public const VIRTUALPIXELMETHOD_BLACK = 9;
  public const VIRTUALPIXELMETHOD_GRAY = 10;
  public const VIRTUALPIXELMETHOD_WHITE = 11;
  public const VIRTUALPIXELMETHOD_HORIZONTALTILE = 12;
  public const VIRTUALPIXELMETHOD_VERTICALTILE = 13;
  public const VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE = 14;
  public const VIRTUALPIXELMETHOD_VERTICALTILEEDGE = 15;
  public const VIRTUALPIXELMETHOD_CHECKERTILE = 16;
  public const VIRTUALPIXELMETHOD_DITHER = 2;
  public const VIRTUALPIXELMETHOD_RANDOM = 5;
  
  public const PREVIEW_UNDEFINED = 0;
  public const PREVIEW_ROTATE = 1;
  public const PREVIEW_SHEAR = 2;
  public const PREVIEW_ROLL = 3;
  public const PREVIEW_HUE = 4;
  public const PREVIEW_SATURATION = 5;
  public const PREVIEW_BRIGHTNESS = 6;
  public const PREVIEW_GAMMA = 7;
  public const PREVIEW_SPIFF = 8;
  public const PREVIEW_DULL = 9;
  public const PREVIEW_GRAYSCALE = 10;
  public const PREVIEW_QUANTIZE = 11;
  public const PREVIEW_DESPECKLE = 12;
  public const PREVIEW_REDUCENOISE = 13;
  public const PREVIEW_ADDNOISE = 14;
  public const PREVIEW_SHARPEN = 15;
  public const PREVIEW_BLUR = 16;
  public const PREVIEW_THRESHOLD = 17;
  public const PREVIEW_EDGEDETECT = 18;
  public const PREVIEW_SPREAD = 19;
  public const PREVIEW_SOLARIZE = 20;
  public const PREVIEW_SHADE = 21;
  public const PREVIEW_RAISE = 22;
  public const PREVIEW_SEGMENT = 23;
  public const PREVIEW_SWIRL = 24;
  public const PREVIEW_IMPLODE = 25;
  public const PREVIEW_WAVE = 26;
  public const PREVIEW_OILPAINT = 27;
  public const PREVIEW_CHARCOALDRAWING = 28;
  public const PREVIEW_JPEG = 29;
  
  public const RENDERINGINTENT_UNDEFINED = 0;
  public const RENDERINGINTENT_SATURATION = 1;
  public const RENDERINGINTENT_PERCEPTUAL = 2;
  public const RENDERINGINTENT_ABSOLUTE = 3;
  public const RENDERINGINTENT_RELATIVE = 4;
  
  public const INTERLACE_UNDEFINED = 0;
  public const INTERLACE_NO = 1;
  public const INTERLACE_LINE = 2;
  public const INTERLACE_PLANE = 3;
  public const INTERLACE_PARTITION = 4;
  public const INTERLACE_GIF = 5;
  public const INTERLACE_JPEG = 6;
  public const INTERLACE_PNG = 7;
  
  public const FILLRULE_UNDEFINED = 0;
  public const FILLRULE_EVENODD = 1;
  public const FILLRULE_NONZERO = 2;
  
  public const PATHUNITS_UNDEFINED = 0;
  public const PATHUNITS_USERSPACE = 1;
  public const PATHUNITS_USERSPACEONUSE = 2;
  public const PATHUNITS_OBJECTBOUNDINGBOX = 3;
  
  public const LINECAP_UNDEFINED = 0;
  public const LINECAP_BUTT = 1;
  public const LINECAP_ROUND = 2;
  public const LINECAP_SQUARE = 3;
  
  public const LINEJOIN_UNDEFINED = 0;
  public const LINEJOIN_MITER = 1;
  public const LINEJOIN_ROUND = 2;
  public const LINEJOIN_BEVEL = 3;
  
  public const RESOURCETYPE_UNDEFINED = 0;
  public const RESOURCETYPE_AREA = 1;
  public const RESOURCETYPE_DISK = 2;
  public const RESOURCETYPE_FILE = 3;
  public const RESOURCETYPE_MAP = 5;
  public const RESOURCETYPE_MEMORY = 6;
  public const RESOURCETYPE_TIME = 9;
  public const RESOURCETYPE_THROTTLE = 8;
  public const RESOURCETYPE_THREAD = 7;
  public const RESOURCETYPE_WIDTH = 10;
  public const RESOURCETYPE_HEIGHT = 4;
  public const RESOURCETYPE_LISTLENGTH = 11;
  
  public const DISPOSE_UNRECOGNIZED = 0;
  public const DISPOSE_UNDEFINED = 0;
  public const DISPOSE_NONE = 1;
  public const DISPOSE_BACKGROUND = 2;
  public const DISPOSE_PREVIOUS = 3;
  
  public const INTERPOLATE_UNDEFINED = 0;
  public const INTERPOLATE_AVERAGE = 1;
  public const INTERPOLATE_BILINEAR = 5;
  public const INTERPOLATE_INTEGER = 8;
  public const INTERPOLATE_MESH = 9;
  public const INTERPOLATE_SPLINE = 11;
  public const INTERPOLATE_AVERAGE_9 = 2;
  public const INTERPOLATE_AVERAGE_16 = 3;
  public const INTERPOLATE_BLEND = 6;
  public const INTERPOLATE_BACKGROUND_COLOR = 4;
  public const INTERPOLATE_CATROM = 7;
  public const INTERPOLATE_NEAREST_PIXEL = 10;
  
  public const LAYERMETHOD_UNDEFINED = 0;
  public const LAYERMETHOD_COALESCE = 1;
  public const LAYERMETHOD_COMPAREANY = 2;
  public const LAYERMETHOD_COMPARECLEAR = 3;
  public const LAYERMETHOD_COMPAREOVERLAY = 4;
  public const LAYERMETHOD_DISPOSE = 5;
  public const LAYERMETHOD_OPTIMIZE = 6;
  public const LAYERMETHOD_OPTIMIZEPLUS = 8;
  public const LAYERMETHOD_OPTIMIZETRANS = 9;
  public const LAYERMETHOD_COMPOSITE = 12;
  public const LAYERMETHOD_OPTIMIZEIMAGE = 7;
  public const LAYERMETHOD_REMOVEDUPS = 10;
  public const LAYERMETHOD_REMOVEZERO = 11;
  public const LAYERMETHOD_TRIMBOUNDS = 16;
  
  public const ORIENTATION_UNDEFINED = 0;
  public const ORIENTATION_TOPLEFT = 1;
  public const ORIENTATION_TOPRIGHT = 2;
  public const ORIENTATION_BOTTOMRIGHT = 3;
  public const ORIENTATION_BOTTOMLEFT = 4;
  public const ORIENTATION_LEFTTOP = 5;
  public const ORIENTATION_RIGHTTOP = 6;
  public const ORIENTATION_RIGHTBOTTOM = 7;
  public const ORIENTATION_LEFTBOTTOM = 8;
  
  public const DISTORTION_UNDEFINED = 0;
  public const DISTORTION_AFFINE = 1;
  public const DISTORTION_AFFINEPROJECTION = 2;
  public const DISTORTION_ARC = 9;
  public const DISTORTION_BILINEAR = 6;
  public const DISTORTION_PERSPECTIVE = 4;
  public const DISTORTION_PERSPECTIVEPROJECTION = 5;
  public const DISTORTION_SCALEROTATETRANSLATE = 3;
  public const DISTORTION_POLYNOMIAL = 8;
  public const DISTORTION_POLAR = 10;
  public const DISTORTION_DEPOLAR = 11;
  public const DISTORTION_BARREL = 14;
  public const DISTORTION_SHEPARDS = 16;
  public const DISTORTION_SENTINEL = 18;
  public const DISTORTION_RIGID_AFFINE = 19;
  public const DISTORTION_BARRELINVERSE = 15;
  public const DISTORTION_BILINEARFORWARD = 6;
  public const DISTORTION_BILINEARREVERSE = 7;
  public const DISTORTION_RESIZE = 17;
  public const DISTORTION_CYLINDER2PLANE = 12;
  public const DISTORTION_PLANE2CYLINDER = 13;
  
  public const LAYERMETHOD_MERGE = 13;
  public const LAYERMETHOD_FLATTEN = 14;
  public const LAYERMETHOD_MOSAIC = 15;
  
  public const ALPHACHANNEL_ACTIVATE = 1;
  public const ALPHACHANNEL_ON = 10;
  public const ALPHACHANNEL_SET = 13;
  public const ALPHACHANNEL_UNDEFINED = 0;
  public const ALPHACHANNEL_DISCRETE = 6;
  public const ALPHACHANNEL_COPY = 4;
  public const ALPHACHANNEL_DEACTIVATE = 5;
  public const ALPHACHANNEL_EXTRACT = 8;
  public const ALPHACHANNEL_OFF = 9;
  public const ALPHACHANNEL_OPAQUE = 11;
  public const ALPHACHANNEL_SHAPE = 14;
  public const ALPHACHANNEL_TRANSPARENT = 15;
  public const ALPHACHANNEL_ASSOCIATE = 2;
  public const ALPHACHANNEL_DISSOCIATE = 7;
  
  public const SPARSECOLORMETHOD_UNDEFINED = 0;
  public const SPARSECOLORMETHOD_BARYCENTRIC = 1;
  public const SPARSECOLORMETHOD_BILINEAR = 7;
  public const SPARSECOLORMETHOD_POLYNOMIAL = 8;
  public const SPARSECOLORMETHOD_SPEPARDS = 16;
  public const SPARSECOLORMETHOD_VORONOI = 18;
  public const SPARSECOLORMETHOD_INVERSE = 19;
  public const SPARSECOLORMETHOD_MANHATTAN = 20;
  
  public const DITHERMETHOD_UNDEFINED = 0;
  public const DITHERMETHOD_NO = 1;
  public const DITHERMETHOD_RIEMERSMA = 2;
  public const DITHERMETHOD_FLOYDSTEINBERG = 3;
  
  public const FUNCTION_UNDEFINED = 0;
  public const FUNCTION_ARCSIN = 1;
  public const FUNCTION_ARCTAN = 2;
  public const FUNCTION_POLYNOMIAL = 3;
  public const FUNCTION_SINUSOID = 4;
  
  public const ALPHACHANNEL_BACKGROUND = 3;
  public const ALPHACHANNEL_REMOVE = 12;
  
  public const STATISTIC_GRADIENT = 1;
  public const STATISTIC_MAXIMUM = 2;
  public const STATISTIC_MEAN = 3;
  public const STATISTIC_MEDIAN = 4;
  public const STATISTIC_MINIMUM = 5;
  public const STATISTIC_MODE = 6;
  public const STATISTIC_NONPEAK = 7;
  public const STATISTIC_STANDARD_DEVIATION = 9;
  public const STATISTIC_ROOT_MEAN_SQUARE = 8;
  public const STATISTIC_CONTRAST = 10;
  
  public const MORPHOLOGY_CONVOLVE = 1;
  public const MORPHOLOGY_CORRELATE = 2;
  public const MORPHOLOGY_ERODE = 3;
  public const MORPHOLOGY_DILATE = 4;
  public const MORPHOLOGY_ERODE_INTENSITY = 5;
  public const MORPHOLOGY_DILATE_INTENSITY = 6;
  public const MORPHOLOGY_DISTANCE = 21;
  public const MORPHOLOGY_OPEN = 8;
  public const MORPHOLOGY_CLOSE = 9;
  public const MORPHOLOGY_OPEN_INTENSITY = 10;
  public const MORPHOLOGY_CLOSE_INTENSITY = 11;
  public const MORPHOLOGY_SMOOTH = 12;
  public const MORPHOLOGY_EDGE_IN = 13;
  public const MORPHOLOGY_EDGE_OUT = 14;
  public const MORPHOLOGY_EDGE = 15;
  public const MORPHOLOGY_TOP_HAT = 16;
  public const MORPHOLOGY_BOTTOM_HAT = 17;
  public const MORPHOLOGY_HIT_AND_MISS = 18;
  public const MORPHOLOGY_THINNING = 19;
  public const MORPHOLOGY_THICKEN = 20;
  public const MORPHOLOGY_VORONOI = 22;
  public const MORPHOLOGY_ITERATIVE = 7;
  
  public const KERNEL_UNITY = 1;
  public const KERNEL_GAUSSIAN = 2;
  public const KERNEL_DIFFERENCE_OF_GAUSSIANS = 3;
  public const KERNEL_LAPLACIAN_OF_GAUSSIANS = 4;
  public const KERNEL_BLUR = 5;
  public const KERNEL_COMET = 6;
  public const KERNEL_LAPLACIAN = 8;
  public const KERNEL_SOBEL = 9;
  public const KERNEL_FREI_CHEN = 10;
  public const KERNEL_ROBERTS = 11;
  public const KERNEL_PREWITT = 12;
  public const KERNEL_COMPASS = 13;
  public const KERNEL_KIRSCH = 14;
  public const KERNEL_DIAMOND = 15;
  public const KERNEL_SQUARE = 16;
  public const KERNEL_RECTANGLE = 17;
  public const KERNEL_OCTAGON = 18;
  public const KERNEL_DISK = 19;
  public const KERNEL_PLUS = 20;
  public const KERNEL_CROSS = 21;
  public const KERNEL_RING = 22;
  public const KERNEL_PEAKS = 23;
  public const KERNEL_EDGES = 24;
  public const KERNEL_CORNERS = 25;
  public const KERNEL_DIAGONALS = 26;
  public const KERNEL_LINE_ENDS = 27;
  public const KERNEL_LINE_JUNCTIONS = 28;
  public const KERNEL_RIDGES = 29;
  public const KERNEL_CONVEX_HULL = 30;
  public const KERNEL_THIN_SE = 31;
  public const KERNEL_SKELETON = 32;
  public const KERNEL_CHEBYSHEV = 33;
  public const KERNEL_MANHATTAN = 34;
  public const KERNEL_OCTAGONAL = 35;
  public const KERNEL_EUCLIDEAN = 36;
  public const KERNEL_USER_DEFINED = 37;
  public const KERNEL_BINOMIAL = 7;
  
  public const DIRECTION_LEFT_TO_RIGHT = 2;
  public const DIRECTION_RIGHT_TO_LEFT = 1;
  
  public const NORMALIZE_KERNEL_NONE = 0;
  public const NORMALIZE_KERNEL_VALUE = 8192;
  public const NORMALIZE_KERNEL_CORRELATE = 65536;
  public const NORMALIZE_KERNEL_PERCENT = 4096;
  
  public const PIXELMASK_READ = 1;
  public const PIXELMASK_WRITE = 2;
  public const PIXELMASK_COMPOSITE = 4;
  
  public const AUTO_THRESHOLD_KAPUR = 1;
  public const AUTO_THRESHOLD_OTSU = 2;
  public const AUTO_THRESHOLD_TRIANGLE = 3;
  
  public const COMPLEX_OPERATOR_ADD = 1;
  public const COMPLEX_OPERATOR_CONJUGATE = 2;
  public const COMPLEX_OPERATOR_DIVIDE = 3;
  public const COMPLEX_OPERATOR_MAGNITUDEPHASE = 4;
  public const COMPLEX_OPERATOR_MULTIPLY = 5;
  public const COMPLEX_OPERATOR_REALIMAGINARY = 6;
  public const COMPLEX_OPERATOR_SUBTRACT = 7;
  
  public const IMAGE_TYPE_BILEVEL = 1;
  public const IMAGE_TYPE_GRAYSCALE = 2;
  public const IMAGE_TYPE_GRAYSCALE_ALPHA = 3;
  public const IMAGE_TYPE_PALETTE = 4;
  public const IMAGE_TYPE_PALETTE_ALPHA = 5;
  public const IMAGE_TYPE_TRUE_COLOR = 6;
  public const IMAGE_TYPE_TRUE_COLOR_ALPHA = 7;
  public const IMAGE_TYPE_COLOR_SEPARATION = 8;
  public const IMAGE_TYPE_COLOR_SEPARATION_ALPHA = 9;
  public const IMAGE_TYPE_OPTIMIZE = 10;
  public const IMAGE_TYPE_PALETTE_BILEVEL_ALPHA = 11;
  
  public function optimizeImageLayers(): bool {}
  
  /**
   * @psalm-param self::METRIC_* $metric
   */
  public function compareImageLayers(int $metric): Imagick {}
  
  public function pingImageBlob(string $image): bool {}
  
  /**
   * @param mixed $filehandle should be a resource, but that is a pseudo-type
   * which causes problems for people trying to mock the class
   */
  public function pingImageFile(/*resource*/mixed $filehandle, ?string $filename = null): bool {}
  
  public function transposeImage(): bool {}
  
  public function transverseImage(): bool {}
  
  public function trimImage(float $fuzz): bool {}
  
  public function waveImage(float $amplitude, float $length): bool {}
  
  /**
   * @psalm-param self::INTERPOLATE_* $interpolate_method
   */
  public function waveImageWithMethod(float $amplitude, float $length, int $interpolate_method): bool {}
  
  public function vignetteImage(float $black_point, float $white_point, int $x, int $y): bool {}
  
  public function uniqueImageColors(): bool {}
  
  /** @deprecated */
  public function getImageMatte(): bool {}
  
  public function setImageMatte(bool $matte): bool {}
  
  public function adaptiveResizeImage(int $columns, int $rows, bool $bestfit = false, bool $legacy = false): bool {}
  
  public function sketchImage(float $radius, float $sigma, float $angle): bool {}
  
  public function shadeImage(bool $gray, float $azimuth, float $elevation): bool {}
  
  public function getSizeOffset(): int {}
  
  public function setSizeOffset(int $columns, int $rows, int $offset): bool {}
  
  
  public function adaptiveBlurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function contrastStretchImage(float $black_point, float $white_point,  int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function adaptiveSharpenImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function randomThresholdImage(float $low, float $high, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function roundCornersImage(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool {}
  
  /**
   * @alias Imagick::roundCornersImage
   */
  public function roundCorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool {}
  
  public function setIteratorIndex(int $index): bool {}
  
  public function getIteratorIndex(): int {}
  
  /** @deprecated */
  public function transformImage(string $crop, string $geometry): Imagick {}
  
  /** @deprecated */
  public function setImageOpacity(float $opacity): bool {}
  
  public function setImageAlpha(float $alpha): bool {}
  
  /** @deprecated */
  public function orderedPosterizeImage(string $threshold_map, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function polaroidWithTextAndMethod(ImagickDraw $settings, float $angle, string $caption, int $method): bool {}
  
  public function polaroidImage(ImagickDraw $settings, float $angle): bool {}
  
  public function getImageProperty(string $name): string {}
  
  public function setImageProperty(string $name, string $value): bool {}
  
  public function deleteImageProperty(string $name): bool {}
  
  /**
   * Replaces any embedded formatting characters with the appropriate
   * image property and returns the interpreted text.
   * @see http://www.imagemagick.org/script/escape.php for escape sequences.
   * @param string $format "%m:%f %wx%h"
   */
  public function identifyFormat(string $format): string {}
  
  /**
   * @self::param self::INTERPOLATE_* $method
   */
  public function setImageInterpolateMethod(int $method): bool {}
  
  public function getImageInterpolateMethod(): int {}
  
  public function linearStretchImage(float $black_point, float $white_point): bool {}
  
  public function getImageLength(): int {}
  
  public function extentImage(int $width, int $height, int $x, int $y): bool {}

  public function getImageOrientation(): int {}
  
  public function setImageOrientation(int $orientation): bool {}
  
  /** @deprecated */
  public function paintFloodfillImage(ImagickPixel|string $fill_color, float $fuzz, ImagickPixel|string $border_color, int $x, int $y, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function clutImage(Imagick $lookup_table, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function clutImageWithInterpolate(Imagick $lookup_table, int $pixel_interpolate_method /* PixelInterpolateMethod */): bool {}
  
  public function getImageProperties(string $pattern = "*", bool $include_values = true): array {}
  
  public function getImageProfiles(string $pattern = "*", bool $include_values = true): array {}
  
  // DISTORTION_*
  public function distortImage(int $distortion, array $arguments, bool $bestfit): bool {}
  
  // $filehandle should be a resource, but that is a pseudo-type
  // which causes problems for people trying to mock the class
  public function writeImageFile(/*resource*/mixed $filehandle, ?string $format = null): bool {}
  
  // $filehandle should be a resource, but that is a pseudo-type
  // which causes problems for people trying to mock the class
  public function writeImagesFile(/*resource*/mixed $filehandle, ?string $format = null): bool {}
  
  public function resetImagePage(string $page): bool {}
  
  /** @deprecated */
  public function setImageClipMask(imagick $clip_mask): bool {}
  
  /** @deprecated */
  public function getImageClipMask(): Imagick {}
  
  public function animateImages(string $x_server): bool {}
  
  /** @deprecated */
  public function recolorImage(array $matrix): bool {}
  
  public function setFont(string $font): bool {}
  
  public function getFont(): string {}
  
  public function setPointSize(float $point_size): bool {}
  
  public function getPointSize(): float {}
  
  /**
   * @psalm-param self::LAYERMETHOD_* $layermethod
   */
  public function mergeImageLayers(int $layermethod): Imagick {}
  
  /**
   * @psalm-param self::ALPHACHANNEL_* $alphachannel
   */
  public function setImageAlphaChannel(int $alphachannel): bool {}
  
  public function floodfillPaintImage(ImagickPixel|string $fill_color, float $fuzz, ImagickPixel|string $border_color, int $x, int $y, bool $invert, ?int $channel = Imagick::CHANNEL_DEFAULT): bool{}

  public function opaquePaintImage(ImagickPixel|string $target_color, ImagickPixel|string $fill_color, float $fuzz, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

  public function transparentPaintImage(ImagickPixel|string $target_color, float $alpha, float $fuzz, bool $invert): bool {}

  public function liquidRescaleImage(int $width, int $height, float $delta_x, float $rigidity): bool {}
  
  public function encipherImage(string $passphrase): bool {}
  
  public function decipherImage(string $passphrase): bool {}
  
  /**
   * @psalm-param self::GRAVITY_* $gravity
   */
  public function setGravity(int $gravity): bool {}
  
  public function getGravity(): int {}
  
  /**
   * @psalm-param self::CHANNEL_* $channel
   */
  public function getImageChannelRange(int $channel): array {}
  
  public function getImageAlphaChannel(): bool {}
  
  public function getImageChannelDistortions(Imagick $reference_image, int $metric, int $channel = Imagick::CHANNEL_DEFAULT): float {}

  /**
   * @psalm-param self::GRAVITY_* $gravity
   */
  public function setImageGravity(int $gravity): bool {}
  
  public function getImageGravity(): int {}

  /**
   * @psalm-param self::PIXELSTORAGE_* $pixelstorage
   */
  public function importImagePixels(int $x, int $y, int $width, int $height, string $map, int $pixelstorage, array $pixels): bool {}
  
  public function deskewImage(float $threshold): bool {}
  
  /**
   * @psalm-param self::COLORSPACE_* $colorspace
   */
  public function segmentImage(int $colorspace, float $cluster_threshold, float $smooth_threshold, bool $verbose = false): bool {}
  
  /**
   * @psalm-param self::SPARSECOLORMETHOD_* $sparsecolormethod
   */
  public function sparseColorImage(int $sparsecolormethod, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function remapImage(Imagick $replacement, int $dither_method): bool {}
  
  public function houghLineImage(int $width, int $height, float $threshold): bool {}
  
  /**
   * @param string $map e.g. "RGB"
   * @psalm-param self::PIXELSTORAGE_* $pixelstorage
   */
  public function exportImagePixels(int $x, int $y, int $width, int $height, string $map, int $pixelstorage): array {}
  
  public function getImageChannelKurtosis(int $channel = Imagick::CHANNEL_DEFAULT): array {}
  
  public function functionImage(int $function, array $parameters, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /**
   * @psalm-param self::COLORSPACE_* $colorspace
   */
  public function transformImageColorspace(int $colorspace): bool {}
  
  public function haldClutImage(Imagick $clut, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function autoLevelImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function blueShiftImage(float $factor = 1.5): bool {}
  
  /**
   * @param string $artifact example 'compose:args'
   */
  public function getImageArtifact(string $artifact): ?string {}
  
  /**
   * @param string $artifact example 'compose:args'
   * @param string|null $value example "1,0,-0.5,0.5"
   */
  public function setImageArtifact(string $artifact, ?string $value): bool {}
  
  public function deleteImageArtifact(string $artifact): bool {}
  
  /**
   * @psalm-return self::CHANNEL_*
   */
  public function getColorspace(): int {}
  
  /**
   * @psalm-param self::COLORSPACE_* $colorspace
   */
  public function setColorspace(int $colorspace): bool {}
  
  /**
   * @psalm-param self::CHANNEL_* $channel
   */
  public function clampImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /**
   * @param bool $stack By default, images are stacked left-to-right. Set stack to MagickTrue to stack them top-to-bottom.
   * @param int $offset minimum distance in pixels between images.
   */
  public function smushImages(bool $stack, int $offset): Imagick {}
  
  public function __construct(string|array|int|float|null $files = null) {}
  
  public function __toString(): string {}
  
  public function count(): int {}
  
  public function getPixelIterator(): ImagickPixelIterator {}
  
  public function getPixelRegionIterator(int $x, int $y, int $columns, int $rows): ImagickPixelIterator {}
  
  public function readImage(string $filename): bool {}
  
  public function readImages(array $filenames): bool {}
  
  public function readImageBlob(string $image, ?string $filename = null): bool {}
  
  public function setImageFormat(string $format): bool {}
  
  public function scaleImage(int $columns, int $rows, bool $bestfit = false, bool $legacy = false): bool {}
  
  public function writeImage(?string $filename = null): bool {}
  
  public function writeImages(string $filename, bool $adjoin): bool {}
  
  /**
   * @psalm-param self::CHANNEL_* $channel
   */
  public function blurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function thumbnailImage(?int $columns, ?int $rows, bool $bestfit = false, bool $fill = false, bool $legacy = false): bool {}
  
  public function cropThumbnailImage(int $width, int $height, bool $legacy = false): bool {}
  
  public function getImageFilename(): string {}
  
  public function setImageFilename(string $filename): bool {}
  
  public function getImageFormat(): string {}
  
  public function getImageMimeType(): string {}
  
  public function removeImage(): bool {}
  
  /** @alias Imagick::clear */
  public function destroy(): bool {}
  
  public function clear(): bool {}
  
  public function clone(): Imagick {}
  
  public function getImageSize(): int {}
  
  public function getImageBlob(): string {}
  
  public function getImagesBlob(): string {}
  
  public function setFirstIterator(): bool {}
  
  public function setLastIterator(): bool {}
  
  public function resetIterator(): void {}
  
  public function previousImage(): bool {}
  
  public function nextImage(): bool {}
  
  public function hasPreviousImage(): bool {}
  
  public function hasNextImage(): bool {}
  
  public function setImageIndex(int $index): bool {}
  
  public function getImageIndex(): int {}
  
  public function commentImage(string $comment): bool {}
  
  public function cropImage(int $width, int $height, int $x, int $y): bool {}
  
  public function labelImage(string $label): bool {}
  
  public function getImageGeometry(): array {}
  
  public function drawImage(ImagickDraw $drawing): bool {}
  
  public function setImageCompressionQuality(int $quality): bool {}
  
  public function getImageCompressionQuality(): int {}
  
  public function setImageCompression(int $compression): bool {}
  
  public function getImageCompression(): int {}
  
  public function annotateImage(ImagickDraw $settings, float $x, float $y, float $angle, string $text): bool {}
  
  public function compositeImage(Imagick $composite_image, int $composite, int $x, int $y, int $channel = Imagick::CHANNEL_DEFAULT): bool{}
  
  public function modulateImage(float $brightness, float $saturation, float $hue): bool {}
  
  public function getImageColors(): int {}
  
  /**
   * @param string $title_geometry e.g. "3x2+0+0"
   * @param string $thumbnail_geometry e.g. "200x160+3+3>"
   * @param self::MONTAGEMODE_* $monatgemode
   * @param string $frame e.g. "10x10+2+2"
   */
  public function montageImage(ImagickDraw $settings, string $tile_geometry, string $thumbnail_geometry, int $monatgemode, string $frame): Imagick {}
  
  public function identifyImage(bool $append_raw_output = false): array {}
  
  public function thresholdImage(float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function adaptiveThresholdImage(int $width, int $height, int $offset): bool {}
  
  public function blackThresholdImage(ImagickPixel|string $threshold_color): bool {}
  
  public function whiteThresholdImage(ImagickPixel|string $threshold_color): bool {}
  
  public function appendImages(bool $stack): Imagick {}
  
  public function charcoalImage(float $radius, float $sigma): bool {}
  
  public function normalizeImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function oilPaintImageWithSigma(float $radius, float $sigma): bool {}
  
  public function oilPaintImage(float $radius): bool {}
  
  public function posterizeImage(int $levels, bool $dither): bool {}
  
  /** @deprecated */
  public function radialBlurImage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function raiseImage(int $width, int $height, int $x, int $y, bool $raise): bool {}
  
  public function resampleImage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool {}
  
  public function resizeImage(int $columns, int $rows, int $filter, float $blur, bool $bestfit = false, bool $legacy = false): bool {}
  
  public function rollImage(int $x, int $y): bool {}
  
  public function rotateImage(ImagickPixel|string $background_color, float $degrees): bool {}
  
  public function sampleImage(int $columns, int $rows): bool {}
  
  public function solarizeImage(int $threshold): bool {}
  
  public function shadowImage(float $opacity, float $sigma, int $x, int $y): bool {}
  
  /** @deprecated */
  public function setImageAttribute(string $key, string $value): bool {}
  
  public function setImageBackgroundColor(ImagickPixel|string $background_color): bool {}
  
  public function setImageChannelMask(int $channel): int {}
  
  public function setImageCompose(int $compose): bool {}
  
  public function setImageDelay(int $delay): bool {}
  
  public function setImageDepth(int $depth): bool {}
  
  public function setImageGamma(float $gamma): bool {}
  
  public function setImageIterations(int $iterations): bool {}
  
  public function setImageMatteColor(ImagickPixel|string $matte_color): bool {}
  
  public function setImagePage(int $width, int $height, int $x, int $y): bool {}
  
  public function setImageProgressMonitor(string $filename): bool {}
  
  public function setProgressMonitor(callable $callback): bool {}
  
  public function setImageResolution(float $x_resolution, float $y_resolution): bool {}
  
  public function setImageScene(int $scene): bool {}
  
  public function setImageTicksPerSecond(int $ticks_per_second): bool {}
  
  /**
   * @psalm-param self::IMGTYPE_* $image_type
   */
  public function setImageType(int $image_type): bool {}
  
  public function setImageUnits(int $units): bool {}
  
  public function sharpenImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function shaveImage(int $columns, int $rows): bool {}
  
  public function shearImage(ImagickPixel|string $background_color, float $x_shear, float $y_shear): bool {}
  
  public function spliceImage(int $width, int $height, int $x, int $y): bool {}
  
  public function pingImage(string $filename): bool {}
  
  /**
   * @param mixed $filehandle should be a resource, but that is a pseudo-type
   *    which causes problems for people trying to mock the class
   */
  public function readImageFile(/*resource*/mixed $filehandle, ?string $filename = null): bool {}
  
  public function displayImage(string $servername): bool {}
  
  public function displayImages(string $servername): bool {}
  
  public function spreadImage(float $radius): bool {}
  
  /**
   * @psalm-param self::INTERPOLATE_* $interpolate_method
   */
  public function spreadImageWithMethod(float $radius, int $interpolate_method): bool {}
  
  public function swirlImage(float $degrees): bool {}
  
  /**
   * @psalm-param self::INTERPOLATE_* $interpolate_method
   */
  public function swirlImageWithMethod(float $degrees, int $interpolate_method): bool {}
  
  public function stripImage(): bool {}
  
  public static function queryFormats(string $pattern = "*"): array {}
  
  public static function queryFonts(string $pattern = "*"): array {}
  
  public function queryFontMetrics(ImagickDraw $settings, string $text, ?bool $multiline = null): array {}
  
  public function steganoImage(Imagick $watermark, int $offset): Imagick {}
  
  /**
   * @psalm-param self::NOISE_* $noise
   */
  public function addNoiseImage(int $noise, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function addNoiseImageWithAttenuate(int $noise, float $attenuate, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function motionBlurImage(float $radius, float $sigma, float $angle, int $channel = Imagick::CHANNEL_DEFAULT):bool {}
  
  /** @deprecated */
  public function mosaicImages(): Imagick {}
  
  public function morphImages(int $number_frames): Imagick {}
  
  public function minifyImage(): bool {}
  
  public function affineTransformImage(ImagickDraw $settings): bool {}
  
  public function averageImages(): Imagick {}
  
  public function borderImage(ImagickPixel|string $border_color, int $width, int $height): bool {}
  
  /**
   * @psalm-param self::COMPOSITE_* $composite
   */
  public function borderImageWithComposite(ImagickPixel|string $border_color, int $width, int $height, int $composite): bool {}
  
  public static function calculateCrop(int $original_width, int $original_height, int $desired_width, int $desired_height, bool $legacy = false): array {}
  
  public function chopImage(int $width, int $height, int $x, int $y): bool {}
  
  public function clipImage(): bool {}
  
  public function clipPathImage(string $pathname, bool $inside): bool {}
  
  /**
   * @deprecated
   * @alias Imagick::clipPathImage
   */
  public function clipImagePath(string $pathname, bool $inside): void {}
  
  public function coalesceImages(): Imagick {}
  
  /** @deprecated */
  public function colorFloodfillImage(ImagickPixel|string $fill_color, float $fuzz, ImagickPixel|string $border_color, int $x, int $y): bool {}
  
  public function colorizeImage(ImagickPixel|string $colorize_color, ImagickPixel|string|false $opacity_color, ?bool $legacy = false): bool {}
  
  public function compareImageChannels(Imagick $reference, int $channel, int $metric): array {}
  
  public function compareImages(Imagick $reference, int $metric): array {}
  
  public function contrastImage(bool $sharpen): bool {}
  
  public function combineImages(int $colorspace): Imagick {}
  
  /**
   * @param array $kernel is a 2d array of float values
   */
  public function convolveImage(array $kernel, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function cycleColormapImage(int $displace): bool {}
  
  public function deconstructImages(): Imagick {}
  
  public function despeckleImage(): bool {}
  
  public function edgeImage(float $radius): bool {}
  
  public function embossImage(float $radius, float $sigma): bool {}
  
  public function enhanceImage(): bool {}
  
  public function equalizeImage(): bool {}
  
  /**
   * @psalm-param self::EVALUATE_* $evaluate
   */
  public function evaluateImage(int $evaluate, float $constant, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /**
   * @psalm-param self::EVALUATE_* $evaluate
   */
  public function evaluateImages(int $evaluate): bool {}
  
  public function flattenImages(): Imagick {}
  
  public function flipImage(): bool {}
  
  public function flopImage(): bool {}
  
  public function forwardFourierTransformImage(bool $magnitude): bool {}
  
  public function frameImage(ImagickPixel|string $matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool {}
  
  public function frameImageWithComposite(ImagickPixel|string $matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel, int $composite): bool {}
  
  public function fxImage(string $expression, int $channel = Imagick::CHANNEL_DEFAULT): Imagick {}
  
  public function gammaImage(float $gamma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function gaussianBlurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /** @deprecated */
  public function getImageAttribute(string $key): string {}
  
  public function getImageBackgroundColor(): ImagickPixel {}
  
  public function getImageBluePrimary(): array {}
  
  public function getImageBorderColor(): ImagickPixel {}
  
  public function getImageChannelDepth(int $channel): int {}
  
  public function getImageChannelDistortion(Imagick $reference, int $channel, int $metric): float {}
  
  /** @deprecated */
  public function getImageChannelExtrema(int $channel): array {}
  
  public function getImageChannelMean(int $channel): array {}
  
  public function getImageChannelStatistics(): array {}
  
  /**
   * @param int $index - the offset into the image colormap.
   */
  public function getImageColormapColor(int $index): ImagickPixel {}
  
  public function getImageColorspace(): int {}
  
  public function getImageCompose(): int {}
  
  public function getImageDelay(): int {}
  
  public function getImageDepth(): int {}
  
  /**
   * @psalm-param self::METRIC_* $metric
   */
  public function getImageDistortion(Imagick $reference, int $metric): float {}
  
  /** @deprecated */
  public function getImageExtrema(): array {}
  
  public function getImageDispose(): int {}
  
  public function getImageGamma(): float {}
  
  public function getImageGreenPrimary(): array {}
  
  public function getImageHeight(): int {}
  
  public function getImageHistogram(): array {}
  
  public function getImageInterlaceScheme(): int {}
  
  public function getImageIterations(): int {}
  
  /** @deprecated */
  public function getImageMatteColor(): ImagickPixel {}
  
  public function getImagePage(): array {}
  
  public function getImagePixelColor(int $x, int $y): ImagickPixel {}
  
  public function setImagePixelColor(int $x, int $y, ImagickPixel|string $color): ImagickPixel {}
  
  public function getImageProfile(string $name): string {}
  
  public function getImageRedPrimary(): array {}
  
  public function getImageRenderingIntent(): int {}
  
  public function getImageResolution(): array {}
  
  public function getImageScene(): int {}
  
  public function getImageSignature(): string {}
  
  public function getImageTicksPerSecond(): int {}
  
  public function getImageType(): int {}
  
  public function getImageUnits(): int {}
  
  public function getImageVirtualPixelMethod(): int {}
  
  public function getImageWhitePoint(): array {}
  
  public function getImageWidth(): int {}
  
  public function getNumberImages(): int {}
  
  public function getImageTotalInkDensity(): float {}
  
  public function getImageRegion(int $width, int $height, int $x, int $y): Imagick {}
  
  public function implodeImage(float $radius): bool {}
  public function implodeImageWithMethod(float $radius, int $pixel_interpolate_method /* PixelInterpolateMethod */): bool {}
  
  public function levelImage(float $black_point, float $gamma, float $white_point, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function magnifyImage(): bool {}
  
  /** @deprecated */
  public function mapImage(imagick $map, bool $dither): bool {}
  
  /** @deprecated */
  public function matteFloodfillImage(float $alpha, float $fuzz, ImagickPixel|string $border_color, int $x, int $y): bool {}
  
  /** @deprecated */
  public function medianFilterImage(float $radius): bool {}
  
  public function negateImage(bool $gray, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /** @deprecated */
  public function paintOpaqueImage(ImagickPixel|string $target_color, ImagickPixel|string $fill_color, float $fuzz, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /** @deprecated */
  public function paintTransparentImage(ImagickPixel|string $target_color, float $alpha, float $fuzz): bool {}
  
  /**
   * @psalm-param self::PREVIEW_* $preview
   */
  public function previewImages(int $preview): bool {}
  
  public function profileImage(string $name, ?string $profile): bool {}
  
  public function quantizeImage(int $number_colors, int $colorspace, int $tree_depth, bool $dither, bool $measure_error):  bool {}
  
  public function quantizeImages(int $number_colors, int $colorspace, int $tree_depth, bool $dither, bool $measure_error): bool {}
  
  /** @deprecated */
  public function reduceNoiseImage(float $radius): bool {}
  
  public function removeImageProfile(string $name): string {}
  
  public function separateImageChannel(int $channel): bool {}
  
  public function sepiaToneImage(float $threshold): bool {}
  
  /** @deprecated */
  public function setImageBias(float $bias): bool {}
  
  /** @deprecated */
  public function setImageBiasQuantum(string $bias): void {}
  
  public function setImageBluePrimary(float $x, float $y, float $z = null): bool {}
  
  public function setImageBorderColor(ImagickPixel|string $border_color): bool {}
  
  public function setImageChannelDepth(int $channel, int $depth): bool {}
  
  public function setImageColormapColor(int $index, ImagickPixel|string $color): bool {}
  
  public function setImageColorspace(int $colorspace): bool {}
  
  public function setImageDispose(int $dispose): bool {}
  
  public function setImageExtent(int $columns, int $rows): bool {}
  
  public function setImageGreenPrimary(float $x, float $y, float $z = null): bool {}
  
  /**
   * @psalm-param self::INTERLACE_* $interlace
   */
  public function setImageInterlaceScheme(int $interlace): bool {}
  
  public function setImageProfile(string $name, string $profile): bool {}
  
  public function setImageRedPrimary(float $x, float $y, float $z = null): bool {}
  
  // RENDERINGINTENT
  /**
   * @psalm-param self::RENDERINGINTENT_* $rendering_intent
   */
  public function setImageRenderingIntent(int $rendering_intent): bool {}
  
  public function setImageVirtualPixelMethod(int $method): bool {}
  
  public function setImageWhitePoint(float $x, float $y, float $z = null): bool {}
  
  public function  sigmoidalContrastImage(bool $sharpen, float $alpha, float $beta, int $channel = Imagick::CHANNEL_DEFAULT): bool{}
  
  public function stereoImage(Imagick $offset_image): bool {}
  
  public function textureImage(Imagick $texture): Imagick {}
  
  public function tintImage(ImagickPixel|string $tint_color, ImagickPixel|string $opacity_color, bool $legacy = false): bool {}
  
  public function unsharpMaskImage(float $radius, float $sigma, float $amount, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function getImage(): Imagick {}
  
  public function addImage(Imagick $image): bool {}
  
  public function setImage(Imagick $image): bool {}
  
  public function newImage(int $columns, int $rows, ImagickPixel|string $background_color, string $format = null): bool {}
  
  public function newPseudoImage(int $columns, int $rows, string $pseudo_format): bool {}
  
  public function getCompression(): int {}
  
  public function getCompressionQuality(): int {}
  
  public static function getCopyright(): string {}
  
  /**
   * @return string[]
   */
  public static function getConfigureOptions(string $pattern = "*"): array {}
  
  public static function getFeatures(): string {}
  
  public function getFilename(): string {}
  
  public function getFormat(): string {}
  
  public static function getHomeURL(): string {}
  
  public function getInterlaceScheme(): int {}
  
  public function getOption(string $key): string {}
  
  public static function getPackageName(): string {}
  
  public function getPage(): array {}
  
  public static function getQuantum(): int {}
  
  public static function getHdriEnabled(): bool {}
  
  public static function getQuantumDepth(): array {}
  
  public static function getQuantumRange(): array {}
  
  public static function getReleaseDate(): string {}
  
  public static function getResource(int $type): int {}
  
  public static function getResourceLimit(int $type): int {}
  
  public function getSamplingFactors(): array {}
  
  public function getSize(): array {}
  
  public static function getVersion(): array {}
  
  public function setBackgroundColor(ImagickPixel|string $background_color): bool {}
  
  public function setCompression(int $compression): bool {}
  
  public function setCompressionQuality(int $quality): bool {}
  
  public function setFilename(string $filename): bool {}
  
  public function setFormat(string $format): bool {}
  
  /**
   * @psalm-param self::INTERLACE_* $interlace
   */
  public function setInterlaceScheme(int $interlace): bool {}
  
  public function setOption(string $key, string $value): bool {}
  
  public function setPage(int $width, int $height, int $x, int $y): bool {}
  
  public static function setResourceLimit(int $type, int $limit): bool {}
  
  public function setResolution(float $x_resolution, float $y_resolution): bool {}
  
  public function setSamplingFactors(array $factors): bool {}
  
  public function setSize(int $columns, int $rows): bool {}
  
  /**
   * @psalm-param self::IMGTYPE_* $imgtype
   */
  public function setType(int $imgtype): bool {}
  
  /**
   * @alias Imagick::getIteratorIndex
   */
  public function key(): int {}
  
  /**
   * @alias Imagick::nextImage
   * @tentative-return-type
   */
  public function next(): void {}
  
  /**
   * @alias Imagick::setFirstIterator
   * @tentative-return-type
   */
  public function rewind(): void {}
  
  public function valid(): bool {}
  
  public function current(): Imagick {}
  
  public function brightnessContrastImage(float $brightness, float $contrast, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function colorMatrixImage(array $color_matrix): bool {}
  
  public function selectiveBlurImage(float $radius, float $sigma, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function rotationalBlurImage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function statisticImage(int $type, int $width, int $height, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  public function subimageMatch(Imagick $image, ?array &$offset = null, ?float &$similarity = null, float $threshold = 0.0, int $metric = 0): Imagick {}
  
  /**
   * @alias Imagick::subimageMatch
   */
  public function similarityImage(Imagick $image, ?array &$offset = null, ?float &$similarity = null, float $threshold = 0.0, int $metric = 0): Imagick {}
  
  public static function setRegistry(string $key, string $value): bool {}
  
  public static function getRegistry(string $key): string {}
  
  public static function listRegistry(): array {}
  
  /**
   * @psalm-param self::MORPHOLOGY_* $morphology
   */
  public function morphology(int $morphology, int $iterations, ImagickKernel $kernel, int $channel = Imagick::CHANNEL_DEFAULT): bool {}
  
  /** @deprecated */
  public function filter(ImagickKernel $kernel, int $channel = Imagick::CHANNEL_UNDEFINED): bool {}
  
  public function setAntialias(bool $antialias): void {}
  
  public function getAntialias(): bool {}
  
  /**
   * @param string $color_correction_collection example:
   * <ColorCorrectionCollection xmlns="urn:ASC:CDL:v1.2">
   * <ColorCorrection id="cc03345">
   * <SOPNode>
   * <Slope> 0.9 1.2 0.5 </Slope>
   * <Offset> 0.4 -0.5 0.6 </Offset>
   * <Power> 1.0 0.8 1.5 </Power>
   * </SOPNode>
   * <SATNode>
   * <Saturation> 0.85 </Saturation>
   * </SATNode>
   * </ColorCorrection>
   * </ColorCorrectionCollection>
   */
  public function colorDecisionListImage(string $color_correction_collection): bool {}
  
  public function optimizeImageTransparency(): void {}
  
  public function autoGammaImage(?int $channel = Imagick::CHANNEL_ALL): void {}
  
  public function autoOrient(): void {}
  
  /** @alias Imagick::autoOrient */
  public function autoOrientate(): void {}
  
  /**
   * @psalm-param self::COMPOSITE_* $composite_constant
   */
  public function compositeImageGravity(Imagick $image, int $composite_constant, int $gravity): bool {}
  
  public function localContrastImage(float $radius, float $strength): void {}
  
  /**
   * Identifies the potential image type
   * @psalm-return self::IMGTYPE_*
   */
  public function identifyImageType(): int {}
  
  /**
   * @psalm-param self::PIXELMASK_* $pixelmask
   */
  public function getImageMask(int $pixelmask): ?Imagick {}
  
  /**
   * @psalm-param self::PIXELMASK_* $pixelmask
   */
  public function setImageMask(Imagick $clip_mask, int $pixelmask): void {}
  
  public function cannyEdgeImage(float $radius, float $sigma, float $lower_percent, float $upper_percent): bool {}
  
  public static function setSeed(int $seed): void {}
  
  public function waveletDenoiseImage(float $threshold, float $softness): bool {}
  
  public function meanShiftImage(int $width, int $height, float $color_distance): bool {}
  
  public function kmeansImage(int $number_colors, int $max_iterations, float $tolerance): bool {}
  
  public function rangeThresholdImage(float $low_black, float $low_white, float $high_white, float $high_black): bool {}
  
  /**
   * @psalm-param self::AUTO_THRESHOLD_* $auto_threshold_method
   */
  public function autoThresholdImage(int $auto_threshold_method): bool {}
  
  public function bilateralBlurImage(float $radius, float $sigma, float $intensity_sigma, float $spatial_sigma): bool {}
  
  public function claheImage(int $width, int $height, int $number_bins, float $clip_limit): bool {}
  
  public function channelFxImage(string $expression): Imagick {}
  
  public function colorThresholdImage(ImagickPixel|string $start_color, ImagickPixel|string $stop_color): bool {}
  
  /**
   * @psalm-param self::COMPLEX_OPERATOR_* $complex_operator
   */
  public function complexImages(int $complex_operator): Imagick {}
  
  /**
   * @psalm-param self::INTERPOLATE_* $interpolate
   */
  public function interpolativeResizeImage(int $columns, int $rows, int $interpolate): bool {}
  
  public function levelImageColors(ImagickPixel|string $black_color, ImagickPixel|string $white_color, bool $invert): bool {}
  
  public function levelizeImage(float $black_point, float $gamma, float $white_point): bool {}
  
  public function orderedDitherImage(string $dither_format): bool {}
  
  public function whiteBalanceImage(): bool {}
  
  public function deleteOption(string $option): bool {}
  
  public function getBackgroundColor(): ImagickPixel {}
  
  /**
   * @return string[]
   */
  public function getImageArtifacts(string $pattern = "*"): array {}
  
  /**
   * @return [kurtosis: float, skewness: float]
   */
  public function getImageKurtosis(): array {}
  
  /**
   * @return [mean: float, standard_deviation: float]
   */
  public function getImageMean(): array {}
  
  /**
   * @return [minima: float, maxima: float]
   */
  public function getImageRange(): array {}
  
  /**
   * @return int - PixelInterpolateMethod
   */
  public function getInterpolateMethod(): int {}
  
  /**
   * @return string[]
   */
  public function getOptions(string $pattern = "*"): array {}
  
  /**
   * @return int OrientationType
   */
  public function getOrientation(): int {}
  
  /**
   * @return [x: float, y: float]
   */
  public function getResolution(): array {}
  
  /**
   * @psalm-return self::IMAGE_TYPE_*
   */
  public function getType(): int {}
  
  public function polynomialImage(array $terms): bool {}
  
  public function setDepth(int $depth): bool {}
  
  public function setExtract(string $geometry): bool {}
  
  /**
   * @param int $method - PixelInterpolateMethod
   */
  public function setInterpolateMethod(int $method): bool{}
  
  /**
   * @param int $orientation - OrientationType
   */
  public function setOrientation(int $orientation): bool {}
}
