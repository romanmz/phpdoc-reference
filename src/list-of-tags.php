<?php
/**
 * Tags: Page-level Blocks
 * 
 * List of tags that a page can have (in addition to the ones shared between all blocks):
 * 
 * @package list-of-tags
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @filesource
 */


/**
 * Tags: All Blocks
 * 
 * List of tags that all blocks (including page-level blocks) can have:
 * 
 * @author Roman Martinez <roman.mx3@gmail.com>
 * @copyright Copyright (c) 2018, Roman Martinez
 * @version 1.6 Security fixes only
 * @since 1.0 Introduced to perform a certain action
 * @deprecated 1.5 Replaced by a better function
 * @link https://romanmartinez.me My Website
 * @example "example.php" Example of use
 * @see relatedFunction() A function that does something similar
 * @uses usedFunction() A different function used by this function
 * @todo Complete implementation
 * @source 10 4 Description of the code being displayed (starting at line 10, showing 4 lines total)
 */
function allBlocks() {}
/**
 * Tags: All Blocks (ignored)
 * 
 * Excludes the element from the documentation
 * @ignore
 */
function allBlocksIgnore() {}
/**
 * Tags: All Blocks (internal)
 * 
 * Excludes the element from the documentation, unless the --parseprivate flag is used
 * @internal Description of why this element is only documented for internal use
 */
function allBlocksInternal() {}
/**
 * Tags: All Blocks (function referenced with '@see')
 */
function relatedFunction() {}
/**
 * Tags: All Blocks (function referenced with '@uses')
 */
function usedFunction() {}


/**
 * Tags: Global Variables
 * 
 * Add a tag to define global variables (only once per variable). Names must match, you can change the name used in the documentation with the @name tag
 * The same tag can then be used on a function or method to indicate that the global is being used
 * 
 * @global mixed $GLOBALS['global_vars']
 * @name $global_vars
 */
$GLOBALS['global_vars'] = 10;


/**
 * Tags: Classes
 * 
 * Tags that can be used on class definitions
 * @package list-of-tags\subpackage
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 * @method int magic_method(string $keyword) Valid magic method calls
 * @property array $magic_property_rw Valid properties (read and write)
 * @property-read array $magic_property_r Valid properties (read only)
 * @property-write array $magic_property_w Valid properties (write only)
 */
class ClassBlocks {
	
	
	/**
	 * @var int Some description
	 */
	public $property_blocks;
	/**
	 * @var string $keyword The keyword to use to filter the results
	 * @var int $postcode The postcode to use as a basis for the search
	 */
	public $keyword, $postcode;
	
	
	/**
	 * Tags: Functions and Methods
	 * 
	 * The @api tag only applies to methods, not to functions
	 * 
	 * @api
	 * @param int $param1 The first number to add
	 * @param int $param2 The second number to add
	 * @throws InvalidArgumentException if the first argument is not a number
	 * @throws InvalidArgumentException if the second argument is not a number
	 * @return int Returns the sum of both numbers
	 * @global mixed global_vars Global variable used
	 */
	function function_and_method_blocks($param1, $param2) {
		global $global_vars;
		return 10;
	}
}


/**
 * Inline Tags
 * 
 * Inline links: {@link https://romanmartinez.me My Website}
 * 
 * Inline HTML: <code> <?php echo strlen('6'); ?> </code>
 * 
 * Inline HTML (another): <pre>echo strlen('6');<br>$varname = 'lorem ipsum'</pre>
 * 
 * Inline source code fragments: {@source 1, 2}
 * 
 * Inline example fragments: {@example "example.php" 3}
 * 
 * Copy description from parent class: {@inheritdoc}
 * 
 * Internal comments: {@internal This is an internal comment }}
 * 
 * @package list-of-tags\subpackage
 */
class SubClass extends ClassBlocks {
	public $var1 = 1;
	public $var2 = 2;
	function __construct() {}
	function get_sum() {
		return $var1 * $var2;
	}
}
