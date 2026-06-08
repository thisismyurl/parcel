<?php
/**
 * [CORE] Bootstrap — the single re-prefixing point for the whole theme line.
 *
 * @package parcel
 */

namespace Parcel;

defined( 'ABSPATH' ) || exit;

const SLUG    = 'parcel';
const VERSION = '1.6148.1706';

define( __NAMESPACE__ . '\\DIR', get_template_directory() );
define( __NAMESPACE__ . '\\URI', get_template_directory_uri() );
